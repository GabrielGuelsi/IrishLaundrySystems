from pathlib import Path
from reportlab.lib import colors
from reportlab.lib.enums import TA_CENTER, TA_LEFT
from reportlab.lib.pagesizes import A4
from reportlab.lib.styles import ParagraphStyle, getSampleStyleSheet
from reportlab.lib.units import cm
from reportlab.platypus import (
    SimpleDocTemplate, Paragraph, Spacer, PageBreak, Table, TableStyle,
    KeepTogether, Flowable
)
from reportlab.pdfbase.pdfmetrics import stringWidth


ROOT = Path(r"C:\laragon\www")
OUTPUT = ROOT / "output" / "pdf" / "runaway_reaction_beach_bible_v1.pdf"


NAVY = colors.HexColor("#163047")
OCEAN = colors.HexColor("#187E9F")
TEAL = colors.HexColor("#21A5A0")
SAND = colors.HexColor("#E6BE78")
CORAL = colors.HexColor("#E5644B")
CREAM = colors.HexColor("#FFF7E7")
INK = colors.HexColor("#1D2730")
MUTED = colors.HexColor("#5F6B73")
PALE_BLUE = colors.HexColor("#E9F4F8")
PALE_ORANGE = colors.HexColor("#FFF0DC")
PALE_GREEN = colors.HexColor("#E9F5EE")
LINE = colors.HexColor("#D7E1E4")


styles = getSampleStyleSheet()
styles.add(ParagraphStyle(
    name="CoverTitle", parent=styles["Title"], fontName="Helvetica-Bold",
    fontSize=31, leading=35, textColor=CREAM, alignment=TA_CENTER, spaceAfter=10
))
styles.add(ParagraphStyle(
    name="CoverSub", parent=styles["Normal"], fontName="Helvetica",
    fontSize=13, leading=18, textColor=colors.HexColor("#CDE7EA"), alignment=TA_CENTER
))
styles.add(ParagraphStyle(
    name="H1Custom", parent=styles["Heading1"], fontName="Helvetica-Bold",
    fontSize=20, leading=24, textColor=NAVY, spaceBefore=8, spaceAfter=9
))
styles.add(ParagraphStyle(
    name="H2Custom", parent=styles["Heading2"], fontName="Helvetica-Bold",
    fontSize=13, leading=17, textColor=OCEAN, spaceBefore=9, spaceAfter=5
))
styles.add(ParagraphStyle(
    name="BodyCustom", parent=styles["BodyText"], fontName="Helvetica",
    fontSize=9.4, leading=14, textColor=INK, spaceAfter=6
))
styles.add(ParagraphStyle(
    name="Small", parent=styles["BodyText"], fontName="Helvetica",
    fontSize=7.7, leading=10.2, textColor=MUTED, spaceAfter=3
))
styles.add(ParagraphStyle(
    name="Callout", parent=styles["BodyText"], fontName="Helvetica-Bold",
    fontSize=11, leading=15, textColor=NAVY, leftIndent=10, rightIndent=10, spaceAfter=5
))
styles.add(ParagraphStyle(
    name="Prompt", parent=styles["BodyText"], fontName="Helvetica",
    fontSize=7.6, leading=10.2, textColor=INK, leftIndent=7, rightIndent=7
))


def P(text, style="BodyCustom"):
    return Paragraph(text, styles[style])


def bullet(text):
    return P("<font color='#E5644B'>-</font> " + text)


def section(title):
    return [Spacer(1, 4), P(title, "H1Custom")]


def subsection(title):
    return P(title, "H2Custom")


def make_table(rows, widths, header=True, font_size=7.6):
    converted = []
    for row_index, row in enumerate(rows):
        converted.append([
            cell if isinstance(cell, Flowable) else P(str(cell), "Small" if row_index else "BodyCustom")
            for cell in row
        ])
    table = Table(converted, colWidths=widths, repeatRows=1 if header else 0, hAlign="LEFT")
    commands = [
        ("GRID", (0, 0), (-1, -1), 0.35, LINE),
        ("VALIGN", (0, 0), (-1, -1), "TOP"),
        ("LEFTPADDING", (0, 0), (-1, -1), 5),
        ("RIGHTPADDING", (0, 0), (-1, -1), 5),
        ("TOPPADDING", (0, 0), (-1, -1), 5),
        ("BOTTOMPADDING", (0, 0), (-1, -1), 5),
    ]
    if header:
        commands += [
            ("BACKGROUND", (0, 0), (-1, 0), NAVY),
            ("TEXTCOLOR", (0, 0), (-1, 0), CREAM),
            ("FONTNAME", (0, 0), (-1, 0), "Helvetica-Bold"),
        ]
    for idx in range(1 if header else 0, len(rows)):
        if idx % 2 == 0:
            commands.append(("BACKGROUND", (0, idx), (-1, idx), colors.HexColor("#F8FBFC")))
    table.setStyle(TableStyle(commands))
    return table


