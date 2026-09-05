# Runaway Reaction - Master Handoff for Claude Code

> **Status:** production handoff, 1 September 2026
>
> **Audience:** Claude Code working inside the actual Unity project.
>
> **Authority:** this document consolidates the Beach Bible PDF and the design decisions made afterwards. When it conflicts with an older scene, script, note, or PDF passage, this document wins.

## 0. Read this before touching the project

This is a stylized, first-person, 2-6 player co-op game for PC/Steam. The working title is **Runaway Reaction**; treat it as a working title only, not a final branding decision.

The game is about a group of irresponsible scientists who trigger a climate-reaction chain at a coastal laboratory. They do not merely survive disasters: each island contains four physical fragments needed to stabilize a field containment unit. Installing a fragment makes the current island worse. Four installed fragments form one major Core. At the fourth and final island, the four major Cores repair the original Climate Machine and stop the chain for good.

The game should feel like a colorful, low-poly, first-person co-op disaster comedy: readable, physical, a little clumsy, and full of rescue moments. It is **not** realistic survival, horror, PvP, generic sci-fi, a gacha economy, or an open-world crafting game.

### Absolute rules

- Read this entire document before editing assets, scenes, scripts, packages, or project settings.
- Build only the **Laboratory intro + Beach vertical slice** now. Village, Jungle, and Volcano are narrative context and must not be produced yet.
- Do not add systems not requested here: no PvP, NPCs, crafting tree, loot boxes, Steam marketplace, roulette, minimap, quest log, procedural destruction, or functional backpack.
- Do not make a feature "more complete" by inventing mechanics. Ask before expanding scope.
- Never do broad deletion, `git clean`, `git reset`, package removal, scene replacement, or mass prefab deletion. First audit, name each replacement target, create its replacement, verify it, then delete only the obsolete named asset.
- Preserve working code where possible. Replace a bad visual placeholder without breaking a working interaction.
- All gameplay-critical physics and shared state are host-authoritative. Clients receive/interpolate results; clients do not independently simulate shared disasters, rope gameplay, or destruction.

---

## 1. Creative identity

### One-line promise

**An entire island is trying to kill you. Survive it with friends and escape - if you can.**

### Player fantasy

"We caused this. Now we must carry a ridiculous machine part through a collapsing island, save each other at the last second, and somehow make it to the boat."

### Core loop

1. Explore the island and read an approaching environmental threat.
2. Find one physical machine fragment.
3. Carry it back to the central Containment Unit.
4. Install it; the Unit visibly sparks and causes the next environmental reaction.
5. Adapt routes, use optional tools, rescue downed teammates.
6. Install all four fragments, receive the island Core, then escape.

### Design pillars

1. **Cooperation creates the best stories.** Rescue, carrying, bracing a rope, helping a swimmer, and transporting the two-person bellows must naturally create short, funny, shareable moments.
2. **Danger is readable before it is lethal.** Sirens, water movement, wind, acid drips, sound direction, and screen-edge threat indicators telegraph what is coming. Death should usually feel like a consequence of a late or risky decision.
3. **Physics is a spice, not the game engine.** Bodies, props, wind, and water can look chaotic, but progress routes and shared gameplay states must remain deterministic enough to avoid soft-locks.
4. **The island changes because the players act.** The next catastrophe is not a roulette result. A machine fragment is installed, the Unit reacts, and the island visibly changes.
5. **Simple first, spectacular second.** A 7-10 minute Beach test that works with two players is more valuable than four unfinished islands.

### Anti-pillars

- No haunted/supernatural premise, monsters, or NPC enemies.
- No generic clean spaceship UI or military sci-fi aesthetic.
- No mandatory consumable item route. Only machine fragments are mandatory.
- No character stats tied to body size, cosmetics, gender, or shape.
- No full floppy-ragdoll characters. Bodies may react comically, but movement remains controllable.

---

## 2. Narrative and campaign context

### Premise

The scientists test a portable Climate Machine in a small, underfunded coastal laboratory. A chemical containment failure begins with acid rain leaking inside the lab. The group flees through the emergency dock onto the Beach.

They discover the accident created a chain reaction. Stabilizing one island does not erase the energy: it pushes the instability forward into the next island. The team must build one major Core per island, then use all four at the Volcano to repair the original Climate Machine permanently.

### Narrative line

> "We are not destroying the energy. We are only pushing it somewhere else."

### Campaign order - narrative only for now

| Island | Local problem | Major Core earned | Problem created next |
|---|---|---|---|
| Beach | unstable water, pressure and tide | Tide Core | wind and pressure destabilize the Village |
| Village | storm and tornado | Wind Core | chemical compound spreads into Jungle |
| Jungle | gas, vegetation and terrain | Biofilter Core | pressure moves toward Volcano |
| Volcano | heat, tremors and lava | Thermal Core | all four Cores repair the Climate Machine and end the chain |

The full run should ultimately last around **20-25 minutes**. The current Beach prototype must only prove the first island in **7-10 minutes**.

### Island transitions

Do not attempt a fully seamless four-island world. Each island transition should eventually use a short escape set-piece that hides loading: for Beach, survivors board a boat while the island is still collapsing behind them. Future islands can use other appropriate vehicles or corridors. Build only the Beach boat transition now.

---

## 3. Scope, player rules, and technical constraints

### Current production scope

- Laboratory intro, 35-45 seconds.
- Beach map, one complete playable island.
- Four Beach fragments, Containment Unit, Tide Core, boat exit.
- First-person co-op, 2-6 players. No solo mode required for the current build.
- Basic health, stamina, downed/revive state, spectator state.
- Four utility items: rope, buoy, medkit, umbrella.
- Controlled weather, water, destruction, sound, HUD, and extraction.

### Explicitly defer

- Village, Jungle, Volcano production.
- Extra utility items beyond the four listed below.
- Functional backpack capacity. The character may visually wear a backpack, but it must not create storage slots in this slice.
- Free climbing on arbitrary rocks, trees, walls, hotel facades, or terrain. Beach traversal uses authored ropes, stairs/occasional ladders, grip surfaces, and selected low ledges only.
- Progression, cosmetics, hats, character unlocks, Steam store page, achievements, matchmaking, dedicated servers, marketplace, and monetization. Future cosmetics may include hats/outfits earned through play, but never mechanical advantages or marketplace trading.
- Voice chat implementation. The intended eventual feature is optional proximity voice with an on/off setting, but it is not a Beach blocking task.

### Scientists and player bodies

- Players are scientists, not tourists.
- They are seen in first person by themselves and as stylized networked bodies by teammates.
- Body shapes may be short, tall, round, thin, broad, or awkward in a funny way, inspired by chunky party-game silhouettes. They are cosmetic only: no body type affects speed, hitbox, stamina, climbing, carrying, or water resistance.
- Clothing should be practical-but-silly coastal scientist gear: rolled lab coat or rain jacket, utility trousers, rubber boots, goggles, safety vest accents, and optional hats later.
- Use controlled stumble, knockback, and fall reactions. Do not turn the character into a fully uncontrollable floppy ragdoll.
- No NPC characters are in current scope.

### Network rule

Use the current project's existing networking approach if it already works. Do not replace networking libraries without approval.

If there is no established network stack, provide a short recommendation before integrating one. The intended model is a Steam friends lobby with a **host-authoritative listen server**. The host owns:

- Weather progression and timers.
- Water current / tsunami volumes.
- Shared machine fragments and Containment Unit state.
- Rope attachment and climb state.
- Controlled breakables and dynamic prop limits.
- Downed, revive, extraction, and island transition state.

Clients may predict their own movement if the existing stack supports it. They must not independently simulate the tsunami, shared rope result, or global destruction.

### Performance boundaries

- Use controlled state swaps and VFX for destruction. Do not use procedural mesh fracture.
- Never use `MeshCollider` on dynamic items or debris. Use primitive/compound colliders.
- Keep 15-20 dynamic cosmetic props active at once on Beach.
- Use only one active boat state at a time: `boat_dry` or `boat_water`.
- Use simple LODs for palm trees, lighthouse, hotel, and boat before six-player testing.
- Common props: 512 px texture maximum. Focal structures/hero props: 1024 px maximum. No 2K/4K textures for this slice.
- Import one source format per downloaded asset, preferably FBX. Do not import duplicate FBX, OBJ, Blend, and GLB copies of the same model.

---

## 4. Mandatory audit and safe cleanup before production

The project may already contain prototype art or gameplay. Do **not** blindly delete it.

### Phase A - audit first, no implementation yet

1. Inspect the project structure, scenes, prefabs, materials, packages, and currently active scripts.
2. Open and run the playable scene if possible.
3. Capture screenshots of the current laboratory, Beach, HUD, Containment Unit, each current item, and any placeholder models.
4. Write a concise audit report named `legacy_cleanup_report.md` in the project's documentation folder. For each relevant item, include:
   - exact path;
   - what it currently does;
   - keep / replace / delete decision;
   - replacement asset or system;
   - risk if removed;
   - whether it is referenced by a scene or script.
5. Send the report and screenshots to the user before destructive cleanup if any target is ambiguous.

### Phase B - known visual failures to replace

The following are not acceptable final placeholder forms. They must be rebuilt as recognizable low-poly props or structures, then the old named placeholders may be deleted once no references remain:

- A medkit represented by a generic cube or rectangular block.
- A buoy represented by a sphere, flat disc, or colored primitive instead of a lifebuoy ring.
- A rope represented only by a line, cylinder, or cube pickup with no coiled prop/endpoint behavior.
- An umbrella represented by a cone, stick, square, or UI-only icon.
- Machine fragments represented as four colored boxes.
- Containment Unit represented as a generic sci-fi crate, roulette, slot machine, or military console.
- Hotel, cabin, lighthouse, boat, and lab represented as permanent primitive blockouts after the gameplay route is approved.

### Phase C - deletion policy

- Replace one named object at a time.
- Update prefab and scene references first.
- Enter Play Mode and confirm interaction still works.
- Delete only the obsolete exact asset/prefab after it has zero references.
- Keep a short change log: deleted path -> replacement path.
- Never delete a script just because its object looks bad. Separate visual cleanup from gameplay cleanup.

---

## 5. Laboratório - onboarding jogável e especificação de produção

> **Autoridade:** esta seção substitui integralmente a antiga descrição resumida da introdução do Laboratório. O Laboratório ensina o jogo dentro do incidente que o inicia; ele não é uma sala de tutorial separada, uma quinta ilha, nem um prólogo cinematográfico.

### Resultado que o jogador deve entender sem uma explicação longa

Em no máximo 45 segundos, cada cientista deve ter vivido - e não apenas lido - estes fatos:

1. Pode mover-se livremente em primeira pessoa.
2. Pode correr e a stamina aparece porque ele correu, não porque uma janela a explicou.
3. Uma ameaça tem origem e direção legíveis por som, mundo e HUD contextual.
4. A equipe precisa alcançar junta uma zona de evacuação; ninguém fica preso esperando indefinidamente.
5. O experimento deles falhou e causou uma reação química/climática.
6. Na Praia existe uma Unidade de Contenção que precisa de quatro peças. O jogo não revela ainda que cada instalação piorará a ilha; essa descoberta precisa acontecer organicamente na primeira peça.

### Regras não negociáveis

- Duração alvo: 40 segundos; mínimo operacional 35, máximo absoluto 45.
- O jogador mantém movimento e câmera próprios desde 0,2 s após entrar na cena.
- Não há morte, dano, itens coletáveis, inventário, crafting, combate, NPC, diálogo com personagem, quebra-cabeça, botão de emergência ou minigame.
- O jogador nunca precisa apertar uma tecla para “provar” que aprendeu; as dicas aparecem por contexto e somem quando a ação é executada.
- O Laboratório não contém uma rota alternativa, segredo, loot ou objeto que justifique voltar nele.
- Toda ameaça do tutorial é visualmente convincente, mas a rota principal é segura. Não castigar um jogador novo antes de ele entender o jogo.

### Relação com a história

O Laboratório é uma estação climática costeira pequena, improvisada e mal financiada. Os cientistas testam a Máquina do Clima original. Um vazamento de contenção produz chuva ácida dentro do prédio, força a evacuação e inicia a cadeia de ilhas.

O mesmo símbolo de três travas, o mesmo cabo amarelo grosso e a mesma linguagem de metal azul-cinza aparecem depois na Unidade de Contenção da Praia. Isto comunica visualmente que ela é um terminal de campo do mesmo projeto, não uma máquina nova sem ligação narrativa.

O único texto narrativo obrigatório é curto e automatizado pelo sistema do laboratório:

| Chave de localização | Texto padrão PT-BR | Quando aparece |
|---|---|---|
| **LAB_FAILURE_PA** | “FALHA DE CONTENÇÃO. EVACUEM PARA A DOCA.” | início da falha |
| **LAB_EXIT_TEAM** | “EQUIPE NA DOCA: {current}/{total}” | chegada à zona de evacuação |
| **BEACH_FIRST_OBJECTIVE** | “ESTABILIZE A UNIDADE - ENCONTRE 4 PEÇAS.” | chegada à Praia |

Não escrever explicações como “vocês causaram os desastres”, “cada peça cria uma catástrofe” ou “agora aperte Shift para sobreviver”. O mundo, a ação e a primeira instalação ensinam isso melhor.

### Planta espacial exata

Use a origem local da cena no centro do Salão de Reação. O eixo +X aponta para a doca/Praia e +Z para a área de preparo químico. A rota principal não pode ter bifurcações funcionais.

| Zona | Dimensões e posição | Conteúdo e função |
|---|---|---|
| Salão de Reação | 14 x 10 m; X -7 a +7, Z -5 a +5; teto a 7 m | Espaço inicial. A Máquina do Clima fica em X 0, Z +1,2. Jogadores aparecem em uma faixa de X -4,8 a -2,0, Z -2,6 a -1,0, virados aproximadamente para a máquina. A saída para o corredor fica em X +7, Z 0. |
| Preparo Químico | 6 x 5 m, visível ao norte do Salão por janela reforçada | Bancadas e vidrarias contam a história. A porta é cenográfica/trancada; não criar rota secundária. |
| Cabine de Controle | 6 x 4 m, mezanino no quadrante sul-leste do Salão | Três conjuntos de relógios analógicos e uma mesa. É vista, mas não pode ser acessada nem ativada. |
| Corredor de Serviço | 2,2 x 12 m; segue +X a partir da porta do Salão | Um corredor direto, com leve curva visual nos últimos 3 m para esconder o carregamento da Praia. Deve caber dois jogadores lado a lado. |
| Doca de Carga | 8 x 7 m, depois do corredor | Zona de reunião. Porta externa ampla, piso com pintura amarela gasta, vista da Praia quando abre. Nenhuma alavanca, nenhum item. |
| Chegada da Praia | continuação visual da doca, fora do Laboratório | Spawn seguro no píer/Praia. A Unidade de Contenção emite um pulso ciano no centro da ilha para apresentar o primeiro objetivo. |

