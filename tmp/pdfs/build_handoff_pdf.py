from __future__ import annotations

from pathlib import Path
import re
import unicodedata

from reportlab.lib.colors import HexColor
from reportlab.lib.pagesizes import A4
from reportlab.pdfbase import pdfmetrics
from reportlab.pdfbase.ttfonts import TTFont
from reportlab.pdfgen import canvas


ROOT = Path(r"C:\laragon\www")
SOURCE = ROOT / "output" / "handoff" / "RUNAWAY_REACTION_CLAUDE_HANDOFF.md"
OUTPUT = ROOT / "output" / "pdf" / "RUNAWAY_REACTION_CLAUDE_HANDOFF_STEP_BY_STEP.pdf"

PAGE_W, PAGE_H = A4
LEFT = 42
RIGHT = 42
TOP = 48
BOTTOM = 42
CONTENT_W = PAGE_W - LEFT - RIGHT
TEXT_SIZE = 7.45
LINE_H = 9.25
TEXT_COLOR = HexColor("#22303A")
MUTED = HexColor("#63727E")
ACCENT = HexColor("#157B8A")
CORAL = HexColor("#D96855")
PAPER = HexColor("#FFFDF7")
CODE_BG = HexColor("#F3F5F2")


def locate_font(name: str) -> Path:
    candidates = [
        Path(r"C:\Windows\Fonts\consola.ttf"),
        Path(r"C:\Windows\Fonts\cour.ttf"),
        Path(r"C:\Windows\Fonts\arial.ttf"),
    ]
    for candidate in candidates:
        if candidate.exists():
            return candidate
    raise FileNotFoundError("No suitable Windows TrueType font was found.")


def normalize_pdf_text(text: str) -> str:
    """Keep copy/paste-safe text while avoiding glyphs absent from common mono fonts."""
    replacements = {
        "\u2011": "-",
        "\u2013": "-",
        "\u2014": " - ",
        "\u2192": "->",
        "\u2190": "<-",
        "\u2193": "v",
        "\u2191": "^",
        "\u2022": "-",
        "\u25cf": "o",
        "\u25cb": "o",
        "\u2264": "<=",
        "\u2265": ">=",
        "\u00d7": "x",
        "\u201c": '"',
        "\u201d": '"',
        "\u2018": "'",
        "\u2019": "'",
    }
    for old, new in replacements.items():
        text = text.replace(old, new)
    # This PDF is intended to be copied into another model. ASCII keeps extraction
    # reliable across common PDF viewers while preserving every design instruction.
    return unicodedata.normalize("NFKD", text).encode("ascii", "ignore").decode("ascii")


def wrap_line(line: str, font: str, size: float, width: float) -> list[str]:
    if not line:
        return [""]
    if pdfmetrics.stringWidth(line, font, size) <= width:
        return [line]

    indent = re.match(r"^\s*", line).group(0)
    continuation = indent + "  "
    words = re.findall(r"\S+|\s+", line)
    out: list[str] = []
    current = ""
    for token in words:
        proposed = current + token
        if current and pdfmetrics.stringWidth(proposed.rstrip(), font, size) > width:
            out.append(current.rstrip())
            current = continuation + token.lstrip()
        else:
            current = proposed
    if current:
        out.append(current.rstrip())
    return out or [""]


class PdfWriter:
    def __init__(self, output: Path):
        self.output = output
        self.c = canvas.Canvas(str(output), pagesize=A4, pageCompression=1)
        self.c.setTitle("Runaway Reaction - Claude Code Handoff")
        self.c.setAuthor("Runaway Reaction project")
        self.page = 0
        self.y = PAGE_H - TOP
        self._new_page()

    def _page_chrome(self):
        self.c.setFillColor(PAPER)
        self.c.rect(0, 0, PAGE_W, PAGE_H, fill=1, stroke=0)
        self.c.setStrokeColor(HexColor("#D9E2DF"))
        self.c.setLineWidth(0.45)
        self.c.line(LEFT, PAGE_H - 28, PAGE_W - RIGHT, PAGE_H - 28)
        self.c.setFillColor(MUTED)
        self.c.setFont("HandoffSans", 7.4)
        self.c.drawString(LEFT, PAGE_H - 20, "RUNAWAY REACTION - CLAUDE CODE HANDOFF")
        self.c.drawRightString(PAGE_W - RIGHT, PAGE_H - 20, f"PAGE {self.page}")
        self.c.line(LEFT, 29, PAGE_W - RIGHT, 29)
        self.c.setFont("HandoffSans", 6.9)
        self.c.drawString(LEFT, 18, "Copy-friendly production handoff - Laboratory + Beach vertical slice")
        self.c.drawRightString(PAGE_W - RIGHT, 18, "Working title only")

    def _new_page(self):
        if self.page:
            self.c.showPage()
        self.page += 1
        self._page_chrome()
        self.y = PAGE_H - TOP

    def ensure(self, height: float):
        if self.y - height < BOTTOM:
            self._new_page()

    def line(self, text: str, *, font="HandoffMono", size=TEXT_SIZE, color=TEXT_COLOR, leading=LINE_H):
        self.ensure(leading)
        self.c.setFillColor(color)
        self.c.setFont(font, size)
        self.c.drawString(LEFT, self.y, text)
        self.y -= leading

    def spacer(self, amount: float):
        self.ensure(amount)
        self.y -= amount

    def heading(self, text: str, level: int):
        sizes = {1: 15.5, 2: 12.2, 3: 10.0, 4: 8.7}
        size = sizes.get(level, 8.7)
        leading = size + 4
        self.ensure(leading + 5)
        self.c.setFillColor(ACCENT if level <= 2 else CORAL)
        self.c.setFont("HandoffSansBold", size)
        self.c.drawString(LEFT, self.y, text)
        self.y -= leading

    def source_line(self, line: str):
        heading_match = re.match(r"^(#{1,4})\s+(.*)$", line)
        if heading_match:
            self.spacer(3)
            self.heading(line, len(heading_match.group(1)))
            return
        font = "HandoffMono"
        size = TEXT_SIZE
        for visual_line in wrap_line(line, font, size, CONTENT_W):
            self.line(visual_line, font=font, size=size)

    def finish(self):
        self.c.save()