class BeachMap(Flowable):
    def __init__(self, width=17*cm, height=10*cm):
        super().__init__()
        self.width = width
        self.height = height

    def draw_box(self, c, x, y, w, h, title, fill, text_color=INK):
        c.setFillColor(fill)
        c.setStrokeColor(colors.white)
        c.roundRect(x, y, w, h, 5, fill=1, stroke=1)
        c.setFillColor(text_color)
        c.setFont("Helvetica-Bold", 7)
        lines = title.split("\n")
        for i, line in enumerate(lines):
            tw = stringWidth(line, "Helvetica-Bold", 7)
            c.drawString(x + (w-tw)/2, y + h/2 - i*8 + (len(lines)-1)*4, line)

    def draw(self):
        c = self.canv
        c.setFillColor(colors.HexColor("#D7EEF2"))
        c.roundRect(0, 0, self.width, self.height, 9, fill=1, stroke=0)
        c.setFillColor(SAND)
        c.roundRect(10, 10, self.width-20, self.height-40, 14, fill=1, stroke=0)
        c.setFillColor(OCEAN)
        c.roundRect(10, 10, self.width-20, 22, 10, fill=1, stroke=0)
        self.draw_box(c, self.width/2-44, self.height-42, 88, 24, "TOPO DA\nMONTANHA", PALE_GREEN)
        self.draw_box(c, 20, self.height-82, 65, 24, "ENSEADA /\nCAVERNA", colors.HexColor("#D7E2E7"))
        self.draw_box(c, self.width-88, self.height-82, 65, 24, "FAROL /\nFALESIA", colors.HexColor("#FFF4CC"))
        self.draw_box(c, self.width/2-34, self.height-93, 68, 22, "PALMEIRAL", PALE_GREEN)
        self.draw_box(c, self.width-111, self.height-124, 86, 24, "HOTEL /\nRESORT", colors.HexColor("#F8E3C1"))
        self.draw_box(c, self.width/2-43, self.height-132, 86, 24, "UNIDADE DE\nCONTENCAO", PALE_ORANGE)
        self.draw_box(c, 30, self.height-142, 66, 22, "CABANA", colors.HexColor("#F6DFC4"))
        self.draw_box(c, self.width/2-48, 36, 96, 22, "PIER + BARCO", colors.HexColor("#D4E8EF"))
        c.setStrokeColor(NAVY)
        c.setDash(3, 2)
        for a, b in [
            ((self.width/2, self.height-132), (self.width-68, self.height-112)),
            ((self.width/2, self.height-132), (62, self.height-131)),
            ((self.width/2, self.height-132), (self.width/2, 58)),
            ((self.width/2, self.height-132), (self.width/2, self.height-42)),
        ]:
            c.line(a[0], a[1], b[0], b[1])
        c.setDash()
        c.setFillColor(NAVY)
        c.setFont("Helvetica", 6.5)
        c.drawString(15, 15, "Mar aberto - limite natural, correnteza e neblina")


def footer(canvas, doc):
    canvas.saveState()
    page = canvas.getPageNumber()
    canvas.setStrokeColor(LINE)
    canvas.line(doc.leftMargin, 1.35*cm, A4[0]-doc.rightMargin, 1.35*cm)
    canvas.setFont("Helvetica", 7.5)
    canvas.setFillColor(MUTED)
    canvas.drawString(doc.leftMargin, 0.88*cm, "Runaway Reaction - Praia 01 - Biblia de Producao")
    canvas.drawRightString(A4[0]-doc.rightMargin, 0.88*cm, f"Pagina {page}")
    canvas.restoreState()


def cover(canvas, doc):
    canvas.saveState()
    w, h = A4
    canvas.setFillColor(NAVY)
    canvas.rect(0, 0, w, h, fill=1, stroke=0)
    canvas.setFillColor(OCEAN)
    canvas.circle(w*0.13, h*0.18, 150, fill=1, stroke=0)
    canvas.setFillColor(CORAL)
    canvas.circle(w*0.85, h*0.82, 110, fill=1, stroke=0)
    canvas.setFillColor(SAND)
    canvas.rect(0, 0, w, 45, fill=1, stroke=0)
    canvas.restoreState()


