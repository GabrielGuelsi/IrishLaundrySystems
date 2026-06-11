<?php

/*
|--------------------------------------------------------------------------
| Equipment documents
|--------------------------------------------------------------------------
| Two levels, merged on the product page (product entries win per type):
|
|   'categories' => [ '<category-slug>' => [ '<Type>' => [ {label,url}, ... ] ] ]
|       Range-wide docs — shown on every product in that category.
|       Use for brochures that cover a whole range (one file, many SKUs).
|
|   'products'   => [ '<product-slug>'  => [ '<Type>' => [ {label,url}, ... ] ] ]
|       Per-product docs — shown only on that product's page. If a product
|       defines a Type, it replaces the category's entry for that Type.
|
| Document Types (must match the product-page accordion):
|   Brochures · CAD Drawings · Data Sheet · Wall Instructions · BIM/Revit · User Manuals
| Any Type with no entry falls back to the "available on request" message.
|
| url may be a local file under public/ (e.g. '/pdfs/x.pdf', '/pdfs/x.dwg')
| or a full external URL. Spaces are encoded automatically when rendered.
*/

return [

    'categories' => [

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

    ],

    'products' => [

        // WS6 — Line 6000 High-Spin Washer
        'ws6' => [
            'Brochures' => [
                ['label' => 'Line 6000 — Environmental Declaration', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/BRO/EPR_brochure_EnvironmentalDeclaration_ENG-LR.pdf?version=1781180087'],
            ],
            'CAD Drawings' => [
                ['label' => 'WS6-8 — CAD Drawing (DWG)', 'url' => '/pdfs/1LSNTB_WS6-8.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WS6-8 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WS6-8_438918010_EN.pdf?version=1781180087'],
            ],
            'Wall Instructions' => [
                ['label' => 'CompassPro Washer Instructions — CARE', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-CARE_LR.pdf?version=1781180087'],
                ['label' => 'CompassPro Washer Instructions — COIN', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-COIN_LR.pdf?version=1781180087'],
                ['label' => 'CompassPro Washer Instructions — Facility Management', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-FM_LR.pdf?version=1781180087'],
                ['label' => 'CompassPro Washer Instructions — Multi-Housing Laundry', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions%20MHL_LR.pdf?version=1781180087'],
                ['label' => 'CompassPro Washer Instructions — OPL', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-OPL_LR.pdf?version=1781180087'],
                ['label' => 'CompassPro Washer Instructions — QSR', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washers%20instructions-QSR_LR.pdf?version=1781180087'],
            ],
            'BIM/Revit' => [
                ['label' => 'WS6-8 — BIM / Revit Family (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1LSNTB_WS6-8.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WS6 — Operating Manual (CompassPro)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WS6-8,%20WS6-9,%20WS6-11,%20WS6-14,%20WS6-20,%20WS6-28,%20WS6-35_Compass%20Pro_438917938_EN.pdf?version=1781180087'],
                ['label' => 'WS6 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_WS6-8,%20WS6-9,%20WS6-11,%20WS6-14,%20WS6-20,%20WS6-28,%20WS6-35_438917558_EN.pdf?version=1781180087'],
            ],
        ],

        // Quickwash QWC
        'quickwash-qwc' => [
            'CAD Drawings' => [
                ['label' => 'QuickWash QWC — CAD Drawing (DWG)', 'url' => '/pdfs/QuickWash QWC.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'QuickWash QWC — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438919460EN_QuickWash%20QWC_EN.pdf?version=1781186423'],
            ],
            'User Manuals' => [
                ['label' => 'QuickWash QWC — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_QuickWash%20QWC_438909610_EN.pdf?version=1781186423'],
                ['label' => 'QuickWash QWC — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_QuickWash%20QWC_438905490_EN.pdf?version=1781186423'],
            ],
        ],

        // W4-Series — Heavy-duty washer-extractors
        'w4-series' => [
            'CAD Drawings' => [
                ['label' => 'W4400H — CAD Drawing (DWG)', 'url' => '/pdfs/W4400H.dwg'],
                ['label' => 'W4850H — CAD Drawing (DWG)', 'url' => '/pdfs/950841_W4850H.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'W4-Series — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_W4400H_438919565_EN.pdf?version=1781186796'],
            ],
            'User Manuals' => [
                ['label' => 'W4-Series — Operating Manual (W4400H · W4600H · W4850H · W41100H)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_438921321EN_W4400H_W4600H_W4850H_W41100H_EN.pdf?version=1781186796'],
                // Installation manual: the URL supplied was identical to the operating manual above (likely a paste error) — add the correct IN_ link here when available.
            ],
        ],

        // PW9C — Professional washer
        'pw9c' => [
            'CAD Drawings' => [
                ['label' => 'PW9C — CAD Drawing (DWG)', 'url' => '/pdfs/PW9C.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'PW9C — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438919529EN_PW9C_EN.pdf?version=1781187430'],
            ],
            'User Manuals' => [
                ['label' => 'PW9C — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_438921490EN_PW9C_EN.pdf?version=1781187430'],
                ['label' => 'PW9C — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_PW9C_438921790_EN.pdf?version=1781187430'],
            ],
        ],

    ],

];