#### Regra de leitura da rota

Da posição inicial, o jogador deve enxergar primeiro a Máquina do Clima. Após o alarme, uma luz âmbar quente ilumina a porta do corredor e um letreiro físico “DOCA” fica visível no mesmo eixo. Não usar uma linha de GPS, uma seta permanente no chão ou vários marcadores flutuantes.

### Objetos obrigatórios dentro do Laboratório

Todos são low-poly, gastos por sal e funcionalmente claros. A maior parte é estática; não transformar este espaço em uma caixa de física.

| Objeto | Qtd. | Forma/posição | Estado e interação |
|---|---:|---|---|
| Máquina do Clima original | 1 | 4,2 x 2,2 x 2,6 m; centro do Salão | Hero prop. Válvulas, dois cilindros laterais, câmara de vidro, mangueiras amarelas, medidores e uma trava principal quebrada. Sem interação. |
| Cilindros de pressão | 2 | integrados à máquina, um em cada lado | Vibração e vapor após a falha; não explodem nem viram projéteis. |
| Bancadas de laboratório | 2 | 2,4 x 0,8 m, encostadas no Preparo Químico | Estáticas, com frascos, folhas e recipientes. Nunca bloqueiam a rota. |
| Carrinho de instrumentos | 1 | perto da parede norte, fora da rota | Roda 20 cm por VFX/animador após o impacto. Não usar Rigidbody livre. |
| Armários baixos | 2 | parede oeste/norte | Cenográficos e fechados. |
| Conjunto de medidores analógicos | 3 | Cabine de Controle | Um mostra pressão subindo, um falha, um oscila. Não transformar em interface clicável. |
| Duto de ácido | 1 | teto, canto noroeste do Salão, longe da rota | Origem visível da chuva ácida. Partículas verde-amareladas caem numa canaleta metálica e sibilam. |
| Canaleta/dreno | 1 | piso sob o duto | Reforça que o líquido tem direção e não é uma textura aleatória. |
| Tubulações grossas | 4 trechos | teto e parede leste/corredor | Metal azul-cinza, ferrugem e abraçadeiras amarelas. Uma solta vapor no evento. |
| Luzes de emergência | 2 | uma no Salão e uma no corredor | Coral/vermelho suave, giro lento. Sem strobo agressivo. |
| Letreiro de doca | 1 | acima da porta do corredor | Placa física iluminada em âmbar, não holograma. |
| Porta de serviço | 1 | transição Salão -> Corredor | Destrava sozinha. Não exigir interação. |
| Porta externa da doca | 1 | transição Doca -> Praia | Abre por motor curto durante a reunião da equipe. |
| Caixas molhadas, cabo enrolado e rede | 6-8 | bordas da Doca | Conectam visualmente o laboratório à praia; estáticos no onboarding. |

### Direção visual, luz e materiais

| Estado | Luz | Cor e materiais | Emoção pretendida |
|---|---|---|---|
| 0-7 s, normal estranho | Luz diurna suave entra por janelas salgadas; lâmpadas neutras a 4.500-5.000 K | Concreto pintado, manchas de água, metal azul-cinza fosco, amarelo de segurança desbotado | “Isto parece improvisado, mas ainda está funcionando.” |
| 7-18 s, falha | Câmara emite pulso ciano; beacon coral ativo; uma luz falha discretamente | Ciano só na energia anômala, coral só como alerta, verde-amarelado só no ácido | “Algo deu muito errado, mas ainda dá para sair.” |
| 18-35 s, evacuação | Corredor e saída recebem contraste quente/âmbar; Salão continua mais frio atrás | Vapor, gotas e pequenas oscilações de sombra. Não encher tudo de fumaça. | “Corra para a luz e para a equipe.” |
| 35-45 s, Praia | Luz natural aberta e céu com sinais iniciais de reação química | Areia quente, mar azul, traço de ácido ao fundo e pulso ciano da Unidade | “O problema não ficou no laboratório.” |

Evitar escuridão de terror, luz neon contínua, chrome limpo, painéis de nave e paredes repetidas de ficção científica. O laboratório precisa parecer uma instalação costeira construída por cientistas inteligentes, porém irresponsáveis.

### Áudio e telegráficos

O som deve guiar antes de a interface confirmar. Usar áudio espacial e não competir com a futura voz de proximidade.

| Evento | Som | Prioridade |
|---|---|---|
| Ambiente inicial | ventilador cansado, mar distante, máquina em marcha lenta, tubulação pingando | baixo |
| Falha | estalo de relé, descarga curta, vidro vibrando, queda de pressão | médio, direção da Máquina |
| Ácido | gotejamento, chiado químico no dreno e sutil zumbido de alerta | médio, direção do duto |
| Evacuação | sirene curta de 2,0 s, não contínua; motor da porta e aviso automatizado | alto por poucos segundos |
| Corrida para doca | vapor de cano, estrutura rangendo, vento e mar aumentando | médio, levando para +X |
| Chegada à Praia | uma pausa de 0,5 s no ruído industrial, depois vento/mar e pulso distante da Unidade | médio |

- Legendas precisam existir para todo aviso crítico e identificar sons importantes, por exemplo “[CHIADO ÁCIDO À ESQUERDA]”.
- Não usar música heroica no início. A primeira batida musical pode entrar muito baixa somente quando a porta externa revelar a Praia.
- Não usar fala humana, rádio de chefe, NPC invisível ou monólogo expositivo.

### Linha do tempo e gatilhos exatos

O Diretor do onboarding roda no host e usa tempo de rede, não tempo local de cada cliente. Dicas individuais usam condições locais e não atrasam a sequência.

| Tempo global | Mundo e evento | O que o jogador aprende | Feedback de HUD/câmera |
|---:|---|---|---|
| 0,0-3,0 s | Fade de entrada de no máximo 0,25 s. Máquina em repouso. Jogadores já podem andar e olhar. | Movimento e presença física em primeira pessoa. | Sem texto. Se não houver input por 2,5 s, mostrar uma única dica de movimento usando o ícone/tecla reconfigurada. |
| 3,0-7,0 s | Medidores oscilam, mangueira vibra, o carrinho desliza poucos centímetros por animação. | O laboratório é instável e a Máquina é a origem visual. | Sem travar visão, sem seta. |
| 7,0-10,0 s | Relé estala; câmara ciano pulsa; beacon coral liga; sistema automático anuncia a falha. | Premissa imediata: o experimento falhou. | Legenda de LAB_FAILURE_PA; tremor opcional de câmera extremamente leve, desativável. |
| 10,0-14,0 s | Duto no canto noroeste pinga ácido; o líquido chia no dreno. | Uma ameaça tem origem/direção e sinais do mundo. | Seta verde-amarelada pequena perto da borda superior aponta para o duto por até 2,5 s. Ela desaparece quando o jogador olha o evento por 0,4 s ou após o tempo máximo. |
| 14,0-18,0 s | Sirene curta toca; porta de serviço destrava em 16,0 s; letreiro “DOCA” recebe luz âmbar. | Sirene significa mudança de prioridade e existe uma rota clara. | Se velocidade do jogador ficar abaixo de caminhada rápida por 1,2 s após a porta abrir, mostrar dica local de correr com a tecla configurada. |
| 18,0-28,0 s | Jogadores correm pelo corredor. Um cano solta vapor fora do centro da rota; o mar fica audível. | Corrida consome stamina, mas parar recupera. | A barra de stamina entra ao primeiro sprint e fica visível por 1,5 s depois; não mostrar explicação textual de números. |
| 28,0-35,0 s | Primeiro jogador que entra na Doca ativa a contagem coletiva; a porta externa inicia abertura por motor. | A extração é em grupo. | Mostrar “EQUIPE NA DOCA: {current}/{total}” somente para quem está no raio da Doca. Sem botão de pronto. |
| 35,0-39,0 s | Se todos chegarem, a transição começa imediatamente em 35 s. Quem chega cedo pode olhar livremente a Praia enquanto espera. | A equipe saiu do laboratório, sem uma espera morta ou cutscene. | Nenhuma rotação forçada de câmera. Fade de streaming no máximo 0,35 s, se necessário. |
| 39,0-45,0 s | Equipe nasce na Praia em segurança. A Unidade de Contenção emite um pulso ciano e quatro encaixes vazios ficam legíveis à distância. | Primeiro objetivo da ilha. | Exibir “ESTABILIZE A UNIDADE - ENCONTRE 4 PEÇAS.” por 3,0 s; mostrar “Tide Core: o o o o” apenas depois deste momento. |

#### Regra de atraso, ausência e chegada tardia

- O cronômetro global nunca passa de 45 s.
- “Total” é a quantidade de jogadores conectados e spawnados no começo do estágio de evacuação. Jogador desconectado por mais de 2 s sai do total.
- Se todos os jogadores ativos estiverem na Doca antes de 35 s, a transição aguarda apenas até 35 s; a porta aberta e a vista da Praia ocupam esse respiro.
- Se alguém não chegar até 39 s, o host o transfere com fade curto para o spawn seguro da Praia aos 43 s. O jogador não morre, não perde vida e não atrasa a equipe indefinidamente.
- Jogador que entra/reconecta depois do estágio da Doca nasce diretamente no spawn seguro da Praia e recebe somente o objetivo curto. Nunca repetir o incidente só para ele.

### Regras de câmera e “cutscene”

Não produzir uma cutscene tradicional.

- Não usar barras pretas, câmera em terceira pessoa, trilho cinematográfico, personagem andando sozinho, rotação forçada de câmera ou controle travado.
- Não mover a visão do jogador para “mostrar” a Máquina, o ácido ou a Praia. Iluminação, som, portas e composição espacial fazem esse trabalho.
- O único feedback de impacto permitido é uma oscilação de câmera opcional de até 0,35 de intensidade e 0,18 s na falha. A opção “reduzir movimento de câmera” deve zerá-la.
- Não reduzir FOV nem aplicar blur por estar correndo. Não aplicar flash branco completo.
- A câmera continua responsiva durante portas, doca, fade e chegada à Praia.

### Dicas contextuais: regras locais

| Conceito | Condição para mostrar | Quando some |
|---|---|---|
| Movimento | jogador não envia input por 2,5 s no início | primeiro input de movimento |
| Corrida | porta destravou e jogador não sprintou em 1,2 s | primeiro sprint de 0,5 s |
| Stamina | primeiro sprint local | após 1,5 s; HUD normal continua de acordo com a regra de stamina |
| Direção de perigo | ácido ativo e jogador ainda não olhou a origem | após olhar o duto por 0,4 s ou após 2,5 s |
| Saída coletiva | jogador entra no volume da Doca | ao sair da cena ou após a transição |
| Objetivo da Praia | chegada à Praia | após 3,0 s; apenas o progresso de quatro encaixes fica disponível durante missão |

Todas as dicas são locais, respeitam rebind de teclado/controle e ficam registradas como vistas por perfil. Não replicar dicas de teclado pela rede.

### Implementação recomendada em Unity

Construir isto como um set-piece sincronizado, pequeno e configurável - não como uma cadeia de Update() espalhados pelo cenário.

| Componente | Autoridade | Responsabilidade |
|---|---|---|
| **LabOnboardingConfig** (ScriptableObject) | arquivo de dados | Tempos, textos localizados, referências de VFX/SFX, intensidades de luz, durações de portas e IDs de cena/spawn. Não deixar números mágicos em scripts. |
| **LabOnboardingDirector** | host | Mantém o enum de estágios, o tempo de início de rede, dispara cada evento global uma vez e sincroniza estágio/tempo para clientes. |
| **LabMachineFailureController** | host para estado; clientes para apresentação | Controla máquina, medidores, partículas, carrinho animado, luzes e duto de ácido a partir do estágio replicado. Sem física livre de objetos críticos. |
| **LabExitAssemblyController** | host | Conta jogadores ativos na Doca, aplica a regra de 35-45 s, abre a porta externa, transfere ausentes de forma segura e chama a chegada à Praia. |
| **LocalTutorialHintController** | cliente local | Observa input/câmera local, mostra dicas e HUD contextual, salva flags de “já visto”. Nunca determina progresso global. |
| **LabAccessibilityPresenter** | cliente local | Aplica legendas, redução de tremor, intensidade de flash, alto contraste e substituições de cor/ícone. |
| **BeachArrivalController** | host para spawn; clientes para HUD | Posiciona jogadores, apresenta pulso da Unidade e libera o primeiro objetivo da Praia. |

Usar um enum explícito: Calm, Instability, AcidTelegraph, Evacuate, DockAssembly, BeachHandoff, Complete.

Contratos mínimos de evento:

- O host publica somente stage, networkStageStartTime e a lista/contagem de jogadores presentes na Doca.
- Clientes calculam efeitos contínuos a partir do estágio e do tempo sincronizado; não precisam receber RPC por gota de ácido, luz piscando ou segundo de sirene.
- O volume de ácido é cenográfico e não causa dano. Caso exista um trigger físico, ele apenas bloqueia a área fora da rota com uma barreira invisível de segurança, não aplica dano.
- O movimento, a stamina e as dicas continuam locais/conforme o sistema principal; o onboarding apenas os observa.
- Criar testes de Play Mode para avanço de estágio, saída de jogador, conexão tardia, todos na Doca antes do mínimo de 35 s e timeout aos 45 s.

### Acessibilidade e possibilidade de pular

- A primeira execução não tem vídeo bloqueante para pular; o jogador já está jogando. Todas as falas críticas recebem legendas e indicadores de direção usam cor + forma + som.
- Teclas exibidas vêm do sistema de bindings atual. Nunca escrever “WASD” ou “Shift” como texto fixo.
- Configurações obrigatórias: reduzir tremor de câmera, reduzir flashes, desligar beacon pulsante, legendas, tamanho de texto de HUD e modo alto contraste.
- Em partidas futuras, o host pode habilitar “Pular introdução do Laboratório” somente se todos os jogadores da sessão já tiverem a flag **lab_onboarding_complete**. A equipe inteira começa na Praia; não permitir skip individual em uma sequência sincronizada.
- Se um jogador novo estiver na equipe, o Laboratório roda para todos. Ele é curto, jogável e nunca impede uma pessoa de participar.

### O que não fazer

- Não criar sala branca de teste, parede com dezenas de botões, manequim, alvos ou cartazes “aperte cada tecla”.
- Não converter a saída em puzzle de encontrar cartão, chave, fusível, alavanca ou extintor.
- Não colocar item de cura, corda, boia ou guarda-chuva no Laboratório; os quatro itens são ensinados em situações reais na Praia.
- Não criar um temporizador vermelho de morte, dano inevitável, tela de falha, jumpscare, explosão que mata, gás que obriga rota decorativa ou porta que fecha na cara da equipe.
- Não usar NPC cientista, voz de comandante, diálogo longo, tela de lore ou painel cheio de texto.
- Não deixar o jogador preso olhando a porta ou a Praia até o cronômetro acabar; jogadores que chegaram cedo podem se mover e observar livremente.
- Não usar química verde como único sinal para ácido; complementar com ícone, formato de gota, chiado e legenda.
- Não revelar as quatro rotas da Praia, os desastres futuros ou o final da campanha. O onboarding entrega apenas a primeira intenção de jogo.

