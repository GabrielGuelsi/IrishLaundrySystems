from pathlib import Path

from PIL import Image, ImageDraw


root = Path(r"C:\laragon\www\tmp\read_beach_bible\rendered")
files = sorted(root.glob("page-*.png"))

for group_index, group in enumerate((files[:7], files[7:]), start=1):
    source_images = [Image.open(path).convert("RGB") for path in group]
    width = max(image.width for image in source_images) // 3
    height = max(image.height for image in source_images) // 3
    thumbnails = [image.resize((width, height)) for image in source_images]
    rows = (len(thumbnails) + 1) // 2
    sheet = Image.new("RGB", (width * 2 + 36, rows * (height + 40) + 12), "white")
    draw = ImageDraw.Draw(sheet)

    for index, image in enumerate(thumbnails):
        x = (index % 2) * (width + 24) + 12
        y = (index // 2) * (height + 40) + 28
        draw.text((x, y - 20), f"Page {group[index].stem[-2:]}", fill="black")
        sheet.paste(image, (x, y))

    sheet.save(root / f"contact-{group_index}.png")