def build_pdf():
    OUTPUT.parent.mkdir(parents=True, exist_ok=True)
    doc = SimpleDocTemplate(
        str(OUTPUT), pagesize=A4,
        leftMargin=1.55*cm, rightMargin=1.55*cm,
        topMargin=1.5*cm, bottomMargin=1.8*cm,
        title="Runaway Reaction - Praia 01 - Biblia de Producao",
        author="Joao Gabriel and Codex"
    )
    story = []

    # Cover
    story += [Spacer(1, 5.1*cm), P("RUNAWAY REACTION", "CoverTitle"),
              P("Praia 01 - Biblia de Producao", "CoverSub"), Spacer(1, 0.8*cm),
              P("Uma ilha inteira tentando te matar.<br/>Sobreviva com os amigos e fuja - se conseguir.", "CoverSub"),
              Spacer(1, 2.8*cm)]
    cover_box = Table([[P("<b>ESTADO DO DOCUMENTO</b><br/>Versao 1.0 - decisao de pre-producao<br/>Escopo atual: Laboratorio + Praia. Vila, Selva e Vulcao ficam como continuidade narrativa, nao como producao imediata.", "Callout")]], colWidths=[15.2*cm])
    cover_box.setStyle(TableStyle([
        ("BACKGROUND", (0,0), (-1,-1), colors.HexColor("#F7FAFA")),
        ("BOX", (0,0), (-1,-1), 0.8, colors.HexColor("#C9E2E4")),
        ("LEFTPADDING", (0,0), (-1,-1), 12),
        ("RIGHTPADDING", (0,0), (-1,-1), 12),
        ("TOPPADDING", (0,0), (-1,-1), 12),
        ("BOTTOMPADDING", (0,0), (-1,-1), 12),
    ]))
    story += [cover_box, PageBreak()]

    # Identity
    story += section("1. Identidade do jogo")
    story += [P("<b>Premissa:</b> cientistas atrapalhados criam uma reacao climatica em cadeia. Cada tentativa de estabilizar uma ilha desloca o problema para a proxima. O objetivo final e reparar a Maquina do Clima e desfazer tudo.")]
    story += [P("<b>Promessa:</b> cooperacao em primeira pessoa, fisica engraçada, desastres telegrafados e fugas que geram clipes. A run completa tera quatro ilhas; o primeiro slice precisa provar apenas Laboratorio + Praia.")]
    story.append(subsection("Decisoes ja travadas"))
    decisions = [
        "Co-op PvE para ate 6 jogadores. PvP foi cortado.",
        "Primeira pessoa; personagens cientistas caricatos, com corpos cosmeticos sem vantagem mecanica.",
        "Sem market Steam, caixas pagas, loot box ou economia de venda de itens.",
        "Sem NPCs no escopo inicial.",
        "A roleta foi removida. Cada fragmento instalado ativa a proxima reacao ambiental.",
        "Morte normalmente vira estado caido e resgate; mortes definitivas retornam como fantasma com pings limitados ate a proxima ilha.",
        "Host autoritativo: fisica critica simulada pelo host, clientes interpolam.",
    ]
    story += [bullet(x) for x in decisions]
    story.append(subsection("Loop principal"))
    loop_rows = [
        ["Passo", "Acao do grupo", "Resultado"],
        ["1", "Explorar, ler o clima e encontrar um fragmento", "Escolha de rota e risco"],
        ["2", "Levar o fragmento para a Unidade de Contencao", "Equipe se reagrupa"],
        ["3", "Instalar a peca", "A ilha muda e piora"],
        ["4", "Adaptar-se e resgatar aliados", "Nova rota ou novo perigo"],
        ["5", "Completar quatro pecas e sobreviver ao finale", "Nucleo obtido, barco foge"],
    ]
    story += [make_table(loop_rows, [1.2*cm, 7.4*cm, 7.0*cm]), PageBreak()]

    # Narrative
    story += section("2. Roteiro narrativo")
    story.append(subsection("Prologo - Laboratorio"))
    story += [P("A equipe testa uma Maquina do Clima portatil. Um vazamento inicia chuva acida leve dentro do laboratorio. A sirene toca, gotas corroem o teto e os jogadores correm por um corredor de emergencia ate o pier. O prologo deve durar 45-60 segundos e ensinar movimento, stamina, leitura de sinal e saida coletiva.")]
    story.append(subsection("A cadeia de ilhas"))
    narrative_rows = [
        ["Etapa", "Problema atual", "Modulo criado", "Problema que nasce"],
        ["Praia", "Agua instavel", "Nucleo de Mare", "Vento e pressao na Vila"],
        ["Vila", "Tempestade e tornado", "Nucleo de Vento", "Composto se espalha na Selva"],
        ["Selva", "Gas, vegetacao e terreno", "Nucleo Biofiltrante", "Pressao vai para o Vulcao"],
        ["Vulcao", "Calor, tremores e lava", "Nucleo Termico", "Quatro nucleos reparam a maquina"],
    ]
    story += [make_table(narrative_rows, [2.2*cm, 4.0*cm, 4.0*cm, 5.4*cm])]
    story += [Spacer(1, 5), P("<b>Frase que explica tudo:</b> " + "Nao estamos eliminando a energia. Estamos apenas empurrando ela para outro lugar.", "Callout"), PageBreak()]

    # Beach
    story += section("3. Praia 01 - mapa e ritmo")
    story += [P("A Praia e um resort costeiro antigo perto do laboratorio. Ela combina areia aberta, resort, rochas, farol e montanha. O objetivo e ensinar as regras do jogo sem parecer tutorial.")]
    story += [BeachMap(), Spacer(1, 5)]
    phase_rows = [
        ["Fase", "Gatilho", "Estado do mapa", "Aprendizado"],
        ["1 - Tempestade", "Fragmento 1 instalado", "Vento e chuva leve", "Ler clima e usar cobertura"],
        ["2 - Mare alta", "Fragmento 2 instalado", "Cabana e praia baixa inundam", "Nadar e resgatar"],
        ["3 - Mare baixa", "Fragmento 3 instalado", "Oceano recua e barco encalha", "Atalho, corrida e risco"],
        ["4 - Tsunami", "Fragmento 4 instalado", "Sirene, onda e destruicao controlada", "Fugir, agarrar e sobreviver"],
    ]
    story += [make_table(phase_rows, [2.4*cm, 3.5*cm, 5.2*cm, 4.5*cm]), PageBreak()]

    # zones
    story += section("4. Arquitetura da Praia")
    zone_rows = [
        ["Zona", "Posicao e dimensao", "Papel de jogo", "Regra de destruicao"],
        ["Pier + barco", "Frente da ilha; pier 4 x 24 m; barco 8 x 3 m", "Spawn, chegada e fuga", "Pier final pode danificar; rota nunca bloqueia"],
        ["Praia aberta", "Faixa baixa entre pier e centro", "Corrida, onda, detritos, rotas de agua", "Props leves podem voar"],
        ["Cabana", "9 x 7 x 4,5 m", "Abrigo curto e resgate no telhado", "Tem estados seca, inundada e danificada"],
        ["Unidade de Contencao", "Plataforma central elevada; 3,5 x 2,5 x 2,2 m", "Instalar quatro fragmentos", "Nunca quebra ou bloqueia"],
        ["Hotel", "28 x 16 x 11 m", "Verticalidade, objetivo inundado e rotas", "Janelas e varanda quebram; escadas nao"],
        ["Palmeiral", "Entre hotel, farol e centro", "Pontos de agarrar e rota alternativa", "Algumas palmeiras caem, nunca todas"],
        ["Caverna", "Camara 8 x 6 x 4 m + saida secundaria", "Atalho e transporte em dupla", "Segura contra vento, perigosa na mare"],
        ["Farol", "Diametro 6 m; altura 22 m", "Escalada, transmissor e rota arriscada", "Base e acesso protegidos"],
        ["Montanha", "Topo a 40-45 m acima da praia", "Refugio mais confiavel no tsunami", "Nunca quebra"],
    ]
    story += [make_table(zone_rows, [2.1*cm, 4.2*cm, 4.7*cm, 4.6*cm])]
    story += [P("<b>Rotas obrigatorias ao topo:</b> trilha longa e segura, subida estreita pelo farol e rota improvisada por rochas/cordas. Nenhuma delas pode depender de um objeto destrutivel.")]
    story += [PageBreak()]

    # Hotel detail
    story += section("5. Hotel, cabana, farol e interiores")
    story.append(subsection("Hotel: resort pequeno, nao um labirinto"))
    story += [P("O hotel tera <b>6 quartos de hospedes jogaveis</b>, nao 20 quartos decorativos. A fachada pode parecer maior com janelas falsas, mas o interior precisa ser legivel em primeira pessoa.")]
    hotel_rows = [
        ["Andar", "Comodos", "Funcao e estado"],
        ["Terreo", "Recepcao, sala de cafe, cozinha/estoque, escada", "Inunda na mare alta. Fragmento 2 fica no estoque de manutencao, nao escondido em quarto aleatorio."],
        ["1o andar", "Quartos 101, 102, 103; corredor externo e varanda", "Rota seca na mare alta, lugar para reviver e observar a praia."],
        ["2o andar", "Quartos 201, 202, 203; escada para cobertura", "Abrigo temporario. Varanda pode ter corrimao danificado, mas caminho principal fica aberto."],
        ["Cobertura", "Caixa d'agua, unidade de ar, acesso de manutencao", "Ponto visual e resgate; nao e abrigo garantido para tsunami."],
    ]
    story += [make_table(hotel_rows, [2.3*cm, 5.2*cm, 8.1*cm])]
    story.append(subsection("Cabana e farol"))
    mini_rows = [
        ["Estrutura", "Comodos/partes", "Uso"],
        ["Cabana", "Sala/cozinha, quarto pequeno, banheiro, telhado acessivel", "Mostra inundacao cedo; telhado recebe Rescue Anchor."],
        ["Farol", "Deposito terreo, escada espiral, sala da lanterna, plataforma externa", "Fragmento 1 no topo; a plataforma e rota curta, mas estreita."],
        ["Caverna", "Entrada, camara principal, passagem secundaria", "Fragmento 3 exige duas pessoas para carregar a peca pesada."],
    ]
    story += [make_table(mini_rows, [2.4*cm, 6.2*cm, 7.0*cm]), PageBreak()]

    # Assets
    story += section("6. Downloads 3D e manifesto de assets")
    asset_rows = [
        ["Baixar agora", "Uso", "Formato/licenca"],
        ["Quaternius Ultimate Nature Pack", "Palmeiras, rochas, troncos, vegetacao", "150 modelos; FBX/OBJ/Blend; CC0"],
        ["Quaternius Ultimate Buildings Pack", "Portas, janelas, telhados e fachada", "76 modelos; FBX/OBJ/Blend; CC0"],
        ["Quaternius Ultimate House Interior Pack", "Moveis da cabana e hotel", "123 modelos; FBX/OBJ/Blend; CC0"],
        ["Quaternius Ultimate Modular Sci-Fi Pack", "Laboratorio, tubo, console e tanque", "46 modelos; FBX/OBJ/Blend; CC0"],
        ["Kenney Watercraft Kit", "Casco, mastro, vela e barco de fuga", "45 arquivos 3D; CC0"],
    ]
    story += [make_table(asset_rows, [5.0*cm, 6.1*cm, 4.5*cm])]
    story.append(subsection("Nao baixar agora"))
    story += [bullet("Kenney Nature Kit: e 3D e CC0, mas duplica Nature Pack e misturar as duas familias reduz identidade visual."),
              bullet("Ultimate Furniture Pack: redundante com House Interior."),
              bullet("Survival Pack: usar somente quando o sistema de itens estiver pronto."),
              bullet("Personagens prontos: os cientistas precisam ser autorais.")]
    story.append(subsection("Assets que devem ser autorais"))
    story += [P("Terreno, montanha, farol, estrutura do hotel, estrutura da cabana, Unidade de Contencao, quatro fragmentos, Maquina do Clima do laboratorio e todas as versoes quebradas. Packs dao materia-prima, nao identidade.")]
    story += [P("<b>Fontes:</b> quaternius.com/packs/ultimatenature.html | quaternius.com/packs/ultimatetexturedbuildings.html | quaternius.com/packs/ultimatehomeinterior.html | quaternius.com/packs/ultimatemodularscifi.html | kenney.nl/assets/watercraft-kit", "Small"), PageBreak()]

    # Prefabs
    story += section("7. Prefabs, materiais e regras 3D")
    prefab_rows = [
        ["Prefab/familia", "Quantidade", "Implementacao"],
        ["Palmeiras", "3 variantes; 24 colocacoes", "8 tem Grip Anchor; 4 podem cair em estado de tsunami."],
        ["Rochas", "4 variantes; 30-40 colocacoes", "Grandes usam collider simples; pequenas sao decorativas."],
        ["Props de praia", "6 tipos; 30-40 colocacoes", "Somente 18 podem ficar fisicos ao mesmo tempo."],
        ["Hotel", "1 shell + 3 estados", "hotel_intact, hotel_flooded, hotel_damaged; usar compound BoxCollider."],
        ["Cabana", "1 shell + 3 estados", "cabin_intact, cabin_flooded, cabin_damaged."],
        ["Barco", "2 estados", "boat_dry e boat_water; nunca duas copias ativas."],
        ["Unidade de Contencao", "1 prefab + 5 estados", "Sem fragmento, 1, 2, 3 e 4 pecas; slots visiveis."],
        ["Fragmentos", "4 unicos", "Silhueta, cor e encaixe mecanico proprios."],
    ]
    story += [make_table(prefab_rows, [4.0*cm, 3.2*cm, 8.4*cm])]
    story.append(subsection("Padrao tecnico"))
    story += [bullet("Usar apenas FBX no projeto. Nao importar FBX, OBJ e Blend duplicados."),
              bullet("Originais ficam em ThirdParty. Prefab customizado fica em Game/Art; nunca editar o original."),
              bullet("Props comuns: textura 512 px. Focal props: 1024 px. Nada de 2K/4K agora."),
              bullet("Estruturas usam compound BoxCollider. Objetos dinamicos nunca usam MeshCollider."),
              bullet("Palmeiras, farol, hotel e barco precisam de LOD simples antes do teste com 6 pessoas."),
              bullet("Nao editar YAML de cena manualmente. Usar Unity Editor, ProBuilder, Unity MCP ou Editor Script seguro.")]
    story += [PageBreak()]

    # destruction
    story += section("8. Destruicao e mudancas de estado")
    destruction_rows = [
        ["Classe", "Pode conter", "Nunca pode fazer"],
        ["Protected_Gameplay", "Terreno, tres rotas ao topo, base do farol, Unidade de Contencao, escadas principais", "Bloquear progresso ou soft-lock"],
        ["Breakable_Cosmetic", "Cadeiras, guarda-sois, caixas, placas, barris, cocos, redes", "Criar mais de 18 rigidbodies ativos"],
        ["Breakable_Controlled", "Telhado da cabana, varanda, pier final, palmeiras selecionadas", "Usar fractura procedural ou derrubar rota critica"],
    ]
    story += [make_table(destruction_rows, [3.6*cm, 6.0*cm, 6.0*cm])]
    story.append(subsection("Estados obrigatorios"))
    state_rows = [
        ["Objeto", "Intacto", "Mare alta", "Mare baixa", "Pos-tsunami"],
        ["Cabana", "seca", "terreo inundado", "seca/exposta", "telhado ou parede danificados"],
        ["Hotel", "acessivel", "terreo inundado", "normal", "janelas/varanda danificadas"],
        ["Barco", "na agua", "na agua", "encalhado", "na agua e pronto para fugir"],
        ["Praia", "areia aberta", "agua cobre rota baixa", "recifes expostos", "destrocos e espuma"],
    ]
    story += [make_table(state_rows, [2.6*cm, 3.2*cm, 3.7*cm, 3.4*cm, 3.3*cm])]
    story += [P("A onda nao deve ser agua fisica real. Ela e uma sequencia host-autoritativa de volume de arrasto/dano, VFX, som, troca de estado e poucos objetos controlados.")]
    story += [PageBreak()]

    # Audio
    story += section("9. Audio: onde baixar e o que usar")
    story += [P("Comecar com bibliotecas licenciadas de forma clara. Para sons pequenos, Kenney e suficiente. Para mar, vento, onda, madeira e impacto com qualidade maior, Sonniss e a fonte principal.")]
    audio_rows = [
        ["Fonte", "Usar para", "Licenca/pratica"],
        ["Kenney Sci-Fi Sounds", "Bipes, energia, painel, falha da maquina", "CC0; baixar somente os sons escolhidos."],
        ["Kenney Digital Audio", "Alertas digitais e estalos de energia", "CC0; 60 arquivos."],
        ["Kenney Impact Sounds", "Madeira, queda, impacto e detritos", "CC0; 130 arquivos."],
        ["Kenney Interface Sounds", "HUD, pickup, interacao e confirmacao", "CC0; 100 arquivos."],
        ["Sonniss GameAudioGDC", "Mar, vento, tempestade, tsunami e ambiente de alta qualidade", "Uso comercial em jogos; guardar copia da licenca do dia do download."],
    ]
    story += [make_table(audio_rows, [4.0*cm, 5.4*cm, 6.2*cm])]
    story.append(subsection("Mapa de som da Praia"))
    cue_rows = [
        ["Evento", "Som", "Regra"],
        ["Fragmento 1", "Estalo eletrico + vento crescente", "Sem sirene longa"],
        ["Fragmento 2", "Alarme de inundacao curto + agua subindo", "Direcional para praia baixa"],
        ["Fragmento 3", "Som grave de succao do oceano", "O mar fica silencioso antes de revelar recifes"],
        ["Fragmento 4", "Sirene longa + oceano silencioso + rugido distante", "Maxima urgencia; nunca repetir em eventos leves"],
        ["Tsunami", "Rugido, madeira, metal e respingos", "Mixar sem esconder gritos/voz de equipe"],
    ]
    story += [make_table(cue_rows, [3.0*cm, 6.2*cm, 6.4*cm])]
    story += [P("<b>Links:</b> kenney.nl/assets/sci-fi-sounds | kenney.nl/assets/digital-audio | kenney.nl/assets/impact-sounds | kenney.nl/assets/interface-sounds | sonniss.com/gameaudiogdc", "Small"), PageBreak()]

    # Machine
    story += section("10. Unidade de Contencao e Maquina do Clima")
    story += [P("A Unidade de Contencao substitui a roleta. Ela nao decide desastre; ela e a origem visivel de cada erro. Deve parecer uma ferramenta industrial improvisada, pesada e meio ridicula, nao uma nave militar e nunca um cassino.")]
    machine_rows = [
        ["Parte", "Especificacao"],
        ["Escala", "3,5 x 2,5 x 2,2 m; grande o bastante para seis jogadores enxergarem de longe."],
        ["Silhueta", "Caixa baixa e larga, dois cilindros laterais, tanque central transparente, cabos grossos e quatro slots frontais."],
        ["Slots", "Quatro encaixes diferentes, cada um com geometria e luz propria. Nunca usar apenas icones 2D."],
        ["Estados", "0-4 pecas instaladas. A cada peca, mais luz, vibracao, vapor e partes expostas."],
        ["Cores", "Chassi azul-cinza, avisos amarelos, perigo coral/vermelho, energia ciano."],
        ["Interacao", "Um jogador encaixa; colegas veem a animacao, ouvem o som e se preparam para a reacao."],
    ]
    story += [make_table(machine_rows, [3.3*cm, 12.3*cm])]
    story.append(subsection("Prompt visual da Unidade"))
    machine_prompt = "Create a stylized low-poly portable climate containment machine for a funny first-person co-op disaster game. Use the attached reference image only for silhouette and mood, never copy it. The machine is squat and wide, 3.5 meters long, industrial but clumsy, with a matte blue-gray chassis, coral warning panels, thick yellow cables, two side pressure cylinders, a central glass storm chamber with a tiny swirling cloud, four clearly different physical module sockets on the front, exposed bolts, emergency vents, analogue gauges, a red alarm beacon and cyan energy glow. It must look hand-built by irresponsible scientists, readable from far away, toy-like and slightly absurd, not realistic, not military, not sleek spaceship sci-fi, not a casino, not a roulette wheel, no text, no logos, no weapons, no characters."
    machine_prompt_box = Table([[P(machine_prompt, "Prompt")]], colWidths=[15.6*cm], style=[
        ("BACKGROUND", (0,0), (-1,-1), PALE_BLUE),
        ("BOX", (0,0), (-1,-1), 0.5, colors.HexColor("#B9DCE3")),
        ("LEFTPADDING", (0,0), (-1,-1), 9), ("RIGHTPADDING", (0,0), (-1,-1), 9),
        ("TOPPADDING", (0,0), (-1,-1), 8), ("BOTTOMPADDING", (0,0), (-1,-1), 8),
    ])
    story += [machine_prompt_box, PageBreak()]

    # Modules
    story += section("11. Pecas e modulos")
    story += [P("Cada ilha entrega um modulo grande feito de quatro fragmentos. Os quatro fragmentos precisam ter silhueta, peso e encaixe diferentes. Nunca fazer quatro caixas identicas com cores diferentes.")]
    beach_piece_rows = [
        ["Fragmento da Praia", "Local", "Forma 3D", "Reacao ao instalar"],
        ["Antena de Mare", "Farol", "Bobina alta com garfo de encaixe", "Tempestade costeira"],
        ["Valvula de Fluxo", "Estoque inundado do hotel", "Valvula coral com boia e trava lateral", "Mare alta"],
        ["Fole de Pressao", "Caverna", "Camara pesada com duas alcas", "Mare baixa extrema"],
        ["Lente de Sal", "Recifes expostos", "Prisma ciano-amarelo protegido por aro", "Sirene e tsunami"],
    ]
    story += [make_table(beach_piece_rows, [3.2*cm, 3.0*cm, 4.8*cm, 4.6*cm])]
    story.append(subsection("Quatro modulos da campanha"))
    module_rows = [
        ["Ilha", "Modulo grande", "Familia de pecas"],
        ["Praia", "Nucleo de Mare", "Antena, valvula, fole, lente"],
        ["Vila", "Nucleo de Vento", "Braçadeira de ancora, rotor, bolsa de pressao, para-raios"],
        ["Selva", "Nucleo Biofiltrante", "Camara de sementes, cartucho de gas, filtro de esporos, cortador de raiz"],
        ["Vulcao", "Nucleo Termico", "Escudo de calor, bomba magmatica, giroscopio sismico, chave de ignicao"],
    ]
    story += [make_table(module_rows, [2.3*cm, 4.2*cm, 9.1*cm])]
    story.append(subsection("Prompt para detalhar os modulos"))
    module_prompt = "You are the prop designer for Runaway Reaction, a stylized first-person co-op disaster comedy. Design four large repair modules for one broken Climate Machine: Tide Core, Wind Core, Biofilter Core and Thermal Core. Each module is assembled from four small physical fragments. For every fragment, define: name, island location, purpose, silhouette, dimensions, palette, material, connector geometry, carry behavior, interaction animation, visible state after installation, sound cue, and the environmental reaction it triggers. Make the fragments readable from 10 meters, mechanically believable when joined, humorous but not toy-store generic. Avoid loot boxes, glowing gems, weapons, military sci-fi, exact copies of existing games and random colored cubes. The Beach Tide Core must use an antenna coil, flood valve, pressure bellows and salt lens. Return a production table plus a simple assembly diagram description for each module."
    module_prompt_box = Table([[P(module_prompt, "Prompt")]], colWidths=[15.6*cm], style=[
        ("BACKGROUND", (0,0), (-1,-1), PALE_ORANGE),
        ("BOX", (0,0), (-1,-1), 0.5, colors.HexColor("#F0CB96")),
        ("LEFTPADDING", (0,0), (-1,-1), 9), ("RIGHTPADDING", (0,0), (-1,-1), 9),
        ("TOPPADDING", (0,0), (-1,-1), 8), ("BOTTOMPADDING", (0,0), (-1,-1), 8),
    ])
    story += [module_prompt_box, PageBreak()]

    # Production prompt / roadmap
    story += section("12. Producao: ordem segura")
    production_rows = [
        ["Marco", "Entrega", "Nao avancar antes de"],
        ["M0", "Auditoria do projeto e documentos", "Projeto compilar e premissas antigas marcadas como cortadas"],
        ["M1", "Dois jogadores com fisica, revive e objeto compartilhado", "Host e cliente verem o mesmo estado"],
        ["M2", "Laboratorio curto + Praia greybox", "Dois jogadores entenderem sem explicacao"],
        ["M3", "Quatro fragmentos, quatro estados e tsunami", "Run curta for divertida em 7-10 minutos"],
        ["M4", "Assets 3D, som, HUD e destruicao controlada", "Praia estiver legivel em primeira pessoa"],
        ["M5", "Teste com 4 e depois 6 jogadores", "Sem soft-lock, queda de performance ou rota bloqueada"],
        ["M6", "Vila", "Praia aprovada por playtest"],
    ]
    story += [make_table(production_rows, [1.5*cm, 7.0*cm, 7.1*cm])]
    story.append(subsection("Perguntas de design que ainda valem discutir"))
    questions = [
        "Qual e o tempo maximo entre instalar uma peca e a reacao comecar?",
        "Quantas pessoas carregam o Fole de Pressao: duas obrigatorias ou uma pode arrastar devagar?",
        "Qual e a regra exata para a plataforma do farol: sobrevivencia parcial ou apenas rota de escape?",
        "Como o fantasma pinga perigo sem tornar morrer vantajoso?",
        "Que itens terao spawn inicial na Praia: corda, boia, medkit, guarda-chuva ou nenhum?",
        "A Vila deve reutilizar o mesmo barco ou cada fuga muda de veiculo?",
    ]
    story += [bullet(x) for x in questions]
    story += [Spacer(1, 6), P("<b>Proximo passo recomendado:</b> baixar os cinco packs, enviar o prompt de intake de assets para o Claude e exigir um relatorio. So depois iniciar a montagem 3D da Praia.", "Callout")]

    doc.build(story, onFirstPage=cover, onLaterPages=footer)
    print(OUTPUT)


if __name__ == "__main__":
    build_pdf()