### Critérios de aceite do onboarding

- Em teste cego com dois jogadores, ambos chegam à Praia em 35-45 s sem explicação oral externa.
- Pelo menos 80% dos testadores realizam um sprint antes da Doca e entendem que a barra amarela é stamina.
- Testadores identificam verbalmente de que lado veio o ácido sem depender só da seta.
- Nenhum jogador fica permanentemente no Laboratório quando outro chega à Praia.
- Não existe dano, morte, soft-lock, quebra-cabeça, item coletável ou câmera forçada.
- O primeiro objetivo da Praia é entendido em uma frase: “encontrar quatro peças para estabilizar a Unidade”.

---

## 6. Beach 01 - overview and map layout

### Island fantasy

An old coastal resort near the laboratory: large beach, palms, a small cabin, a compact hotel, central field Containment Unit, lighthouse, cave, reef, mountain, and a broken pier/boat extraction point.

The Beach is a tutorial without looking like a tutorial. It teaches reading weather, carrying parts, water danger, two-player transport, terrain changes, rope rescues, and a tsunami finale.

### Coordinate convention

- Central Containment Unit = `(0, 0)`.
- `+Z` = north / mountain.
- `-Z` = south / sea.
- `+X` = east.
- Approximate playable boundary: `X -115..+115`, `Z -90..+90`.
- Approximate playable island: **230 x 180 m**.

### Major zones

| Zone | Position / size | Gameplay role | Destruction rule |
|---|---|---|---|
| Pier + Boat | `(18, -75)`, pier 4 x 24 m; boat 8 x 3 m | Spawn and final extraction | Never permanently blocks exit |
| Open Beach | south / central low ground | Running, water pressure, debris | Light props can fly |
| Cabin | `(-26, -35)`, 9 x 7 x 4.5 m | Early shelter, roof rescue point | Three controlled states only |
| Containment Unit | `(0, 0)`, y about 7 | Install four fragments | Never breaks or blocks |
| Hotel / Resort | `(0, +12)`, 28 x 16 x 11 m | Vertical route and flooded objective | Windows/one balcony can break; main stairs never break |
| Palm Grove | central-east | Grip points, visual route, optional rope surfaces | Some palms can fall; never all |
| Lighthouse | `(+72, +46)`, 6 m diameter, 22 m tall | Fragment 1, risky short tsunami route | Base/access protected |
| Cave | `(-62, +64)`, entrance y about 19; chamber 8 x 6 x 4 m | Two-player Bellows objective | Shelter from wind, unsafe during high tide |
| Reef | `(-76, -20)`, y about 1 | Fragment 4, exposed at low tide | Only relevant after low tide |
| Mountain Summit | `(-12, +86)`, y about 43-45 | Most reliable tsunami refuge | Never breaks |

### Hotel rooms and structure

The hotel must feel like a small real resort, not a maze. It has **six playable guest rooms**, not twenty decorative rooms.

| Floor | Rooms / spaces | Function |
|---|---|---|
| Ground floor | reception, cafe room, kitchen/store, main stair | Floods during high tide; Valve fragment is in maintenance store, not a random room |
| First floor | rooms 101, 102, 103; exterior corridor and balcony | Dry route during high tide; revive/observation area |
| Second floor | rooms 201, 202, 203; stairs to roof | Temporary refuge; controlled damaged railing allowed |
| Roof | water tank, HVAC, maintenance access | Visual observation/rescue spot; never guaranteed tsunami safety |

Fake exterior windows are allowed to make the facade feel larger. Do not build inaccessible maze interiors behind them.

### Cabin and lighthouse

- **Cabin:** living room/kitchen, small bedroom, bathroom, accessible roof. The ground floor floods, roof becomes a rescue moment.
- **Lighthouse:** ground storage, spiral stairs, lantern room, exterior platform. The platform allows **partial survival** in the tsunami: two bracing/grip positions endure the first wave impact. It is a risky alternative, not a universal safe spot or the exit.

### Route requirements

| Route | Approx. distance / width | Rule |
|---|---|---|
| R01 Pier -> Unit | 75 m, minimum 3.5 m | Clear spawn-to-objective route |
| R02 Unit -> Lighthouse | 88 m | Short coastal boardwalk 2.6 m may break after storm; longer inner stone path 3 m stays valid |
| R03 Unit -> Hotel / Valve | 24 m; maintenance corridor 2.2 m | Immediate readable objective route |
| R04 Hotel -> Cave | 95 m, mostly 2.8 m wide, maximum 25-degree incline | Main route always viable; 1.3 m optional rock shortcut is risky |
| R05 Unit -> Reef | 85 m | Last 40 m is available only after low tide; reef route varies 2-4 m wide |
| R06 Unit -> Summit | 110 m, 3 m wide | Main safe tsunami route; reachable without item in <=45 seconds |

No critical route may depend on an item, breakable prop, rope, or a lucky jump.

### Flux Compass - diegetic next-objective orientation

Every scientist owns a **Flux Compass**, a small battered containment instrument worn on the wrist. It is a navigation aid attached to the Climate Machine project, not a collectible item, GPS, minimap, quest log, or utility-slot object.

| Moment | Compass behavior |
|---|---|
| Arrival on Beach | It automatically calibrates for the Tide Antenna and settles broadly toward the Lighthouse. |
| After each valid fragment installation | The Containment Unit sends one audible calibration pulse; every scientist sees the physical compass rise for about 3 seconds and its needle settles toward the landmark containing the next fragment. |
| Manual inspection | The player may hold the rebindable `Inspect Flux Compass` action (default keyboard binding: `C`) to raise it briefly. |
| Carrying a fragment / Bellows | The compass stays stowed. The central Unit must instead be findable through its physical silhouette, cables, pulse and cyan beacon. |
| Immediate danger | The compass automatically stows. The contextual threat arrow/edge chevron, sound, and the visible world always have priority. |

Rules:

- The needle indicates only the **landmark sector**: Lighthouse, Hotel, Cave, or Reef. It never supplies distance, route, floor, verticality, object-through-wall location, a line on the ground, or an exact fragment coordinate.
- It uses the same next-fragment state for everyone. It is a prompt for coordination — “it turned toward the cave” — not a solo navigation system.
- The instrument does not consume an item slot, have charges, require batteries, create a new inventory state, or provide a mechanical advantage in hazards.
- It must look physical: scratched cream housing, cloudy dial glass, thick dark needle, small cyan containment mark, and a short magnetic wobble after calibration. No hologram, radar, GPS map, or floating waypoint.
- The code must derive its target locally from the host-replicated `expectedFragment` state; never create a second authoritative navigation state or replicate a compass transform per player.

### Beach Readability Pass - map construction before new content

The next map pass has one purpose: a first-person player must understand what is a landmark, a route, an interaction space, a dangerous space, and decorative clutter without a minimap or a spoken explanation. It is **not** an excuse to add more mechanics, download more random packs, or decorate every empty metre.

#### Safe cleanup rules

- Audit every live Beach prop and classify it as `keep`, `move`, `replace`, or `remove`, with an exact path and screenshot before deletion.
- Existing imported/fake hotel meshes are removed only after the real playable hotel shell is connected and verified.
- Remove fences with no purpose. A fence/rail is allowed only when it communicates a boundary, protects a fall, supports a rope/grip interaction, marks the pier, or forms the Hotel/Lighthouse architecture.
- Fix trees, rocks and props that float, intersect terrain, face an implausible direction, block a route, or visually point players away from a landmark.
- Never bulk-delete scenery or replace the whole Beach scene. Keep a replacement trail in the cleanup report.

#### Landmark construction priorities

| Landmark | Required readable construction | Do not do |
|---|---|---|
| Cave | Rock bluff framing the entrance; wide mouth -> 2.8 m squeeze -> roughly 62-degree bend -> 7.5 m main chamber; irregular thick ceiling, one natural light opening, damp audio, sparse fallen rocks, a dry Bellows shelf, and one intentional rope anchor. | Make a straight tunnel, flat slab roof, prop-filled dungeon, or flooded mandatory Bellows spawn. |
| Lighthouse | Stone/concrete base, protected access path, ground storage, spiral stair with window rhythm, lantern room, exterior platform, two visible tsunami bracing points, and Tide Antenna mounted to a purpose-built rack. | Use a hollow cylinder, leave the Antenna on the ground, or make the platform universally safe. |
| Pier + Boat | A clear emergency dock from the laboratory: wide boarding zone for six players, piles, bollards, ropes, bumper/defence props, weathered transition from concrete to wood, and a visible dry-to-water boat state change. | Make a thin decorative plank, a boat-driving system, or destruction that blocks the final boarding route. |
| Hotel | Replace placeholders with the authored 28 x 16 m shell, six playable rooms, readable stairs, roof access and controlled dry/flooded/damaged variants. Build clean gameplay space before furniture/detail polish. | Retain fake imported hotels, make a maze, or flood the only main stair. |

#### Placement grammar

- Trees only spawn on terrain within the slope limit defined by the visual pass; their base must contact terrain, while yaw/lean stays modest and believable.
- Designate rope-anchor palms manually. Do not randomly make every tree an anchor.
- Keep a 5 m clearance envelope around the main summit route and enough corridor width around all critical routes; never use decorative props to make navigation difficult accidentally.
- Furniture, crates and chairs need a locally level placement surface. Do not simply rotate them to extreme terrain normals.
- Compose clutter in small story groups around landmarks, rather than scattering assets evenly across the island.

#### Controlled variability - prepare now, expand only after the route passes

**Always fixed:** Containment Unit, Lab/Pier connection, Hotel, Lighthouse, Cave, Reef, Boat logic, fragment order, piece landmark, main tsunami route, safe refuge, water levels, and all mandatory collision/routes.

**Allowed variable sockets:** decorative beach-prop clusters, selected palm/rock variants, 1-2 controlled fallen-palms, non-critical debris, small furniture layouts, optional utility-item spawn groups, and weather dressing intensity.

- Use authored sockets/variant IDs, not unconstrained procedural placement.
- The host chooses one shared seed/variant at run start; all clients receive the same result.
- No variant may hide a landmark, block an R01-R06 route, remove a rope anchor, trap the Bellows, move a fragment, or alter the tsunami solution.
- Start with one clean variant plus a short list of sockets. Do not build multiple full Beach variants until the basic Beach loop is fun.

---

## 7. Beach reactions and fixed progression

There is no roulette. Fragment locations and reactions are deliberate. The group decides when to install a carried fragment, then gets a short preparation window as the machine begins to fail.

### Global timing rule

- A visible machine reaction begins **8-15 seconds** after installation.
- Full danger begins no later than **60 seconds** after installation.
- The time between installation and full danger must not feel like dead waiting: audio, light, weather, water level, and scenery escalate during it.
- Exact balance values are playtest values, not sacred. Preserve the relative pacing below until testing says otherwise.

### Beach sequence

| # | Fragment | Location | Visible onset | Full reaction | Result / lesson |
|---:|---|---|---:|---:|---|
| 1 | Tide Antenna | Lighthouse | 10 s | 60 s | Coastal storm: wind and rain; read coverage and danger direction |
| 2 | Flow Valve | Hotel maintenance store | 8 s | 45 s | High tide: low cabin/beach routes flood; swim and rescue |
| 3 | Pressure Bellows | Cave | 8 s | 35 s | Extreme low tide: sea pulls back, boat becomes stranded, reef opens |
| 4 | Salt Lens | Exposed reef | 15 s | 60 s | Long siren, sea silence, then tsunami finale |

### Reaction details

#### Fragment 1 - coastal storm

- Unit emits static, vibration, relay clicks, and visible sparks.
- Wind grows from the sea; rain begins light.
- Rain and wind communicate direction. Use cover under stable structures.
- No long siren here; save the maximum siren for the tsunami.
- Umbrella protects against light chemical rain and weak wind only.

#### Fragment 2 - high tide

- Short flood alarm, directional water sound, water visibly rises.
- Water target height: around `y=4.5` for the controlled high-tide state.
- Cabin ground floor and beach low route are flooded.
- Hotel ground floor becomes hazardous but not an unavoidable death trap.
- Swimming uses stamina; teammate rescue should be possible.

#### Fragment 3 - extreme low tide

- Deep suction sound; the sea goes unusually quiet before receding.
- Water target height: around `y=-1.2`.
- Reef becomes reachable; the boat is visibly stranded on sand.
- This is a visual change plus a new risky path, not a safe resting phase.

#### Fragment 4 - tsunami finale

- Machine state visibly worsens; after 15 seconds, a long siren begins.
- Sea becomes unnaturally silent, then the distant wave appears.
- Full tsunami arrives at 60 seconds.
- Main survival route: mountain summit.
- Secondary risky partial survival: two bracing points on lighthouse platform.
- Water does not instantly kill by default. It drags, submerges, drains breath/health, and forces stamina decisions. Players may grab valid trees/railings/rocks to resist; holding on consumes stamina.
- Tsunami is not real water physics. It is host-owned water-volume movement, drag/damage, VFX, audio, state swaps, and a limited set of controlled flying props.
- After the wave, the boat becomes `boat_water` near the pier and is ready for departure.

### Extraction

- Boat starts dry/stranded during low tide: `boat_dry` at around `(18, -75)`.
- After tsunami: activate only `boat_water`, around `(25, -58)` near the pier.
- No boat driving in this slice.
- Boat departs when all living survivors board, or 15 seconds after the first living player boards.
- A downed player can be recovered in the pier zone. Dead players advance with the group to the next island but do not count as living survivors.

---

## 8. Containment Unit, Beach fragments, and Tide Core

### Core concept

The Beach Containment Unit is the central progression device. It replaces the old roulette idea. It is a coastal field terminal linked to the failed Climate Machine in the laboratory. It has an empty central Tide Core cage and four mechanically distinct physical sockets.

It is not a machine built from random cubes. It must visibly receive four specific fragments, react after each installation, and finally compress/eject a large Tide Core.

### Containment Unit visual specification

| Field | Specification |
|---|---|
| Size | 3.5 m wide x 2.5 m deep x 2.4 m tall |
| Silhouette | low, wide industrial chassis; two side pressure cylinders; central glass storm chamber; four frontal sockets |
| Palette | matte blue-gray chassis, faded/coral warning panels, thick yellow cables, subtle cyan weather energy |
| Details | exposed bolts, salt corrosion, emergency vents, analogue gauges, red/coral beacon, clearly physical connectors |
| Tone | hand-built by irresponsible scientists; heavy, coastal, slightly absurd |
| Must not be | military machine, clean spaceship, generic sci-fi box, casino, roulette wheel, slot machine, weapon, hologram wall |