def draw_title_and_steps(writer: PdfWriter):
    writer.spacer(48)
    writer.c.setFillColor(ACCENT)
    writer.c.setFont("HandoffSansBold", 27)
    writer.c.drawString(LEFT, writer.y, "RUNAWAY REACTION")
    writer.y -= 35
    writer.c.setFillColor(CORAL)
    writer.c.setFont("HandoffSansBold", 15)
    writer.c.drawString(LEFT, writer.y, "CLAUDE CODE HANDOFF - STEP BY STEP")
    writer.y -= 29
    writer.c.setFillColor(TEXT_COLOR)
    writer.c.setFont("HandoffSans", 10.6)
    subtitle = "Complete, copy-friendly production handoff for the Unity Laboratory + Beach vertical slice."
    writer.c.drawString(LEFT, writer.y, subtitle)
    writer.y -= 24
    writer.c.setFillColor(MUTED)
    writer.c.setFont("HandoffSans", 9.1)
    for line in [
        "Use this file as the source of truth when it conflicts with older PDFs, notes, scenes, or scripts.",
        "Working title only. Do not ask Claude to execute the entire document in one request.",
        "Copy the full source section after this guide if the receiving Claude cannot directly read PDFs.",
    ]:
        writer.c.drawString(LEFT, writer.y, line)
        writer.y -= 14

    writer.spacer(24)
    writer.heading("HOW TO SEND THIS TO CLAUDE", 2)
    steps = [
        ("0", "Send the full handoff first. Ask Claude to read it completely and implement nothing yet."),
        ("1", "Send Prompt 1. Review its audit before authorizing any deletion or replacement."),
        ("1A", "Send Prompt 1A only after the audit is approved. It handles downloaded asset intake safely."),
        ("2", "Send Prompt 2 to establish the safe Laboratory + Beach foundation."),
        ("2A", "Send Prompt 2A next. Prove movement in Movement_Lab with host + client before putting climbing in Beach."),
        ("2B", "Send Prompt 2B for the Beach Readability Pass and Flux Compass. Do not add extra systems."),
        ("3", "Send Prompt 3 for the playable Laboratory onboarding."),
        ("4", "Send Prompt 4 for the dry-to-playable Beach loop; test two players first."),
        ("5", "Send Prompt 5 for rope, buoy, medkit, umbrella, and rescue behavior."),
        ("6", "Send Prompt 6 to replace approved visual placeholders and improve readability."),
        ("7", "Send Prompt 7 for HUD, sound, and the test gate. Scale only after 2-player stability."),
    ]
    for number, instruction in steps:
        writer.ensure(23)
        writer.c.setFillColor(ACCENT)
        writer.c.setFont("HandoffSansBold", 9.4)
        writer.c.drawString(LEFT, writer.y, f"STEP {number}")
        writer.c.setFillColor(TEXT_COLOR)
        writer.c.setFont("HandoffSans", 8.8)
        x = LEFT + 60
        for i, line in enumerate(wrap_line(instruction, "HandoffSans", 8.8, CONTENT_W - 60)):
            writer.c.drawString(x if i == 0 else x, writer.y, line)
            writer.y -= 11.5
        writer.y -= 2

    writer.spacer(12)
    writer.c.setFillColor(CORAL)
    writer.c.setFont("HandoffSansBold", 9.5)
    writer.c.drawString(LEFT, writer.y, "NON-NEGOTIABLE: wait for Claude's report after every step before moving to the next one.")
    writer.y -= 16
    writer.c.setFillColor(MUTED)
    writer.c.setFont("HandoffSans", 8.3)
    writer.c.drawString(LEFT, writer.y, "The complete source begins on the next page. It intentionally includes exact prompts, rules, architecture, assets, and test gates.")
    writer._new_page()


def main():
    if not SOURCE.exists():
        raise FileNotFoundError(f"Missing handoff source: {SOURCE}")
    OUTPUT.parent.mkdir(parents=True, exist_ok=True)

    mono_font = locate_font("HandoffMono")
    sans_font = Path(r"C:\Windows\Fonts\arial.ttf")
    sans_bold = Path(r"C:\Windows\Fonts\arialbd.ttf")
    if not sans_font.exists() or not sans_bold.exists():
        sans_font = mono_font
        sans_bold = mono_font

    pdfmetrics.registerFont(TTFont("HandoffMono", str(mono_font)))
    pdfmetrics.registerFont(TTFont("HandoffSans", str(sans_font)))
    pdfmetrics.registerFont(TTFont("HandoffSansBold", str(sans_bold)))

    source_text = normalize_pdf_text(SOURCE.read_text(encoding="utf-8"))
    writer = PdfWriter(OUTPUT)
    draw_title_and_steps(writer)
    writer.heading("BEGIN FULL HANDOFF - COPY FROM HERE", 1)
    writer.spacer(4)
    for raw_line in source_text.splitlines():
        writer.source_line(raw_line)
    writer.finish()
    print(f"PDF created: {OUTPUT}")
    print(f"Source lines rendered: {len(source_text.splitlines())}")
    print(f"Pages: {writer.page}")


if __name__ == "__main__":
    main()
