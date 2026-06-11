<?php

/*
|--------------------------------------------------------------------------
| Equipment documents (per range / category)
|--------------------------------------------------------------------------
| Documents are published per RANGE, not per individual SKU — one brochure
| covers every product in the category. Define them once here and every
| product in that category shows them on its detail page automatically.
|
| Structure:
|   '<category-slug>' => [
|       '<Document Type>' => [
|           ['label' => 'Friendly link text', 'url' => '/pdfs/file.pdf'],
|           ... (a type can hold more than one file) ...
|       ],
|   ]
|
| Document Types rendered on the product page (must match the accordion):
|   Brochures · CAD Drawings · Data Sheet · Wall Instructions · BIM/Revit · User Manuals
| Any type with no entry here falls back to the "available on request" message.
|
| Files live in public/pdfs/ (served directly at /pdfs/...). To add a new
| brochure: drop the PDF in public/pdfs/ and add a line below.
*/

return [

    'tumble-dryers' => [
        'Brochures' => [
            ['label' => 'Line 6000 Tumble Dryers — Brochure', 'url' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
        ],
    ],

    'ironers' => [
        'Brochures' => [
            ['label' => 'Line 6000 Hot Cylinder Ironers — Brochure', 'url' => '/pdfs/EPR-Brochure Line 6000-Hot_Cylinder_Ironers-ENG-2023_LR.pdf'],
        ],
    ],

    'barrier-washers' => [
        'Brochures' => [
            ['label' => 'Line 6000 Evolution Barrier Washers — Brochure', 'url' => '/pdfs/EPR-brochure-Line 6000 Evolution Barrier Washers-20241119-EN.pdf'],
            ['label' => 'Pullman Barrier Washer — Leaflet', 'url' => '/pdfs/EPR-leaflet-pullman-barrier-washer-EN-20230919-LR.pdf'],
        ],
    ],

    // 'washers' => [ 'Brochures' => [...] ],          // add when the washers brochure PDF is supplied
    // 'drying-cabinets' => [ 'Brochures' => [...] ],  // add when the drying-cabinets brochure PDF is supplied

];