### Socket layout

```text
              Tide Antenna (top)
                     |
 Flow Valve -- Storm Chamber -- Salt Lens
                     |
            Pressure Bellows (bottom)
```

### Machine states

- `0_fragments`: inactive but visibly unstable.
- `1_fragment`: static, small sparks, first pressure movement.
- `2_fragments`: water/pressure pipes move, warning light intensifies.
- `3_fragments`: central chamber spins aggressively; vents release steam.
- `4_fragments`: sockets lock, central cage closes, fragments compress/integrate.
- `tide_core_ejected`: large Tide Core ejects into a yellow cargo cradle; it transfers to the boat automatically for this slice.

### Fragment construction rules

- Each fragment is recognizable from 10 m away by silhouette, connector, movement, sound, and palette.
- Never use four equivalent colored boxes/cylinders.
- All small fragments occupy both hands when carried.
- Picking up a fragment drops the currently equipped utility item; the other two utility slots stay stored but become inaccessible.
- Fragments cannot be put in inventory or backpack.
- The Bellows require exactly two players to carry.

### Beach fragment asset specifications

#### 1. Tide Antenna - Lighthouse

| Field | Specification |
|---|---|
| Asset ID / name | `piece_tide_antenna` |
| Size | about 1.05 m tall x 0.55 m wide |
| Silhouette | crooked vertical copper coil with ceramic isolators and a forked two-pin top rail |
| Materials | dull copper, salt-stained ceramic, dark blue-gray mounting plate, small cyan tip |
| Connector | upper forked two-pin rail that visibly slides and locks into its matching socket |
| Carry | one player, both hands; long awkward vertical object |
| Install cue | metal lock, electrical crackle, antenna vibration |
| Reaction | coastal storm |

#### 2. Flow Valve - Hotel maintenance store

| Field | Specification |
|---|---|
| Asset ID / name | `piece_flow_valve` |
| Size | circular disc about 0.72 m diameter x 0.24 m deep |
| Silhouette | heavy three-arm valve wheel inside a pipe ring, with a buoy-like outer contour but clearly mechanical |
| Materials | rusty coral-orange metal, blue-gray pipe ring, faded yellow indicator mark |
| Connector | left-side circular three-lock bayonet; it twists into the matching socket |
| Carry | one player, both hands; wide and heavy |
| Install cue | pressure hiss, quarter-turn lock, water rush |
| Reaction | high tide |

#### 3. Pressure Bellows - Cave

| Field | Specification |
|---|---|
| Asset ID / name | `piece_pressure_bellows` |
| Size | about 1.45 m long x 0.75 m wide x 0.65 m tall |
| Silhouette | heavy accordion bellows chamber with two side pistons and two big orange carry handles |
| Materials | dark navy rubber folds, worn gray metal endcaps, orange handles, yellow caution strip |
| Connector | lower front rail with two mechanical clamps |
| Carry | exactly two players. Both grab handles within 2 seconds; group moves at 60% speed, cannot run/jump/use items; releases if either lets go |
| Install cue | piston thump, suction, air release |
| Reaction | extreme low tide |

#### 4. Salt Lens - Reef

| Field | Specification |
|---|---|
| Asset ID / name | `piece_salt_lens` |
| Size | hexagonal lens about 0.55 m diameter x 0.12 m deep |
| Silhouette | thick translucent milky-cyan hexagonal lens, salt crystals around edge, irregular yellow mounting ring |
| Materials | cloudy translucent cyan glass, pale salt crust, dull yellow metal ring |
| Connector | front central six-tooth socket |
| Carry | one player, both hands; flat and fragile-looking |
| Install cue | glass hum, a visible light refraction pulse, alarm relay |
| Reaction | siren and tsunami |

### Tide Core

The Tide Core is not a fifth loose fragment. It is the large reward made when all four Beach fragments are integrated by the Unit.

- Shape: a 1.0 x 0.7 m sealed weather capsule made from recognisable elements of the four pieces.
- It should show a small cloudy swirl in a protected central chamber, with one copper coil detail, pressure ring, crystalline lens panel, and thick clamps.
- It ejects into a yellow cargo cradle after the fourth installation.
- For Beach, it is transferred to the boat automatically; do not add a fifth carry mission now.

---

## 9. Health, stamina, downed state, death, and spectator rules

### Health and fair damage

- Most hazards drain health; they should not instantly kill.
- Water submersion causes breath loss / drowning damage over time.
- Fire/lava, acid, cold, and environmental exposure should generally drain health before killing.
- Fall damage drains health. Extremely high falls can kill.
- Tornado lift can become fatal if the player fails to steer toward water or a soft landing area.
- Direct meteor impact may be instant death in a future island, but Beach should favor readable gradual danger.

### Stamina

Stamina drains while:

- sprinting;
- swimming;
- climbing a rope;
- holding/pulling a teammate;
- bracing a rope for a teammate;
- gripping a ledge, tree, rail, or rock against current;
- carrying a two-player Bellows where appropriate.

Stamina begins regenerating immediately when the player stops all draining actions. At zero stamina:

- player becomes slow, but does not die from zero stamina itself;
- while gripping, grip strength visibly/auribly decays before release;
- never instantly release a player with no warning.

### Player locomotion, climbing boundary, and physical comedy

Movement is a **gameplay system first and an animation system second**. The player motor, collision, stamina, valid traversal state, and shared outcome decide where a scientist actually is. Animations, camera motion, hand poses, sound, and controlled reactions only present that result.

Do not treat a downloaded animation as an implementation of climbing, swimming, carrying, or network movement. In particular, do not build PEAK-style free climbing across arbitrary scenery in the Beach slice. It would make the route, rope, body variants, collision, and multiplayer authority substantially less predictable.

#### Approved Beach locomotion states

| State | Gameplay rule | Animation / presentation rule |
|---|---|---|
| `Grounded` | Idle, walk, sprint, turn, and one normal jump. Sprint drains stamina; walking does not. | Blend idle/walk/run in place; footstep sound comes from the resolved motor state. |
| `Airborne` | Gravity and limited air steering. No double jump, wall jump, or air dash. Falls apply the health rules in this section. | Jump start, fall loop, then soft/hard landing response. |
| `SurfaceSwimming` | Player stays near the water surface, swims using stamina, can be pulled by current, and accumulates drowning damage only while submerged/breathless. | Swim loop, waterline/arm presentation, breath and strain cues. Do not add underwater exploration for Beach. |
| `Gripping` | At an authored tree, rail, rock, post, or similar sensible surface, a player can hold position against a current or fall. Stamina drains and release is gradual. | Two-hand grip pose, visible shaking/strain before release. |
| `ClimbingRope` | Uses the approved Rope system only. The host validates rope state and determines climb progress; stamina drains. | Looping climb/hang clips; hands are aligned to the visual rope, but the clip never decides world position. |
| `LedgePullUp` | Only on deliberately authored low ledges with safe approach/landing space. It is a short contextual pull-up, never a general terrain-climbing ability. | Grab -> pull-up -> recover sequence, with hand targets corrected by IK if needed. |
| `CarryingFragment` | Both hands occupied; active utility drops and stored items lock. Normal walk remains possible, but no item use, throw, climb, grip, or jump. | Carry pose/upper-body layer; machine fragment remains visibly held in both hands. |
| `CarryingBellows` | Exactly two players, slow coordinated movement, no sprint/jump/items. | Matched two-player carry pose; presentation must clearly show both handles being held. |
| `Downed` | Crawl only until revived or killed by further danger. | Crawl, strain, revive, and recovery clips. |
| `Spectating` | Normal viewpoint of a living teammate only; no traversal or interaction. | No special ghost body, fly camera, or information effects. |

There is no dedicated “climb anything” input. Context determines the allowed action:

- rope: grab/climb the deployed rope;
- lighthouse, pier, hotel: ordinary stairs first; add a ladder only where the authored layout explicitly calls for one;
- selected low ledge: contextual pull-up;
- tree, rail, rock, post: grip or rope attachment, **not** tree climbing;
- cliff, random wall, hotel façade, cave wall, decorative prop: no climb interaction unless it has an authored traversal binding.

Use rebindable actions. Current intended defaults are movement/looking, `Shift` sprint, `Space` jump, `E` contextual interaction, `1`/`2`/`3` utility slots, and `C` inspect Flux Compass. Do not hard-code key assumptions into gameplay logic.

#### First-person body and cosmetic body rules

- The local player initially renders a dedicated `FirstPersonArms` rig: forearms, hands, sleeves/gloves, held utility item, and the carried fragment where applicable. Do **not** put the camera inside a full animated head mesh.
- Showing full local torso/legs while looking down is optional later polish only. Do not let it delay the first playable slice or introduce camera/mesh clipping.
- Remote players render the full stylized scientist body with the same action state visible to teammates.
- Build one approved humanoid skeleton/Avatar and one gameplay capsule/collider contract. Short, tall, round, thin, broad, and awkward variants are mesh/proportion/costume presentation around that contract; they must keep identical camera height, reach, collision, stamina, speed, water behavior, and carrying capability.
- Avoid extreme root scaling or multiple incompatible skeletons. Make body variety read primarily through torso/head/silhouette, clothing, and modest visual proportion changes so hands still meet ropes, Bellows handles, and fragments reliably.
- Normal locomotion uses a controlled capsule-style character motor, or an existing equivalent that passes this contract. Do not use an unconstrained Rigidbody/ragdoll body as the normal player controller.
- Controlled stumble, wind shove, impact, and landing reactions may briefly offset pose/camera presentation. They never remove basic input control for a long period or become full floppy ragdolls.

#### Animation and Mixamo source policy

Mixamo is an approved **temporary animation source**, not the character system and not the final visual identity. Adobe currently allows its characters and animations in commercial video games without a Creative Cloud subscription, and its automatic rigging/library are for bipedal humanoids; record the source and license in `docs/third_party_assets.md`. Reference: [Adobe Mixamo FAQ](https://helpx.adobe.com/creative-cloud/faq/mixamo-faq.html).

- Do not use a ready-made Mixamo character as a final scientist. Use the project scientist mesh on the shared humanoid Avatar.
- Download base clips without skin, in `FBX for Unity` format, and in-place where the option exists. Keep raw downloads under `Assets/ThirdParty/Mixamo/Raw/`; derived clips, controllers, masks, and visual variants live under project-owned `Assets/Game/` content folders.
- Configure clips as Humanoid and retarget them to the one approved scientist Avatar. Unity's humanoid Avatar pipeline is specifically designed to reuse one animation set across compatible character models. Reference: [Unity 6 Humanoid retargeting](https://docs.unity3d.com/6000.0/Documentation/Manual/Retargeting.html).
- For normal networked movement, use in-place clips and keep root motion out of the authoritative position solution. The motor/host moves the character; the Animator reads state. Animation events may trigger local footsteps, cloth, hand, VFX, or sound only; they must never install a piece, apply damage, complete a revive, move a player, or decide that a climb succeeded.
- Start with roughly 12-15 clips: idle, walk, run, jump, fall, soft land, hard land, swim idle, swim forward, rope hang, rope climb, fragment carry, Bellows carry, downed crawl, revive/recover, plus a short stumble/recover. Favor readable exaggerated timing over realistic mocap.
- Treat Mixamo clips as placeholders for rope hand alignment, ledge pull-up, two-player Bellows carry, first-person arms, item throw/use, water rescue, and stumble/knockback. Those actions require project-specific edits, pose adjustments, or later IK/Blender work; do not claim they are solved merely because a generic clip plays.

#### Movement Lab - required proof before Beach traversal work

Before implementing authored climbing on the real Beach, create a small isolated development scene named `Movement_Lab`. It is not a shipping map and must not contaminate the Beach scene with temporary geometry.

It contains only:

1. Flat ground, a short slope, and a safe fall test.
2. One 12 m deployable rope with a valid anchor and a second-player brace position.
3. One low authored ledge for pull-up testing; no wall-climbing test wall.
4. One rail/tree/rock grip point beside moving water.
5. Shallow water, deep water, and one controlled current volume.
6. A short stair/spiral-stair traversal test.
7. A two-player Pressure Bellows pickup, carry, drop, and release test.

Test host plus one client before adding polish. Pass only when both players see compatible states, no player gets stuck or camera-clipped, a grip release is gradual and legible, rope climb is stable, and a new tester can identify the allowed traversal affordance without a giant tutorial panel. If a state fails here, simplify the state before touching Beach landmarks.

### Downed, revive, and death

- A nonfatal loss of health puts the player in a downed crawling state where appropriate.
- Teammates revive via a short hold interaction; rescue may also include pulling a player from water or freeing one from debris.
- A dead player returns on the next island.
- Until transition, the dead player is a spectator only.

### Spectator restrictions

- No pings.
- No interaction with objects or hazards.
- No free-map / aerial / wall-penetrating camera.
- No special in-game ghost voice channel.
- Spectator may switch among surviving players' normal perspective views only.

The game cannot prevent people from talking through Discord, but the game itself must not give dead players information unavailable to living players.

---

## 10. Inventory, utility items, and interaction states

### Inventory rule

Each player has **three quick utility slots**. There is no grid inventory, stacking system, crafting, or functional backpack in the Beach slice.

The player may visually wear a backpack, but it is cosmetic only. Do not implement extra storage until a Beach playtest proves that three slots are insufficient.

### Common item states

Support these states where they make sense for the object:

- pick up;
- store in one of three quick slots;
- equip;
- use;
- throw;
- drop;
- consume where applicable;
- drop currently equipped item when downed or when hands become occupied by a fragment;
- lose all remaining utility items during an island transition.

Do not make every item use every verb identically. For example, rope uses a throw/deploy action; medkit uses a channelled self-use action and may be tossed to a teammate; umbrella deploys rather than behaving like a grenade.

### Item spawn rule

- All four current utility types exist on Beach.
- Exact spawn locations are intentionally still flexible; place them near the dock/spawn, cave, hotel, and other readable risk points rather than hiding them.
- Utility items are never mandatory to complete Beach. A valid itemless path always exists.
- Start with conservative quantities, then scale by group size during playtest. A safe first pass:
  - 2 players: 1 rope, 1 buoy, 1 medkit, 1 umbrella.
  - 3-4 players: 1 rope, 2 buoys, 2 medkits, 1 umbrella.
  - 5-6 players: 2 ropes, 3 buoys, 3 medkits, 1 umbrella.
- Report all chosen spawn locations in a small `beach_item_spawns.md` file once the route is assembled.

### Item 1 - rope

| Field | Specification |
|---|---|
| Asset name | `prop_rescue_rope_coil` / `rope_deployed` |
| Pickup form | real coiled marine rescue rope, not a cylinder or line placeholder |
| Size | coil outer diameter about 0.28 m; rope length max 12 m |
| Palette | natural off-white/cream rope, faded yellow safety tape on both ends, one dark metal hook/eyelet only if visually useful |
| Main use | vertical rescue, water pull, climb assist |
| Not allowed | bridge, horizontal zipline, knot simulation, arbitrary map bypass |

#### Rope gameplay - hybrid physical model

The rope must **feel** freely thrown and physical without requiring unstable fully free networked rope simulation.

1. Player aims and throws freely.
2. It can visibly attach to sensible world objects: trees, rocks, rails, beams, balconies, visible rings, and marked rope-friendly structural surfaces.
3. There are no player-facing `RopeAnchor` icons. Internally, valid surfaces need an authoring tag/component so the map remains safe and cannot be bypassed anywhere.
4. Host validates attachment, owns the state, and replicates the result.
5. The deployed rope uses a visual spline/controlled sag/stretch. It may sway and look physical. It does not wrap around objects, collide/entangle with arbitrary scenery, make knots, or become a free bridge.
6. Maximum length is about 12 m.
7. One rope has one active free end.
8. A player at height can anchor it to a valid object, throw the end, and let another player grab/climb.
9. If there is no world anchor, a second player can brace the rope with both hands. Both spend stamina; a heavy pull can drag the bracing player toward the edge.
10. Rope is reusable. It stays attached until somebody retrieves/coils it. It can be lost if the anchor breaks, wave carries it away, player drops it in water, or the island ends.

### Item 2 - buoy

| Field | Specification |
|---|---|
| Asset name | `prop_lifebuoy` |
| Shape | real lifebuoy ring with thick rounded tube, hole in center, wrapped rescue line; never a sphere, disc, or square |
| Size | about 0.65 m outer diameter, 0.12 m tube thickness |
| Palette | worn rescue orange with cream/white bands; small faded blue-gray rope details |
| Use | deploy on self or throw to a teammate; reduces drowning/current pressure temporarily |
| Limits | does not defeat tsunami, does not make player invulnerable, can still be lost in water |

### Item 3 - medkit

| Field | Specification |
|---|---|
| Asset name | `prop_medkit_softcase` |
| Shape | soft emergency fabric case, not a box: rounded rectangular pouch, top handle, zipper seam, slightly bulging front pocket, two stitched side panels |
| Size | about 0.36 x 0.22 x 0.18 m |
| Palette | desaturated yellow or warm sand fabric, teal repair/heartbeat patch, dark zipper and handle; no protected red-cross emblem |
| Use | channelled partial heal lasting a few seconds; interrupted by severe damage/movement as appropriate |
| Throw | may be tossed to a teammate as a physical pickup |
| Limits | no full heal, no revival replacement, no stack system |

### Item 4 - umbrella

| Field | Specification |
|---|---|
| Asset name | `prop_emergency_umbrella_folded` / `prop_emergency_umbrella_open` |
| Shape | actual compact umbrella: folded shaft/handle pickup plus a low-poly open canopy with visible ribs and uneven fabric segments |
| Size | open canopy about 0.85 m diameter |
| Palette | faded yellow canopy with blue-gray ribs and dark handle; readable against beach sky |
| Use | protects from light chemical rain and weak wind |
| Strong wind | canopy visibly turns inside-out, tears/flies from the player's hand as a comedic physical prop; it does **not** launch the player |
| Limits | no protection against high tide, tsunami, tornado, or major falling debris |

### Do not add more items yet

The full game can later explore an energy gel, flare, repair tape, or island-specific tool. Do not implement them in the Beach slice. First make the four items above useful, readable, and fun.

---

## 11. HUD and interaction UI

The current HUD must be rebuilt if it does not match this specification. It should look like a simple coastal scientist emergency kit, not a generic FPS HUD or spaceship dashboard.

### Layout

```text
                 [ contextual danger direction ]
                    only while a threat exists

                    [ Tide Core: o o o o ]
                       only during mission


[ health ][ stamina ]                         [ no minimap ]
 lower left

                [ item 2 ] [ ITEM 1 ] [ item 3 ]
                         lower center

                E - ATTACH ROPE
                   near an interactable object
```

### Health and stamina

- Bottom-left only.
- Health uses coral.
- Stamina uses warm yellow.
- Fade away after a few calm seconds only when both are full.
- Stay visible when damaged, exhausted, holding/gripping, or under immediate threat.
- Use stable/tabular number rendering if numbers are shown; avoid jumping layout.

### Three utility slots

- Bottom-center, not a wide FPS hotbar.
- Equipped item is larger and shows icon, name, key, and relevant state/charge.
- Other owned items show as two smaller icon chips with their keys (`2`, `3`).
- Empty slots do not render as empty boxes.
- If only one item exists, it centers itself.
- On switching, new active item grows and old active item shrinks over about 150 ms.
- While carrying a machine fragment, equipped item has dropped; remaining stored item chips dim and show `HANDS OCCUPIED` / equivalent concise localized state. They cannot be used, switched, or thrown.

### Danger direction

- A small local threat uses a directional arrow near the top screen edge.
- A broad threat such as tsunami, large storm front, or fire line uses a wide chevron/band along the relevant screen edge. Do not use a tiny arrow to describe a wall of water.
- Water cue: blue.
- Acid cue: yellow-green.
- Wind cue: pale warm/cream or muted yellow.
- Fire cue: coral/red.
- Use sound direction and visible world signs as the primary warning; UI confirms rather than replaces gameplay reading.

### Flux Compass presentation

- The Flux Compass is a first-person physical wrist/instrument presentation, not a permanent HUD widget.
- On arrival and after an installation, it may rise automatically for roughly 3 seconds; after that it appears only while the player holds the rebindable inspect action.
- It points to a landmark sector only and contains no text such as distance, “go here”, path, floor, or exact objective coordinate.
- Suppress it when an immediate hazard indicator needs the upper screen. Danger feedback must never compete with navigation feedback.
- A brief cyan calibration pulse and mechanical needle wobble are enough; do not add a large banner, hologram, minimap, or sound spam.

### Interaction prompt

- Centered near the relevant object, not a giant panel.
- Example: `E - ATTACH ROPE`.
- Must state the missing condition when unavailable: e.g. `NEEDS A SECOND PLAYER`, `HANDS OCCUPIED`, `TOO FAR`, `NO VALID SURFACE`.
- Use clear visual hierarchy and 44 px minimum interactive hit areas for menu controls. In-game prompts are keyboard interactions, not clickable UI buttons.

### UI visual rules

- Base panels: cream/off-white translucent material, not black opaque rectangles.
- Corners: lightly cut/chamfered, not generic fully rounded cards.
- No mini-map, permanent quest log, empty hotbar, giant banner, or sci-fi hologram.
- Motion: 150 ms appear/pulse/disappear; no bounce animations.
- Use only explicit transitions for opacity/transform/color; never broad "animate everything" behavior.
- Keep icons optically centered and readable at first-person resolution.

---

## 12. Environmental art, destruction, water, and materials

### Beach asset families

| Family | Needed amount / state | Notes |
|---|---|---|
| Palm trees | 3 distinct variants, around 24 placements | 8 visually sensible grip/rope surfaces; 4 can fall in controlled tsunami state |
| Rocks | 4 variants, 30-40 placements | Large rocks use simple colliders; small rocks decorative |
| Beach props | 6+ types, 30-40 placements | chairs, parasols, crates, signs, barrels, coconuts, nets; only 15-20 active physical objects |
| Hotel | one shell, three states | `hotel_intact`, `hotel_flooded`, `hotel_damaged` |
| Cabin | one shell, three states | `cabin_intact`, `cabin_flooded`, `cabin_damaged` |
| Boat | two states | `boat_dry`, `boat_water`; never both active |
| Containment Unit | one prefab, six visual states | 0-4 fragments plus Tide Core ejection |
| Fragments | four unique hero props | exact forms in Section 8 |

### Destruction classes

| Class | Can include | Never allowed to do |
|---|---|---|
| `Protected_Gameplay` | terrain, mountain, three routes to summit, lighthouse base, Unit, main stairs | block progression or create a soft-lock |
| `Breakable_Cosmetic` | chairs, parasols, crates, signs, barrels, coconuts, nets | exceed dynamic-prop cap or affect routes |
| `Breakable_Controlled` | cabin roof, selected hotel balcony, short lighthouse boardwalk, selected palms/railings, final pier details | use procedural fracture or destroy a critical route |

### Required Beach states

| Object | Intact | High tide | Low tide | Post-tsunami |
|---|---|---|---|---|
| Cabin | dry | ground floor flooded | dry/exposed | roof/wall damaged |
| Hotel | accessible | ground floor flooded | normal | window/balcony damage |
| Boat | water-ready | water-ready | stranded | water-ready for exit |
| Beach | open sand | low routes submerged | reefs exposed | foam, wreckage, changed debris |

### Water implementation

- Calm water approximate level: `y=0`.
- High tide: `y=4.5`.
- Low tide: `y=-1.2`.
- Tsunami is a scripted host-authoritative surge around `y=17` relative to lower island areas, tuned visually to the terrain.
- Do not use globally simulated fluid water.
- Use controlled colliders/volumes for drag, breath damage, current, force direction, VFX foam, audio, and state swaps.

### Art direction

- Low-poly, hand-built, chunky forms with readable silhouettes.
- Bright but weathered coastal palette: warm sand, faded turquoise/blue-gray, worn yellow safety color, coral warning color, milky cyan energy.
- Avoid photorealism, ultra-detailed PBR grime, horror darkness, clean sci-fi chrome, and random neon.
- Every hero object must look useful in the world before the player reads any text.

---

## 13. Audio direction and sources

### Audio role

Sound is part of gameplay telegraphing, not decoration. It must make players look in the right direction before the HUD confirms danger.

| Event | Sound direction |
|---|---|
| Lab incident | relay pop, cyan electrical crackle, acid hiss, short emergency siren |
| Fragment 1 | electrical snaps, wind rising, loose metal vibration |
| Fragment 2 | short flood alarm, directional water rise, pressure pipe groan |
| Fragment 3 | deep ocean suction, sudden unnatural coastal silence |
| Fragment 4 | long siren, near-silence, distant low wave roar |
| Tsunami | massive water roar, wood/metal impacts, foam; do not drown out player voice or shouts |
| Rope | soft rope tension, anchor scrape, hand pull, strain cue before grip fails |
| Items | physical cloth/rubber/metal cues; avoid generic laser beeps |

### Sources to consider

- [Kenney Impact Sounds](https://kenney.nl/assets/impact-sounds) - wood, debris, impact.
- [Kenney Interface Sounds](https://kenney.nl/assets/interface-sounds) - restrained HUD/pickup feedback.
- [Kenney Sci-Fi Sounds](https://kenney.nl/assets/sci-fi-sounds) and [Kenney Digital Audio](https://kenney.nl/assets/digital-audio) - only selected machine relay/failure sounds, never as a space-station soundtrack.
- [Sonniss GameAudioGDC](https://sonniss.com/gameaudiogdc) - sea, wind, storm, tsunami ambience; preserve the license downloaded with assets.

Start with a small curated palette of 15-20 sounds, not entire libraries.

---

## 14. Curadoria 3D verificada e intake de assets

> **Verificado em 1 de setembro de 2026.** Esta lista cobre somente o Laboratório e a Praia. Cada link abaixo é a página oficial do autor/projeto e indica licença e formato. Preferir recursos CC0 evita dúvidas de uso comercial, mas manter o registro de origem continua obrigatório.

### 14.1 Regra de direção de arte: variedade controlada, não sopa de assets

O jogo fica mais bonito se parecer ter sido feito por uma direção de arte, não por uma pasta de downloads. Portanto:

- **Base visual exterior:** Quaternius, especialmente o Ultimate Stylized Nature Pack.
- **Base visual de interior/resort:** Quaternius Ultimate House Interior + alguns módulos do Ultimate Buildings Pack.
- **Base visual de laboratório:** custom authoring + Lab Assets de jamesdev; Kenney Factory Kit entra apenas como suporte industrial selecionado.
- **Materiais de apoio:** Poly Haven, somente em resolução 1K ou 2K e sempre simplificados/tingidos pelo material estilizado do jogo.
- Não misturar no mesmo espaço três bibliotecas visíveis sem uma razão. A Praia deve ler como “custom + Quaternius”; o Laboratório, como “custom + jamesdev + poucos props Kenney”.
- Hero props nunca vêm prontos de pack: Containment Unit, quatro peças, Tide Core, corda, boia, medkit, guarda-chuva, farol, hotel jogável e cabana destrutível são autoria do projeto.

### 14.2 Baixar agora — biblioteca mínima que realmente deve entrar no protótipo

| Prioridade | Recurso oficial | Licença / formatos declarados pela fonte | Uso exato no jogo | Seleção permitida |
|---|---|---|---|---|
| 1 | [Lab Assets — jamesdev](https://milkandbanana.itch.io/lab-assets) | CC0; FBX e GLB | Bancadas, vidrarias, frascos, suportes, medidores, EPIs e máquinas secundárias do Laboratório | Usar 15–25 props. O pack tem um atlas e três materiais, o que é bom para desempenho. Não usar uma máquina pronta como a Climate Machine. |
| 2 | [Quaternius Ultimate Stylized Nature Pack](https://quaternius.com/packs/ultimatestylizednature.html) | CC0; FBX, OBJ, glTF e Blend | Linguagem principal da Praia: palmeiras, vegetação, pedras, solo, troncos e detalhes naturais | Escolher 3 palmeiras, 4 rochas, 2 arbustos/gramíneas e 1 tronco. Não importar o pack inteiro para a cena. |
| 3 | [Quaternius Ultimate Buildings Pack](https://quaternius.com/packs/ultimatetexturedbuildings.html) | CC0; FBX, OBJ e Blend | Janelas, portas, telhados e módulos auxiliares para construir a silhueta da cabana e do hotel | Usar componentes, nunca colocar um prédio pronto como hotel. A planta de seis quartos do hotel é customizada. |
| 4 | [Quaternius Ultimate House Interior Pack](https://quaternius.com/packs/ultimatehomeinterior.html) | CC0; FBX, OBJ e Blend | Seis quartos do hotel, recepção, café, cozinha/depósito e cabana | Escolher no máximo 20–30 props. Props grandes contam como leitura de rota; não criar um labirinto de móveis. |
| 5 | [Kenney Factory Kit](https://kenney.nl/assets/factory-kit) | CC0; 140 modelos 3D, variações e animações | Tubos, tanques, painéis mecânicos, cabos, caixas e suportes do Laboratório e da Containment Unit | Escolher 10–15 props secundários. Recolorir para azul-cinza gasto, amarelo de segurança e coral; não deixar aparência de fábrica genérica. |
| 6 | [Quaternius Ships Pack](https://quaternius.com/packs/ships.html) | CC0; FBX, OBJ e Blend | Ponto de partida para casco, mastro, cabine ou detalhes do barco de extração | Escolher um casco/base e transformá-lo em boat_dry e boat_water. O barco final não deve parecer um navio pirata genérico. |
| 7 | [Poly Haven — Aerial Beach 01](https://polyhaven.com/a/aerial_beach_01), [Weathered Planks](https://polyhaven.com/a/weathered_planks), [Concrete Wall 002](https://polyhaven.com/a/t_concrete_wall_002), [Metal Plate 02](https://polyhaven.com/a/metal_plate_02) e [Rusty Metal Grid](https://polyhaven.com/a/rusty_metal_grid) | CC0; mapas PBR e downloads em múltiplas resoluções | Fontes de material para areia, píer/cabana, concreto do lab e metal gasto da máquina | Baixar somente 1K/2K. Extrair caráter, rugosidade e desgaste; nunca cobrir todo o jogo com PBR fotorealista ou baixar texturas 8K para o protótipo. |

### 14.3 Banco de reserva — use apenas quando uma necessidade concreta aparecer

Estes recursos são compatíveis e licenciáveis, mas não devem ser importados “por precaução”. Primeiro verificar se a biblioteca mínima acima já resolve a necessidade.

| Recurso oficial | Licença / formatos declarados pela fonte | Quando vale usar | O que não fazer |
|---|---|---|---|
| [Quaternius Survival Pack](https://quaternius.com/packs/survival.html) | CC0; FBX, OBJ e Blend | Barraca, mochila decorativa, lanterna, caixa de suprimentos, fogueira cenográfica e pequenos detalhes da área de sobrevivência | Não substituir a boia, corda, medkit ou guarda-chuva heroicos pelo modelo pronto do pack. |
| [Quaternius Ultimate Nature Pack](https://quaternius.com/packs/ultimatenature.html) | CC0; FBX, OBJ e Blend | Apenas se o pack estilizado não tiver uma pedra, palmeira ou vegetação necessária | Não usar em massa junto do Ultimate Stylized Nature. Escolher uma família principal por área. |
| [Kenney Watercraft Kit](https://kenney.nl/assets/watercraft-kit) | CC0; 45 modelos 3D | Alternativa de casco, hélice, boias decorativas e detalhes de embarcação se o Ships Pack não resolver | Não misturar partes Kenney e Quaternius no mesmo barco sem repintura, nova escala e revisão de silhueta. |
| [Kenney City Kit (Industrial)](https://kenney.nl/assets/city-kit-industrial) | CC0; 25 modelos 3D | Contêiner, estrutura de carga, grade e pequeno detalhe de doca/lab exterior | Não transformar a ilha num cenário urbano ou industrial grande. |
| [Kenney Building Kit](https://kenney.nl/assets/building-kit) | CC0; 80 modelos 3D | Peças de escada, varanda, corrimão, porta ou telhado quando uma peça custom ainda não existe | Não construir o hotel com módulos repetidos de forma visível. |
| [Kenney Furniture Kit](https://kenney.nl/assets/furniture-kit) | CC0; 140 modelos 3D | Plano B para uma peça interior pontual que não exista no pack Quaternius | Não usar os dois packs de mobiliário na mesma sala sem material/paleta comum. |
| [Kenney Modular Cave Kit](https://kenney.nl/assets/modular-cave-kit) | CC0; 40 modelos 3D modulares | Greybox ou apoio à caverna curta da Praia | A caverna final deve ser moldada ao percurso, com entrada, câmara e saída planejadas; não parecer uma dungeon. |
| [Kenney Nature Kit](https://kenney.nl/assets/nature-kit) | CC0; 330 modelos 3D | Fallback de rocha/folhagem se faltar uma silhueta específica | Não usar como terceira linguagem de natureza na Praia. |
| [KayKit Prototype Bits](https://kaylousberg.itch.io/prototype-bits) | CC0; FBX, GLTF e OBJ | Prototipagem rápida de interação, escala e layout; inclui 64+ props simples | Deve sair do visual final se não for repintado/ajustado. É um kit de protótipo, não a assinatura do jogo. |
| [KayKit Furniture Bits](https://kaylousberg.itch.io/furniture-bits) | CC0; FBX, GLTF e OBJ | Fallback de mobília simples para testar bloqueio de caminho e leitura de espaço | Não importar em massa junto do Quaternius. Escolher um único item quando necessário. |
| [Quaternius Universal Base Characters](https://quaternius.com/packs/universalbasecharacters.html) | CC0; FBX, OBJ e Blend; personagens humanoides prontos para Unity | Referência de rig, escala e animações durante o protótipo dos cientistas | Não entregar o personagem pronto como cientista final. O corpo final precisa de silhuetas próprias: baixo, alto, redondo, magro e largo, sempre com o mesmo hitbox e as mesmas regras. |
| [Quaternius Universal Animation Library](https://quaternius.com/packs/universalanimationlibrary.html) e [Library 2](https://quaternius.com/packs/universalanimationlibrary2.html) | CC0; animações humanoides compatíveis com Unity | Prototipar correr, carregar, escorregar, agarrar borda, cair e revive antes das animações próprias | Retarget e revisar cada animação. Não misturar poses de combate/aventura que mudem o tom cômico de cientistas atrapalhados. |
| [KayKit Forest Nature](https://kaylousberg.itch.io/kaykit-forest) | CC0; FBX, GLTF e OBJ | Reserva para uma única lacuna de vegetação, tronco ou pedra que não exista na família Quaternius | Não importar a floresta inteira nem trocar a linguagem da Praia. Usar apenas depois de teste lado a lado no sandbox. |
| [KayKit Character Animations](https://kaylousberg.itch.io/kaykit-character-animations) | CC0; FBX e GLTF | Referência/placeholder de animação para corpo, resgate e locomoção enquanto o rig próprio amadurece | Não depender de animações sem revisar transições, root motion e compatibilidade com primeira pessoa/rede. |
| [Kenney Survival Kit](https://kenney.nl/assets/survival-kit) | CC0; modelos 3D e animações | Reserva para uma caixa de suprimentos, tenda decorativa, lanternas ou props de área de sobrevivência | Não substituir os quatro itens heroicos, nem adicionar sistemas de crafting/sobrevivência fora do escopo. |

### 14.4 Modelos e materiais que parecem tentadores, mas devem ficar fora do slice

| Evitar | Motivo |
|---|---|
| [Kenney Modular Space Kit](https://kenney.nl/assets/modular-space-kit), [Kenney Space Station Kit](https://kenney.nl/assets/space-station-kit), [Quaternius Modular Sci-Fi MegaKit](https://quaternius.com/packs/modularscifimegakit.html) e similares | São CC0, mas empurram o Laboratório para nave espacial limpa e genérica — exatamente a identidade proibida. |
| [Poly Haven Coast Line 01](https://polyhaven.com/a/coast_line_01) como geometria de gameplay | É um modelo realista com cerca de um milhão de triângulos; quebra estilo, leitura e orçamento. Pode servir apenas como referência visual externa, nunca como mesh da Praia. |
| Modelos grátis de marketplace sem licença inequívoca na página individual | “Free” não é licença comercial. Não importar nada de Sketchfab, CGTrader, TurboSquid, itch.io ou GitHub sem registrar licença e autor no ledger. |
| Personagens prontos de aventura/sobrevivência | Não resolvem o requisito de cientistas com corpos engraçados, variáveis e controlados. O corpo do jogador será próprio e terá física controlada; não adotar uma estética de personagem de outro jogo. |
| Medkit em cubo, boia em esfera/disco, corda como linha, guarda-chuva em cone, peças como caixas coloridas | Isso falha o Gate 3. Cada hero prop precisa de silhueta, pega, material, animação e leitura próprios. |
| Importar FBX + OBJ + GLB + Blend da mesma peça | Cria duplicação, colisores errados, materiais repetidos e uma pasta impossível de auditar. |

### 14.5 Checklist de autoria obrigatória — não procurar em pack

Construir como assets próprios do projeto, mesmo que um pack seja usado como referência ou matéria-prima:

1. “machine_climate_machine_lab_v01” — máquina do acidente no Laboratório.
2. “machine_containment_unit_v01” — unidade central da Praia, com estados 0–4 e ejeção do Tide Core.
3. “piece_tide_antenna_v01”, “piece_flow_valve_v01”, “piece_pressure_bellows_v01”, “piece_salt_lens_v01”.
4. “core_tide_core_v01”.
5. “prop_rope_coiled_v01” + forma aberta controlada por sistema, nunca uma linha/corda física livre sem restrição.
6. “prop_lifebuoy_v01” — aro de resgate espesso com cabo enrolado.
7. “prop_medkit_softcase_v01” — maleta macia com zíper, alça e patch teal; sem cruz vermelha.
8. “prop_emergency_umbrella_folded_v01” e “prop_emergency_umbrella_open_v01”.
9. “env_lighthouse_v01”, “env_hotel_shell_v01”, “env_cabin_shell_v01”, “env_boat_extraction_v01” e seus estados previstos.

### 14.6 Como fazer os packs parecerem do mesmo jogo

Antes de qualquer asset ir para a cena final, criar material variants do jogo. Nunca aceitar as cores originais por padrão.

| Regra | Implementação |
|---|---|
| Paleta | Exterior: areia quente, turquesa desbotado, azul-cinza, amarelo de segurança e coral. Laboratório: concreto gasto, metal azul-cinza, cabos amarelos, placas coral. |
| Formas | Silhuetas grossas, cantos levemente arredondados/chamfered, poucas peças pequenas. Se um asset é fino, muito realista ou cheio de microdetalhe, simplificar ou não usar. |
| Material | Até 2 slots por prop comum; usar materiais compartilhados “M_Style_Base”, “M_Style_Weathered”, “M_Style_Safety”, “M_Style_Glass”. Texturas de Poly Haven são fonte, não “skin final” universal. |
| Escala | 1 Unity unit = 1 metro. Conferir porta, cadeira, bancada, boia e barco ao lado do player controller antes de criar prefab final. |
| Densidade | Espaços jogáveis usam props para contar história e orientar rota, não para preencher cada metro quadrado. Manter portas, escadas, superfícies de corda, itens e linha de visão legíveis. |
| Destruição | A fonte pode dar o mesh intacto; estados quebrados são controlados pelo projeto por troca de mesh/VFX. Sem procedural fracture e sem debris físico ilimitado. |

### 14.7 Pipeline Unity obrigatório

1. Baixar o arquivo original e preservar licença, URL e data em “Assets/ThirdParty/<SourceName>/README_license.md”.
2. Importar **somente o FBX escolhido** por asset; usar OBJ/GLB/Blend apenas se não houver FBX ou se for necessário editar no Blender.
3. Manter os arquivos fonte intocados em “Assets/ThirdParty/”. Nunca editar prefab, mesh ou material original.
4. Criar variante em “Assets/Game/Art/Models/”, prefab em “Assets/Game/Art/Prefabs/” e materiais finais em “Assets/Game/Art/Materials/”.
5. Aplicar nomes minúsculos com underscore: “env_palm_tall_a_v01”, “prop_lab_beaker_blue_v01”, “prop_hotel_chair_worn_a_v01”.
6. No importador: desativar Read/Write quando não houver necessidade de alteração de mesh; desligar geração automática de collider; não deixar materiais duplicados por asset.
7. Colisores de gameplay devem ser simples e intencionais: Box/Capsule para props e rotas, MeshCollider estático apenas quando indispensável. Nunca usar MeshCollider não convexo em Rigidbody dinâmico.
8. Criar LODGroup para palmeiras, pedras grandes, hotel, farol e barco. Props pequenos e distantes devem ser estáticos/instanciados, não Rigidbody.
9. Registrar cada asset realmente usado em “docs/third_party_assets.md” com: asset, source, source_url, license, download_date, original_file, derived_prefab, scene_use, changes_made.
10. Antes de apagar um placeholder ruim, criar e verificar seu substituto no prefab e em Play Mode; no relatório, registrar caminho antigo -> caminho novo.

### 14.8 Ordem de download e triagem

1. Baixar Lab Assets, Ultimate Stylized Nature, Ultimate Buildings, Ultimate House Interior, Factory Kit e Ships Pack.
2. Criar uma cena sandbox “Art_Intake_Lab_Beach” separada da cena jogável.
3. Colocar somente 3–5 candidatos por categoria lado a lado com o player controller: palmeira, rocha, cadeira, bancada, tubo, janela e barco.
4. Escolher a família visual vencedora por categoria, criar variantes e excluir da cena sandbox os candidatos restantes. Não apagar os arquivos originais de ThirdParty.
5. Só então baixar/usar itens da seção de reserva para uma lacuna específica.
6. Não começar a decoração final antes de o greybox, as rotas e os quatro estados de desastre estarem validados em multiplayer.

---

## 15. Ordered production plan - what to ask Claude to do

Do not send all tasks as one giant request. Send the handoff document first, then issue the phases below in order. Claude must report after each phase before moving forward.

### Prompt 1 - read and audit only

```text
Read RUNAWAY_REACTION_CLAUDE_HANDOFF.md completely. Do not implement anything yet.

Inspect the Unity project, current scenes, prefabs, scripts, packages, and active assets. Run the current build if possible. Create legacy_cleanup_report.md with exact paths and screenshots for anything that conflicts with the handoff, especially generic primitive versions of the medkit, buoy, rope, umbrella, machine fragments, Containment Unit, HUD, laboratory, and Beach structures.

For every proposed deletion, state the exact replacement and reference risk. Do not delete, rename, reset, or replace anything yet. Return the audit report and a concise implementation plan in dependency order.
```

### Prompt 1A - asset intake without contaminating the game scene

```text
After the audit is approved, process only the third-party resources already downloaded by the user from section 14 of the master handoff. Do not look for random marketplace assets and do not substitute a different source without asking.

Create the separate Art_Intake_Lab_Beach sandbox. Preserve every original download under ThirdParty/<SourceName>/ with its license/readme. Import only one chosen format per model, test scale and materials beside the current player controller, and create a third_party_assets.md ledger.

Choose no more than 3-5 candidates per category before placing anything in a playable scene. Build final material variants and derived prefabs outside ThirdParty. Report which approved packs are still missing, which assets passed visual intake, and which ones were rejected. Do not decorate Beach or Laboratory yet.
```

### Prompt 2 - approve cleanup and establish the safe slice

```text
Using the approved audit report and the master handoff, perform only the safe cleanup and foundation pass.

Replace or remove only the named obsolete placeholder assets after their replacements are connected and verified. Preserve working gameplay scripts where possible. Create/verify a Laboratory intro scene and a Beach greybox scene with the exact zones, routes, Containment Unit location, hotel room count, cave, lighthouse, mountain, pier, and boat positions described in the handoff.

Do not add Village, Jungle, Volcano, NPCs, inventory grid, backpack capacity, crafting, PvP, roulette, or marketplace features. Return changed paths, deleted paths, screenshots, and a two-player Play Mode verification report.
```

### Prompt 2A - Movement Lab spike before traversal production

```text
Before adding climbing or traversal interactions to Beach, implement only the isolated Movement_Lab described in section 9 of the master handoff. Do not alter Beach landmark geometry for this task and do not add free climbing.

Use the existing player/network foundation where possible. Prove host plus one client for: grounded walk/run/jump/fall, stamina, surface swimming/current, a gradual grip release, one host-authoritative rope climb/brace, one authored low-ledged pull-up, a simple stair/ladder traversal if present, and two-player Bellows carry/drop.

Use temporary primitives in this laboratory only. The player motor owns position; Mixamo or any Animator clip is presentation-only, in-place for normal networked motion. Build a dedicated local FirstPersonArms visual rig and a remote full-body presentation contract, but do not spend time on final scientist cosmetics.

Return: exact changed paths; host/client screenshots or short video notes for every state; a list of state divergence, stuck, camera-clipping, and confusing-affordance failures; and the smallest recommended fix for each. Do not move this system into Beach until the lab passes.
```

### Prompt 2B - Beach Readability Pass

```text
Perform the Beach Readability Pass exactly as sections 6, 11 and 12 of the master handoff. This is a focused map-quality pass before new gameplay content.

First audit every current Beach prop and classify it as keep, move, replace or remove. Provide exact scene/prefab paths and screenshots before deleting anything. Remove only approved random fences, floating/misaligned scenery, and obsolete imported hotel placeholders after their replacements are connected and verified.

Implement the Flux Compass as a physical, rebindable wrist containment instrument. It calibrates toward the next landmark on Beach arrival and after every valid installation; it provides broad direction only, does not use an inventory slot, does not show distance/path/exact item location, and suppresses during immediate danger. Derive it from the existing expected-fragment state; do not create a second gameplay state or networked per-player compass transform.

Build/repair the Cave, Lighthouse, Pier and Hotel greybox according to their explicit landmark requirements. Prepare safe authored variation sockets only; do not randomize critical landmarks, routes, fragments, water, or hazards. Do not add Village, new items, new hazards, more asset packs, polished interiors, or any new gameplay system.

Return: the keep/move/replace/remove report; old-path -> replacement-path records; first-person screenshots of each landmark; a no-clutter route walk report; and a two-player check that the compass points to the correct landmark at every progression stage.
```

### Prompt 3 - build the complete playable Laboratory onboarding

```text
Implement the Laboratory onboarding exactly as section 5 of the master handoff. It is a 35-45 second playable incident, not a traditional cutscene and not a separate tutorial room.

Build the exact Reaction Hall, visible Chemical Prep room, Control Booth, Service Corridor, Loading Dock, the climate-machine hero prop, acid duct/drain, physical DOCK sign, lighting, spatial audio, subtitles, contextual hints, collective dock assembly, late-player transfer, and Beach handoff. Camera and movement remain free at all times. Do not add an interaction button, items, damage, NPCs, puzzles, forced camera, black bars, generic sci-fi panels, or a red death timer.

Use the host-authoritative LabOnboardingDirector pattern in section 5 and test: two players arriving early, one player not reaching the dock, a disconnection, a late joiner, accessibility settings, and the 45-second maximum. Return exact paths, a timeline test report, and first-person screenshots from the four critical moments.
```

### Prompt 4 - build the playable Beach loop before polish

```text
Implement the playable Laboratory-to-Beach vertical slice from the master handoff:

1. 35-45 second Laboratory escape with acid rain, short siren, and dock exit.
2. Four Beach fragment objectives with both-hand carry rules.
3. Two-player Pressure Bellows transport.
4. Containment Unit states 0-4, visible reaction onset, fixed weather progression, Tide Core ejection.
5. High tide, low tide, and tsunami as host-authoritative controlled state changes, not real fluid simulation.
6. Downed/revive, stamina, approved Movement Lab traversal states, extraction boat, and no-soft-lock routes.

Use temporary simple geometry only where necessary for environment validation, but do not leave utility items or machine fragments as generic cubes. Test with two players before reporting. Return screenshots/video notes and exact remaining blockers.
```

### Prompt 5 - build the utility/rescue system

```text
Implement only the four Beach utility items from the master handoff: rope, buoy, medkit, umbrella.

Use three quick slots with one active large item and two compact inactive items. Do not implement functional backpack capacity. Ensure carrying a machine fragment drops the equipped utility item and locks the other two slots.

Build rope as the specified host-authoritative hybrid system: free-feeling throw, valid contextual attachment surfaces, controlled visual sag/stretch, one active end, 12 m maximum, no free physics knots/wrapping/bridges, teammate brace option, reusable until retrieved/lost.

Create correct low-poly forms for each item; no cube medkit, primitive buoy, line-only rope, or cone umbrella. Test every item in a two-player scenario and report exact behavior and failure cases.
```

### Prompt 6 - replace visual placeholders and polish readability

```text
Using the asset specifications in the master handoff, replace remaining approved visual placeholders with the correct authored low-poly forms: Lab Climate Machine, Beach Containment Unit, Tide Antenna, Flow Valve, Pressure Bellows, Salt Lens, Tide Core, medkit soft case, lifebuoy, coiled rope, umbrella, boat, cabin, lighthouse, hotel shell, and controlled destruction states.

Use free source packs only as raw materials and preserve third-party license records. Keep gameplay colliders simple and avoid dynamic MeshColliders. Do not produce photoreal or generic sci-fi art. Return an asset manifest, before/after screenshots, and performance notes for a six-player test.
```

### Prompt 7 - HUD, sound, and test gate

```text
Implement the HUD and audiovisual telegraphing exactly as specified in the master handoff. Rebuild any current HUD that conflicts: contextual top danger direction, mission-only Tide Core progress, fading lower-left health/stamina, compact three-item lower-center display, and local interaction prompts. No minimap, quest log, giant opaque boxes, or sci-fi dashboard.

Add a small curated sound pass for lab incident, machine stages, water, rope, and tsunami. Then run a 2-player and 4-player test. Report any soft-lock, unclear warning, item exploit, rope bypass, performance issue, or route failure before attempting a 6-player test.
```

---

## 16. Acceptance gates

### Gate 1 - greybox is ready

- Two players can complete Lab -> Beach -> Boat with no explanation beyond in-world prompts.
- On arrival and after each installation, the Flux Compass identifies the correct broad landmark direction without showing an exact route or coordinate.
- All four required fragment locations are reachable.
- Bellows requires two players and has a viable route.
- No breakable prop can block the Unit, cave, lighthouse, summit, or exit.
- Main summit route remains valid after every state change.

### Gate 2 - systems are ready

- Two host-connected players see the same fragment, machine state, water state, rope state, downed state, and boat state.
- Tide progression starts visibly 8-15 seconds after installation and reaches full threat within the intended window.
- Rope cannot make arbitrary horizontal bridges or bypass map boundaries.
- All utility items are optional; Beach is completable without them.
- A player can rescue another from water, with rope, and from a downed state.

### Gate 3 - visual slice is ready

- No hero item is a generic cube, sphere, disc, cone, or line placeholder.
- Laboratory reads as coastal/industrial science, not generic spaceship.
- Containment Unit and all four fragments are recognizable from 10 m.
- HUD remains legible in first person without covering the play space.
- Hotel feels like a compact resort with six playable rooms, not a block maze.

### Gate 4 - multiplayer test is ready

- Test with 2, then 4, then 6 players.
- No soft-lock, duplicate boat, duplicate Core, stuck carried part, permanent water damage, broken interaction prompt, or client-only disaster divergence.
- Dynamic breakables remain within performance cap.
- Any failure becomes a short issue list with reproduction steps before adding new content.

---

## 17. Decisions still open - do not decide unilaterally

- Final game title.
- Functional backpack capacity after Beach playtest.
- Exact final item spawn positions and balance counts after route testing.
- Final damage values, revive time, stamina drain values, and detailed cooldowns.
- Village escape vehicle and all Village/Jungle/Volcano detailed level design.
- Cosmetic progression and character customization content.
- Networking library only if project currently has none.

When one of these blocks current implementation, provide 2-3 concise options with the effect on scope, then wait for approval.

---

## 18. Required reporting format after every production phase

Each response/report must contain:

1. **What changed** - concise bullet list.
2. **Files changed** - exact paths.
3. **Assets replaced/deleted** - exact old path -> new path, with reason.
4. **What was tested** - player count, scene, result.
5. **Screenshots or short visual description** - enough to judge first-person readability.
6. **Known issues / blockers** - no hiding failures.
7. **Next smallest safe task** - do not jump to another island.

---

## 19. Arquitetura técnica de implementação — Laboratório + Praia

> **Status:** decisão técnica aceita para o vertical slice.  
> **Escopo:** somente Laboratório, transição para a Praia e a Praia até o barco. Não criar arquitetura para Vila, Selva ou Vulcão agora.

### 19.1 Objetivo da arquitetura

Construir uma partida cooperativa de 2–6 jogadores em que o **host é a única autoridade de jogo**. A progressão deve ser determinística no sentido de que a mesma sequência de ações válidas sempre leva ao mesmo estado de partida: peça instalada, reação iniciada, mundo alterado, Tide Core criado e barco extraindo.

Isso **não** significa tentar tornar a física do Unity determinística entre máquinas. Água, vento, objetos e corda podem parecer físicos, mas o resultado de gameplay é calculado pelo host e replicado aos clientes.

Antes de escrever código, o Claude deve ler `ProjectSettings/ProjectVersion.txt` e listar a biblioteca de rede já instalada. Não atualizar a versão do Unity, trocar biblioteca de rede ou adicionar uma segunda solução de netcode sem aprovação explícita.

### 19.2 Decisão de rede e autoridade

Use o modelo de **listen server host-authoritative** já definido neste documento:

```text
Cliente envia intenção
        ↓
Host valida contexto e regras
        ↓
Host altera estado autoritativo uma vez
        ↓
Estado/evento replicado para todos
        ↓
Cada cliente atualiza visual, áudio e HUD localmente
```

O host é dono de:

- estado da run, cena atual e transição Laboratório → Praia;
- ordem das quatro peças, instalação e temporizadores das reações;
- estado das peças, Tide Core, barco e extração;
- água, corrente, tsunami, volumes de dano e estados de destruição controlada;
- stamina, vida, caído, revive e transporte de peças;
- colisão/posição de personagem conforme o motor atual, mais a validade de entrar em nado, grip, corda, pull-up de ledge, mãos ocupadas e outros estados de locomoção;
- validade de usar item, arremessar item, prender/recolher corda e subir corda;
- estado lógico da corda e de cada prop dinâmico relevante.

O cliente pode prever apenas o movimento do **próprio** personagem se a biblioteca atual já suportar isso. O cliente nunca decide dano, estado da água, resultado de uma corda, transição para grip/climb/pull-up, instalação de peça ou destruição compartilhada. O Animator nunca é uma fonte de autoridade para posição ou para uma transição de gameplay.

### 19.3 Estratégia de cenas

Usar três cenas pequenas, carregadas pela camada de cena da própria biblioteca de rede:

```text
00_Bootstrap        persistente; sessão, lobby local, roteamento de cenas e UI raiz
10_Laboratory       intro de 35–45 s; incidente e saída pelo dock
20_Beach            ilha completa; quatro peças, reações, Tide Core e barco
```

- `00_Bootstrap` é a única cena permitida a persistir entre carregamentos. Ela contém somente objetos de sessão, roteamento, configuração e UI raiz — nunca jogador, item, máquina ou perigo de mundo.
- Laboratório e Praia são carregados como cenas de rede pelo host. Clientes não podem carregar a Praia por conta própria.
- Não manter Laboratório e Praia simultaneamente carregados apenas para fingir uma transição seamless. A porta/dock, som, breve tela de carregamento contextual e spawn na Praia resolvem isso com menos memória e menos bugs.
- Cada cena possui um `SceneBindings` local que relaciona IDs estáveis a objetos da cena: máquina, sockets, pontos de spawn, barco, âncoras válidas de corda, volumes e variantes visuais. Dados globais não podem guardar referências diretas frágeis a `GameObject` de outra cena.
- Usar uma transição de rede única: host bloqueia novas interações, registra estado final do Laboratório, manda carregar Praia, aguarda clientes prontos e só então libera input/spawn na Praia.

### 19.4 Limites de módulos

Não criar um `GameManager`, `BeachManager` ou `NetworkManager` gigante que sabe tudo. Cada módulo abaixo tem um dono claro. Um módulo pede uma ação ao dono; ele não escreve no estado interno de outro módulo diretamente.

| Módulo | Dono do quê | Pode chamar | Não pode fazer |
|---|---|---|---|
| `Session` | conexão, host, lobby e carregamento de cena | `RunFlow`, adaptador de rede | conter regra de gameplay |
| `RunFlow` | fase global da run e transições ordenadas | `LaboratoryFlow`, `BeachFlow`, `Extraction` | aplicar dano, mover jogador ou tocar UI direto |
| `LaboratoryFlow` | sequência de incidente, sirene, dock e saída | `WorldPresentation`, `RunFlow` | criar lógica da Praia |
| `BeachFlow` | sequência fixa Antenna → Valve → Bellows → Lens → Tide Core → extração | `Objectives`, `Hazards`, `WorldState`, `Extraction` | ler input ou controlar HUD diretamente |
| `Objectives` | estado e posse de fragmentos, sockets e Tide Core | `PlayerState`, `Machine`, `BeachFlow` | decidir perigos por conta própria |
| `Machine` | validação de encaixe, estado visual 0–4, disparo da reação | `BeachFlow`, `WorldPresentation` | controlar água ou dano diretamente |
| `Hazards` | volumes, corrente, dano ambiental e escalada de cada reação | `PlayerState`, `WorldState` | instalar peça ou alterar inventário |
| `WorldState` | nível de água, variantes de hotel/cabana/barco e destruição controlada | `WorldPresentation` | depender de física livre para progresso |
| `PlayerState` | vida, stamina, caído, revive, mãos ocupadas e inventário de 3 slots | `Items`, `Objectives`, `Rope`, `Locomotion` | decidir estágio global da run |
| `Locomotion` | motor/cápsula, modos Grounded/Airborne/Swimming/Gripping/ClimbingRope/LedgePullUp/LadderClimb, queda e comandos de movimento | `PlayerState`, `Rope`, `WorldState`, adaptador de rede | deixar Animator, root motion ou Rigidbody livre decidir posição/resultado compartilhado |
| `Items` | pick-up, slot ativo, uso, arremesso, queda e consumo | `PlayerState`, `WorldState` | alterar vida sem solicitar `PlayerState` |
| `Rope` | anexação válida, ponta ativa, brace, escalada, recuperação e perda | `PlayerState`, `WorldState` | simular corda física livre em cada cliente |
| `CharacterPresentation` | Animator de corpo remoto, braços locais em primeira pessoa, poses de item, reações e sons de passo | estados de `Locomotion`, `PlayerState`, `Items`, `Rope` | escrever posição, stamina, dano, interação ou estado de partida |
| `Tutorial` | qual prompt contextual é apresentado em cada fase | lê estados de `RunFlow`, `PlayerState`, `Hazards` | bloquear progresso ou inventar objetivos |
| `FluxCompass` | apresentação física local da direção do próximo marco | lê `BeachState.expectedFragment`, definições de marco e perigo | criar estado autoritativo próprio, ocupar slot ou decidir rota/perigo |
| `UI` / `AudioVFX` | apenas apresentação local de estados/eventos já validados | adaptadores de estado | tomar decisões de gameplay ou enviar mutações diretas |

### 19.5 Dados de design vs. estado de partida

**Dados estáticos** vivem em assets versionados (preferencialmente `ScriptableObject`), são lidos no início da cena e nunca recebem mutação em Play Mode:

```text
LaboratoryIntroDefinition
BeachProgressionDefinition
FragmentDefinition (4)
HazardDefinition (storm, high tide, low tide, tsunami)
ItemDefinition (rope, buoy, medkit, umbrella)
RopeSurfaceDefinition
PlayerMovementDefinition (velocidades, aceleração, salto, stamina e limites de estado)
TraversalSurfaceDefinition (Grip | LowLedge | Ladder, bindingId, aproximação, saída e regras de segurança)
AnimationProfileDefinition (Avatar, clips in-place, masks e parâmetros de apresentação)
FluxCompassDefinition (mapeia FragmentDefinition -> landmarkBindingId / estilo do dial)
WorldVariantDefinition
TutorialCueDefinition
AudioCueDefinition
SceneCatalog
```

Esses dados contêm IDs, textos, referências visuais, tempos-base, regras e variantes permitidas. Não devem conter vida atual, item carregado, água atual ou objetos já quebrados.

**Estado de runtime autoritativo** existe somente durante a sessão e é replicado pelo host:

```text
RunState
  scene: Laboratory | Beach
  phase: LabIdle | LabIncident | LabEvacuate | BeachExplore |
         BeachWarning | BeachDanger | TideCoreReady | Extracting | Complete
  transitionVersion: inteiro crescente
  phaseStartedAtHostTime

BeachState
  expectedFragment: Antenna | Valve | Bellows | Lens
  installedFragmentMask: 4 bits
  activeReaction: None | Storm | HighTide | LowTide | Tsunami
  reactionStartedAtHostTime
  waterVariant, hotelVariant, cabinVariant, boatVariant
  tideCoreState: Locked | Ejecting | Available | Secured

FragmentRuntimeState
  fragmentId
  state: AtSpawn | Carried | Dropped | Installing | Installed
  carrierPlayerId (opcional)
  worldBindingId / socketId

PlayerRuntimeState
  health, stamina, condition: Normal | Downed | Spectating
  locomotion: Grounded | Airborne | SurfaceSwimming | Gripping |
              ClimbingRope | LedgePullUp | LadderClimb | CarryingFragment |
              CarryingBellows | Downed | Spectating
  traversalBindingId (opcional; usado somente durante Grip/LedgePullUp/Ladder)
  ropeClimbProgressNormalized (opcional; host define enquanto em ClimbingRope)
  activeUtilitySlot: 0..2
  utilitySlots: até 3 itens
  handsState: Free | CarryingFragment | CarryingBellows | BracingRope | ClimbingRope

RopeRuntimeState
  state: Stowed | Thrown | Anchored | Braced | Climbable | Lost
  anchorBindingId, ownerPlayerId, freeEndPlayerId, bracerPlayerId
```

**Estado local e efêmero** nunca é a verdade da partida e não precisa ser replicado: câmera, animação de HUD, fade, partículas, som, tremor, spline visual da corda, interpolação, predição de movimento local e a agulha/abertura visual da Flux Compass. A bússola deriva `expectedFragment` já replicado; não recebe posição de objetivo, caminho, distância ou transform próprio pela rede.

### 19.6 Fluxo de comandos e eventos

Toda ação compartilhada segue o mesmo padrão. O nome exato de RPC depende da biblioteca instalada; a responsabilidade não depende dela.

```text
1. Cliente tenta interagir
2. Cliente envia InteractionRequest { playerId, targetStableId, action, clientSequence }
3. Host valida: fase, distância, linha de visão quando aplicável, mãos, stamina,
   posse, ordem da peça, capacidade e estado do alvo
4. Host executa uma transição atômica de estado
5. Host replica snapshot/delta + StateChanged { transitionVersion, kind }
6. Clientes atualizam objetos, HUD, som e VFX a partir do novo estado
```

Uma transição deve ser idempotente: receber duas vezes o mesmo pedido não pode duplicar item, encaixar duas peças, iniciar dois tsunamis ou criar dois barcos.

#### Fluxo de instalar uma peça

```text
Peça carregada → pedido de instalar → host verifica a peça esperada e o socket
→ host marca a peça Installed e libera o carregador numa única transação
→ host define warningStart e dangerStart usando HostTime
→ máquina mostra estado novo em todos os clientes
→ clientes derivam localmente a próxima direção da Flux Compass a partir de expectedFragment
→ ao chegar dangerStart, host ativa a reação definida
→ ao final da quarta peça, host ejeta Tide Core e habilita extração
```

- A sequência é fixa, conforme este documento: Antenna → Valve → Bellows → Lens. Não implementar ordem livre de peças neste slice.
- O relógio do host é a fonte de verdade. Não usar `Time.time` de cliente, animação terminada ou callback visual para disparar uma reação.
- Efeitos visuais podem atrasar ou interpolar, mas nunca podem atrasar a mudança lógica de estado do host.

#### Fluxo de dano e resgate

```text
Hazard/Item/Rope solicita ação → PlayerState valida → PlayerState atualiza vida,
stamina ou condição → replica → UI/áudio apresentam o resultado
```

O módulo de perigo nunca escreve em campo de vida diretamente. O módulo de item nunca revive alguém silenciosamente. Isso evita regras duplicadas e inconsistentes.

#### Fluxo da corda

```text
Arremessar → host testa superfície contextual válida → fixa anchorBindingId
→ replica endpoints e estado lógico → cliente desenha spline/folga visual
→ agarrar/bracing/escalar são pedidos validados pelo host
→ recuperar, quebra, água ou fim da ilha mudam a corda para Stowed ou Lost
```

Não replicar segmentos físicos, `Rigidbody` por nó, colisões por nó ou forças de corda a cada frame. A aparência pode balançar; a regra de resgate precisa ser estável.

### 19.7 Tutorial implementado como apresentação contextual

O tutorial não deve virar um sistema paralelo, salas de texto ou pop-ups que param o jogo. Ele usa o estado real da run e só apresenta uma instrução curta quando a ação se torna relevante.

| Momento existente | Gatilho autoritativo | Apresentação local permitida |
|---|---|---|
| Laboratório começa | `LabIdle` | movimento/olhar, sem painel bloqueador |
| ácido e sirene começam | `LabIncident` | seta/faixa de perigo e mensagem curta de evacuação |
| dock abre | `LabEvacuate` | prompt contextual para a saída visível |
| primeira peça visível | `BeachExplore` + proximidade | prompt de pegar/carregar, sem quest log |
| chegada à Praia / peça instalada | `BeachExplore` ou mudança de `expectedFragment` | Flux Compass sobe brevemente e aponta para o próximo marco amplo |
| primeira instalação | `BeachWarning` | Tide Core `○ ○ ○ ○` e aviso visual da máquina |
| primeira água perigosa | volume de água + proximidade | indicador de stamina/afogamento, sem tutorial separado |
| corda/boia/medkit/guarda-chuva | primeira coleta ou uso possível | dica de uma linha perto do item |

O `Tutorial` pode guardar apenas quais dicas locais já foram vistas pelo jogador. Ele não altera o estado da run e não espera cada participante fechar uma mensagem para a partida continuar.

### 19.8 Layout recomendado de pastas

Adaptar ao nome-raiz já existente no projeto; não duplicar um segundo projeto dentro de `Assets`. Se não houver convenção, usar esta estrutura:

```text
Assets/
  RunawayReaction/
    Runtime/
      Bootstrap/
      Networking/
      Session/
      Flow/
      Laboratory/
      Beach/
        Objectives/
        Machine/
        Hazards/
        World/
        Extraction/
      Player/
      Items/
      Rope/
      Tutorial/
      Presentation/
        UI/
        Audio/
        VFX/
      Shared/
    Editor/
    Tests/
      EditMode/
      PlayMode/
    Content/
      Scenes/
        00_Bootstrap.unity
        10_Laboratory.unity
        20_Beach.unity
      Prefabs/
        Characters/
        Interactables/
        Items/
        Machine/
        World/
        UI/
      Data/
        Definitions/
        SceneBindings/
        Audio/
        Materials/
      Art/
        Models/
        Textures/
        Materials/
        VFX/
      Audio/
    ThirdParty/
      <SourceName>/
      third_party_assets.md
```

Regras de organização:

- Arquivos de regras não podem ficar junto de prefabs só porque usam o mesmo nome.
- Prefab de visual não contém a regra autoritativa inteira; ele recebe/adapta estado.
- Não usar pasta `Resources` como banco de dados global. Referências vêm de assets de definição/catálogos explícitos.
- `ThirdParty` contém originais intocados e licenças. Variantes feitas para o jogo vivem em `Content/`.
- Todo objeto de cena que recebe estado de rede ganha um ID estável serializado; não localizar objetos por nome, tag genérica ou `FindObjectOfType`.

### 19.9 Ordem de implementação e testes

Não polir arte antes de provar o fluxo em rede. Não testar seis jogadores antes de o fluxo de dois estar estável.

1. **Auditoria e contrato:** identificar versão Unity, biblioteca de rede, cenas existentes, dependências e placeholders. Criar o relatório sem alterar nada.
2. **Bootstrap + cenas:** host cria/entra sessão, Laboratório carrega para dois clientes, host move todos para Praia e cada jogador recebe spawn correto.
3. **Movement Lab:** host + um cliente provam motor, stamina, água, grip, corda, low-ledged pull-up, Bellows e apresentação de braços; simplificar falhas antes de tocar a Praia.
4. **Fluxo do Laboratório:** incidente → sirene → dock → transição. Sem risco de morte e sem sistemas extras.
5. **Fluxo seco da Praia:** quatro peças, duas mãos, Bellows a dois, máquina, Tide Core e barco; sem perigo visual complexo ainda.
6. **Máquina e linha do tempo:** warning/danger comandados por HostTime; testar instalação duplicada, cliente atrasado e repetição de pedido.
7. **Player state:** stamina, vida, caído, revive, mãos ocupadas e estados aprovados de locomoção; testar host e cliente em cada condição.
8. **Mundo controlado:** tempestade, maré alta, maré baixa, tsunami, estados de hotel/cabana/barco e rotas sem soft-lock.
9. **Itens:** inventário de três slots, queda do item ativo ao carregar peça, boia, medkit e guarda-chuva.
10. **Corda:** só depois de o resgate/água existir; testar âncora, brace, escalada, recuperação, perda e impossibilidade de ponte/atalho.
11. **HUD, áudio e arte:** apenas refletem estados já confiáveis. Substituir placeholders um a um conforme a política da seção 4.
12. **Escala:** testar 2 jogadores, depois 4, depois 6. Em cada estágio registrar CPU, GC, tráfego, correções visuais e qualquer divergência.

### 19.10 Testes mínimos por camada

| Camada | Teste antes de avançar |
|---|---|
| Regras puras | sequência de peças, validação de instalação, transições de fase e inventário têm testes de EditMode sem cena/navegação de rede |
| Cena/rede | host + um cliente veem a mesma cena, fase, peça e estado da máquina |
| Locomoção | host e cliente concordam sobre Grounded/Airborne/Swimming/Gripping/Rope/Ledge/Ladder; não há câmera presa, clip de malha, queda de estado ou escalada livre fora de superfície autorizada |
| Player | queda de item ativo, bloqueio dos outros slots, stamina zerada, revive e Bellows a dois funcionam para host e cliente |
| Reações | cada reação dispara uma vez, na ordem certa, pelo relógio do host; cliente não pode adiantá-la |
| Mundo | água/tsunami, variantes do barco e destruição controlada mantêm a rota crítica válida |
| Corda | cliente não pode prender onde não deve, criar ponte, duplicar ponta ou manter a corda após perdê-la |
| Extração | uma única Tide Core, um único estado de barco, conclusão uma vez mesmo com pedidos duplicados |
| Escala | 2 → 4 → 6 jogadores sem soft-lock, item duplicado, estado de água divergente ou queda severa de desempenho |

### 19.11 Padrões proibidos

- Cliente escrever qualquer estado de gameplay compartilhado ou confiar no próprio relógio para progressão.
- Um único `GameManager`/`BeachManager` com input, dano, inventário, máquina, UI, áudio e rede.
- UI chamar diretamente lógica de gameplay; UI emite intenção e só exibe estado validado.
- `FindObjectOfType`, nomes de GameObject, tags genéricas ou referências de cena frágeis como forma de localizar objetivos de rede.
- `ScriptableObject` mutável como estado de partida.
- `Update()` em múltiplos objetos para contar o mesmo timer de reação; timers globais pertencem a `RunFlow`/`BeachFlow` no host.
- `UnityEngine.Random` local para decidir perigo, fragmento, dano ou destruição compartilhada.
- Root motion, evento de Animator ou pose de mão como fonte de posição, stamina, dano, sucesso de revive ou transição de movimento compartilhada.
- Escalada livre em qualquer parede, árvore, pedra, fachada ou malha de terreno; usar somente `TraversalSurfaceDefinition`, corda e rotas explicitamente construídas.
- Rigidbody/ragdoll livre como controlador normal de personagem.
- Replicar água, tsunami, corda ou destroços como dezenas de `Rigidbody` físicos por frame.
- Corda com física livre, nós, enrolamento, colisão arbitrária, ponte horizontal ou sincronização por segmento.
- `MeshCollider` dinâmico, fratura procedural ou destruição que possa fechar rota crítica.
- `DontDestroyOnLoad` para jogador, fragmento, item, perigo, máquina ou objetos da ilha.
- Adicionar persistent save, matchmaking, host migration, inventário em grade, mochila funcional, voz, Village, Jungle ou Volcano durante este vertical slice.

### 19.12 Critério de pronto técnico

O slice está pronto para receber polimento quando, em dois clientes conectados ao host:

- Laboratório → Praia ocorre uma vez e deixa todos no mesmo estado de fase;
- as quatro peças só podem ser instaladas na sequência definida;
- cada reação ocorre uma vez, na janela do host, e todos veem o mesmo mundo lógico;
- itens, mãos ocupadas, corda, revive e extração sobrevivem a pedidos duplicados ou a latência moderada sem duplicar estado;
- não há rota crítica dependente de prop físico, item opcional ou cliente específico;
- o host é a única fonte de verdade, enquanto os clientes continuam responsivos e visualmente suaves.

End of master handoff.
