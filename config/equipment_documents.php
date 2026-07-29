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

        // Range-wide washer brochures — shown on every commercial washer that
        // doesn't define its own Brochures (wn6, wh6-cv, wh6-lac, wh6-lag, …).
        'commercial-washers' => [
            'Brochures' => [
                ['label' => 'Line 6000 Washers & Dryers — Brochure', 'url' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'],
                ['label' => 'Line 6000 High-Spin Washers & Heat-Pump Dryers — Leaflet', 'url' => '/pdfs/EPR_leaflet_Line 6000 HS Washers and HP Dryers_ENG_LR_web.pdf'],
            ],
        ],

        // Range-wide drying-cabinet leaflet — shown on every drying cabinet
        // (range cards + heat-pump variants) that has no product-specific docs.
        'drying-cabinets' => [
            'Brochures' => [
                ['label' => 'Line 6000 Drying Cabinets — Leaflet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CLFL/EPR-Drying%20Cabinets%20Leaflet-20250710-EN.pdf'],
            ],
        ],

        'tumble-dryers' => [
            'Brochures' => [
                ['label' => 'Line 6000 Tumble Dryers — Brochure', 'url' => '/pdfs/EPR-Line6000-DryersBrochure-01072025_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'CompassPro Dryers — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Dryers%20instructions_LR.pdf'],
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

        'semi-professional' => [
            'Brochures' => [
                ['label' => 'myPRO Range — Brochure', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/BRO/EPR_myPRO-RANGE-BROCHURE_A4-one%20page%20view_03072026_EN.pdf?version=1785321574'],
            ],
        ],

        // Finishing equipment — declare the document types so the CAD Drawings and
        // Data Sheet sections appear on every finishing product ("available on request"
        // until files are attached here, or per-product under 'products').
        'finishing-equipment' => [
            'CAD Drawings' => [],
            'Data Sheet'   => [],
        ],

    ],

    'products' => [

        // ── Semi-professional / myPRO Edge ──
        'we170p' => [
            'CAD Drawings' => [
                ['label' => 'WE170P — CAD Drawing (DWG)', 'url' => '/pdfs/WE170P.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'myPRO Washer WE170P / WE170V — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_myPRO_Washer_WE170P-V_EN.pdf?version=1785320161'],
            ],
            'Energy Label' => [
                ['label' => 'WE170P — Energy Label (914535315)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170P_914535315_20210223110418865.pdf?version=1785320161'],
                ['label' => 'WE170P — Energy Label (914535316)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170P_914535316_20210223110418865.pdf?version=1785320161'],
                ['label' => 'WE170P — Energy Label (914535317)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170P_914535317_20210223110418865.pdf?version=1785320161'],
                ['label' => 'WE170P — Energy Label (914535318)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170P_914535318_20210223110418865.pdf?version=1785320161'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO Washers — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-myPRO%20Wahers%20wall%20instructions_50x70_EN.pdf?version=1785320161'],
            ],
            'BIM/Revit' => [
                ['label' => 'WE170P — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1L0A44_WE170P_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WE170P — Operating Manual (PNC 914535305)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_132900975_PNC%20914535305_EN.pdf?version=1785320161'],
                ['label' => 'WE170P — Operating Manual (PNC 914535307)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_132897227_PNC%20914535307_EN.pdf?version=1785320161'],
                ['label' => 'WE170P — Operating Manual (PNC 914535312)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_157016025_PNC%20914535312_EN.pdf?version=1785320161'],
                ['label' => 'WE170P — Operating Manual (PNC 914535315)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_157037151_PNC%20914535315_EN.pdf?version=1785320161'],
                ['label' => 'WE170P — Operating Manual (PNC 914535316)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_157034071_PNC%20914535316_EN.pdf?version=1785320161'],
                ['label' => 'WE170P — Operating Manual (PNC 914535317)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_157037161_PNC%20914535317_EN.pdf?version=1785320161'],
                ['label' => 'WE170P — Operating Manual (PNC 914535318)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170P_157037211_PNC%20914535318_EN.pdf?version=1785320161'],
                ['label' => 'WE170V / WE170P / TE1120 — Pedestal Installation Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IS_132902910_WE170V_WE170P_TE1120_Pedestal_EN.pdf?version=1785320161'],
            ],
        ],

        'we170v' => [
            'CAD Drawings' => [
                ['label' => 'WE170V — CAD Drawing (DWG)', 'url' => '/pdfs/WE170V.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'myPRO Washer WE170P / WE170V — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_myPRO_Washer_WE170P-V_EN.pdf?version=1785321361'],
            ],
            'Energy Label' => [
                ['label' => 'WE170V — Energy Label (914535413)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170V_914535413_20210223110418865.pdf?version=1785321361'],
                ['label' => 'WE170V — Energy Label (914535415)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170V_914535415_20210223110418865.pdf?version=1785321361'],
                ['label' => 'WE170V — Energy Label (914535416)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_EPRELNL_WE170V_914535416_20210223110418865.pdf?version=1785321361'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO Washers — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-myPRO%20Wahers%20wall%20instructions_50x70_EN.pdf?version=1785321361'],
            ],
            'BIM/Revit' => [
                ['label' => 'WE170V — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1L0A45_WE170V_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WE170V — Operating Manual (PNC 914535410)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170V_157016005_PNC%20914535410_EN.pdf?version=1785321361'],
                ['label' => 'WE170V — Operating Manual (PNC 914535413)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170V_157037181_PNC%20914535413_EN.pdf?version=1785321361'],
                ['label' => 'WE170V — Operating Manual (PNC 914535414)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170V_157037171_PNC%20914535414_EN.pdf?version=1785321361'],
                ['label' => 'WE170V — Operating Manual (PNC 914535416)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE170V_157037321_PNC%20914535416_EN.pdf?version=1785321361'],
                ['label' => 'WE170V Marine — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_132899290_WE170V%20Marine_EN.pdf?version=1785321361'],
                ['label' => 'WE170V / WE170P / TE1120 — Pedestal Installation Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IS_132902910_WE170V_WE170P_TE1120_Pedestal_EN.pdf?version=1785321361'],
            ],
        ],

        'td2-8' => [
            'Data Sheet' => [
                ['label' => 'TD2-8 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD2-8_438946004_EN.pdf?version=1785321574'],
            ],
            'User Manuals' => [
                ['label' => 'TD2-8 — Operating Manual (PNC 916900927)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-8_136233120-A_PNC%20916900927_EN.pdf?version=1785321574'],
                ['label' => 'TD2-8 — Operating Manual (PNC 916900928)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-8_136233130-A_PNC%20916900928_EN.pdf?version=1785321574'],
                ['label' => 'TD2-8 — Operating Manual (PNC 916900929)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-8_136233180-A_PNC%20916900929_EN.pdf?version=1785321574'],
                ['label' => 'TD2-8 — Operating Manual (PNC 916900930)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-8_136233200-A_PNC%20916900930_EN.pdf?version=1785321574'],
            ],
        ],

        'is1103' => [
            'Brochures' => [
                ['label' => 'myPRO Steam Ironers — Leaflet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CLFL/myPRO%20leaflet-Steam%20Ironers_Electrolux%20Pro_LR.pdf?version=1785322102'],
                ['label' => 'myPRO Essentia Card', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/CLF/CLF_CLF-9JE00183_1_5_1_3_EPR_Essentia_Card_myPRO_ENG_2020-LR.pdf?version=1785322102'],
            ],
            'CAD Drawings' => [
                ['label' => 'IS1103 — CAD Drawing (DWG)', 'url' => '/pdfs/IS1103.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'myPRO Fixed Ironer IS1103 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_myPRO_Fixed%20ironer_IS1103_EN.pdf?version=1785322102'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-myPRO_wall%20instructions_50x70_EN.pdf?version=1785322102'],
            ],
            'BIM/Revit' => [
                ['label' => 'IS1103 — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1LSN0M_IS1103_E.rfa'],
            ],
        ],

        'is185' => [
            'Brochures' => [
                ['label' => 'myPRO Steam Ironers — Leaflet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CLFL/myPRO%20leaflet-Steam%20Ironers_Electrolux%20Pro_LR.pdf?version=1785322190'],
                ['label' => 'myPRO Essentia Card', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/CLF/CLF_CLF-9JE00183_1_5_1_3_EPR_Essentia_Card_myPRO_ENG_2020-LR.pdf?version=1785322190'],
            ],
            'CAD Drawings' => [
                ['label' => 'IS185 — CAD Drawing (DWG)', 'url' => '/pdfs/IS185.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'myPRO Foldable Ironer IS185 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_myPRO_Foldable%20ironer_IS185_EN.pdf?version=1785322190'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-myPRO_wall%20instructions_50x70_EN.pdf?version=1785322190'],
            ],
            'BIM/Revit' => [
                ['label' => 'IS185 — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1LSMZ3_IS185_E.rfa'],
            ],
        ],

        'td2-9hp' => [
            'Data Sheet' => [
                ['label' => 'TD2-9HP — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD2-9HP_438946000_EN.pdf?version=1785321666'],
            ],
            'User Manuals' => [
                ['label' => 'TD2-9HP — Operating Manual (PNC 916900932)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-9HP_136233320-A_PNC%20916900932_EN.pdf?version=1785321666'],
                ['label' => 'TD2-9HP — Operating Manual (PNC 916900933)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-9HP_136233330-A_PNC%20916900933_EN.pdf?version=1785321666'],
                ['label' => 'TD2-9HP — Operating Manual (PNC 916900934)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-9HP_136233440-A_PNC%20916900934_EN.pdf?version=1785321666'],
                ['label' => 'TD2-9HP — Operating Manual (PNC 916900936)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD2-9HP_136233460-A_PNC%20916900936_EN.pdf?version=1785321666'],
            ],
        ],

        'te1120hp' => [
            'CAD Drawings' => [
                ['label' => 'TE1120HP — CAD Drawing (DWG)', 'url' => '/pdfs/1LSN49_TE1120HP.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'myPRO Heat Pump Dryer TE1120HP — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/myPRO%20heat%20pump%20dryer%20TE1120HP_EN.pdf?version=1785321029'],
            ],
            'Energy Label' => [
                ['label' => 'TE1120HP — Energy Label (PNC 916099831)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120HP_PNC%20916099831_NEL%201.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Energy Label (PNC 916099832)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120HP_PNC%20916099832_NEL%201.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Energy Label (PNC 916900245)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120HP_PNC%20916900245_NEL%201.PDF?version=1785321029'],
                ['label' => 'TE1120HP — Energy Label (PNC 916900384)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120HP_PNC%20916900384_NEL%201.PDF?version=1785321029'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO Dryers — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-wall%20instruction%20MYPRO%20Dryer-50x70_29012025_EN.pdf?version=1785321029'],
            ],
            'BIM/Revit' => [
                ['label' => 'TE1120HP — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1LSN49_TE1120HP_HP.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TE1120HP — Operating Manual (PNC 916098428)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120HP_136946304_PNC%20916098428_EN.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Operating Manual (PNC 916098429)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120HP_136954603_PNC%20916098429_EN.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Operating Manual (PNC 916098430)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120HP_136954621_PNC%20916098430_EN.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Operating Manual, Propane (PNC 916099802)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120HP_136211230_PNC%20916099802_Propane_EN.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Operating Manual, Propane (PNC 916099831)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120HP_136211740_PNC%20916099831_Propane_EN.pdf?version=1785321029'],
                ['label' => 'TE1120HP — Operating Manual, Propane (PNC 916099832)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120HP_136211200_PNC%20916099832_Propane_EN.pdf?version=1785321029'],
            ],
        ],

        'we2-9' => [
            'Data Sheet' => [
                ['label' => 'WE2-9 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WE2-9_438946002_EN.pdf?version=1785321731'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO Washers — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-myPRO%20Wahers%20wall%20instructions_50x70_EN.pdf?version=1785320161'],
            ],
            'User Manuals' => [
                ['label' => 'WE2-9 — Operating Manual (PNC 914535325)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128034760-A_PNC%20914535325_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535326)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128036940-A_PNC%20914535326_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535327)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128036930-A_PNC%20914535327_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535328)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128034910-A_PNC%20914535328_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535329)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128034950-A_PNC%20914535329_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535330)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128034940-A_PNC%20914535330_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535331)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128034990-A_PNC%20914535331_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535421)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128036900-B_PNC%20914535421_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual (PNC 914535423)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WE2-9_128034930-A_PNC%20914535423_EN.pdf?version=1785321731'],
                ['label' => 'WE2-9 — Operating Manual, EU variant (PNC 914535422)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/914535422_WE2-9_128034920_EU=2=electrolux%202.3%20professional=en-GB.pdf?version=1785321731'],
            ],
        ],

        'te1120' => [
            'CAD Drawings' => [
                ['label' => 'TE1120 — CAD Drawing (DWG)', 'url' => '/pdfs/TE1120.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'myPRO Dryer TE1120 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_myPRO_Dryer_TE1120_EN.pdf?version=1785320709'],
            ],
            'Energy Label' => [
                ['label' => 'TE1120 — Energy Label (916097621)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120_916097621_20190611120917863.pdf?version=1785320709'],
                ['label' => 'TE1120 — Energy Label (916097622)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120_916097622_20190611120937385.pdf?version=1785320709'],
                ['label' => 'TE1120 — Energy Label (916097623)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120_916097623_20190610083136518.pdf?version=1785320709'],
                ['label' => 'TE1120 — Energy Label (916097681)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/ENLA/EnergyLabel_TE1120_916097681_20190613072943653.pdf?version=1785320709'],
            ],
            'Wall Instructions' => [
                ['label' => 'myPRO Dryers — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR-wall%20instruction%20MYPRO%20Dryer-50x70_29012025_EN.pdf?version=1785320709'],
            ],
            'BIM/Revit' => [
                ['label' => 'TE1120 — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_1L0A46_TE1120_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TE1120 — Operating Manual (PNC 916097621)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120_136934724_PNC%20916097621_EN.pdf?version=1785320709'],
                ['label' => 'TE1120 — Operating Manual (PNC 916097622)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120_136934744_PNC%20916097622_EN.pdf?version=1785320709'],
                ['label' => 'TE1120 — Operating Manual (PNC 916097681)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TE1120_136937102_PNC%20916097681_EN.pdf?version=1785320709'],
                ['label' => 'WE170V / WE170P / TE1120 — Pedestal Installation Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IS_132902910_WE170V_WE170P_TE1120_Pedestal_EN.pdf?version=1785320709'],
            ],
        ],

        // ── Finishing equipment ──
        'traditional-form-finishers' => [
            'CAD Drawings' => [
                ['label' => 'FF1 — CAD Drawing (DWG)', 'url' => '/pdfs/FF1.dwg'],
                ['label' => 'FF2 — CAD Drawing (DWG)', 'url' => '/pdfs/FF2.dwg'],
                ['label' => 'FF3 — CAD Drawing (DWG)', 'url' => '/pdfs/FF3.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FF1 / FF2 / FF3 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438918801EN_FF1_FF2_FF3_EN.pdf?version=1781534252'],
            ],
        ],
        'multi-form-finishers' => [
            'CAD Drawings' => [
                ['label' => 'FFM1 — CAD Drawing (DWG)', 'url' => '/pdfs/FFM1.dwg'],
                ['label' => 'FFM2 — CAD Drawing (DWG)', 'url' => '/pdfs/FFM2.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FFM1 / FFM2 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FFM1,%20FFM2_438918911_EN.pdf?version=1781534321'],
            ],
        ],
        'tensioning-form-finishers' => [
            'CAD Drawings' => [
                ['label' => 'FFT6-WC (no boiler) — CAD Drawing (DWG)', 'url' => '/pdfs/1LU41J_FFT6-WC_no_boiler.dwg'],
                ['label' => 'FFT6-WC (with boiler) — CAD Drawing (DWG)', 'url' => '/pdfs/1LU41J_FFT6-WC_with_boiler.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FFT6-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FFT6-WC_438918931AA_EN.pdf?version=1781534397'],
            ],
            'User Manuals' => [
                ['label' => 'FFT6-WC Treviform Touch — User Manual (ENG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/FFT6-WC%20Treviform%20Touch%20ENG%20ed2225-2.pdf?version=1781534397'],
                ['label' => 'TreviTouch — User Manual (4 languages)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/250311%20TreviTouch-4lingue-ELX%20-ver.%207.xx.pdf?version=1781534397'],
                ['label' => 'FFT6-WC Treviform Touch with boiler — User Manual (ENG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/FFT6-WC%20Treviform%20Touch%20ENG%20c-caldaia%20ed2225.pdf?version=1781534397'],
            ],
        ],
        'vacuum-ironing-tables' => [
            'CAD Drawings' => [
                ['label' => 'FIT1 — CAD Drawing (DWG)', 'url' => '/pdfs/FIT1.dwg'],
                ['label' => 'FIT2A — CAD Drawing (DWG)', 'url' => '/pdfs/FIT2A.dwg'],
                ['label' => 'FIT2B — CAD Drawing (DWG)', 'url' => '/pdfs/FIT2B.dwg'],
                ['label' => 'FIT3A — CAD Drawing (DWG)', 'url' => '/pdfs/FIT3A.dwg'],
                ['label' => 'FIT3B — CAD Drawing (DWG)', 'url' => '/pdfs/FIT3B.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FIT1 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438918961_FIT1_EN.pdf?version=1785322796'],
                ['label' => 'FIT2A / FIT2B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FIT2A_FIT2B_438913101_EN.pdf?version=1785322859'],
                ['label' => 'FIT3A / FIT3B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FIT3A,%20FIT3B_438913121_EN.pdf?version=1785322937'],
            ],
            'BIM/Revit' => [
                ['label' => 'FIT1 — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_951009_FIT1_E.rfa'],
            ],
        ],
        'wet-cleaning-ironing-tables' => [
            'CAD Drawings' => [
                ['label' => 'FIT1-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FIT1-WC.dwg'],
                ['label' => 'FIT2-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FIT2-WC.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FIT1-WC / FIT2-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438918981EN_FIT1-WC_FIT2-WC_EN.pdf?version=1781534665'],
            ],
            'BIM/Revit' => [
                ['label' => 'FIT1-WC — BIM / Revit (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_951010_FIT1-WC_S.rfa'],
            ],
        ],
        'vac-blow-steaming-ironing-tables' => [
            'CAD Drawings' => [
                ['label' => 'FIT4A — CAD Drawing (DWG)', 'url' => '/pdfs/FIT4A.dwg'],
                ['label' => 'FIT4B — CAD Drawing (DWG)', 'url' => '/pdfs/FIT4B.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FIT4A / FIT4B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913141EN_FIT4A_FIT4B_EN.pdf?version=1781534779'],
            ],
        ],
        'rectangular-vacuum-ironing-tables' => [
            'CAD Drawings' => [
                ['label' => 'FIT5A — CAD Drawing (DWG)', 'url' => '/pdfs/FIT5A.dwg'],
                ['label' => 'FIT5B — CAD Drawing (DWG)', 'url' => '/pdfs/FIT5B.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FIT5A / FIT5B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913161EN_FIT5A_FIT5B_EN.pdf?version=1785338557'],
            ],
        ],

        'vacuum-blowing-ironing-tables' => [
            'CAD Drawings' => [
                ['label' => 'FIT6A — CAD Drawing (DWG)', 'url' => '/pdfs/FIT6A.dwg'],
                ['label' => 'FIT6B — CAD Drawing (DWG)', 'url' => '/pdfs/FIT6B.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FIT6A / FIT6B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913181EN_FIT6A_FIT6B_EN.pdf?version=1785338692'],
                ['label' => 'FIT7 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438919593EN_FIT7_EN.pdf?version=1785338730'],
            ],
        ],

        'dry-work-presses-air-operated' => [
            'CAD Drawings' => [
                ['label' => 'FPA1-D — CAD Drawing (DWG)', 'url' => '/pdfs/FPA1-D.dwg'],
                ['label' => 'FPA2-D — CAD Drawing (DWG)', 'url' => '/pdfs/FPA2-D.dwg'],
                ['label' => 'FPA3-D — CAD Drawing (DWG)', 'url' => '/pdfs/FPA3-D.dwg'],
                ['label' => 'FPA4-D — CAD Drawing (DWG)', 'url' => '/pdfs/FPA4-D.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FPA1-D — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FPA1-D_438913201_EN.pdf?version=1785338764'],
                ['label' => 'FPA2-D / FPA3-D / FPA4-D — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913241EN_FPA2-D_FPA3-D_FPA4-D_EN.pdf?version=1785338861'],
            ],
        ],

        'laundry-presses-air-operated' => [
            'CAD Drawings' => [
                ['label' => 'FPA1-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPA1-WC.dwg'],
                ['label' => 'FPA2-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPA2-WC.dwg'],
                ['label' => 'FPA3-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPA3-WC.dwg'],
                ['label' => 'FPA4-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPA4-WC.dwg'],
                ['label' => 'FPA5-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPA5-WC.dwg'],
                ['label' => 'FPA6-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPA6-WC.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FPA1-WC / FPA2-WC / FPA3-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FPA1-WC_FPA2-WC_FPA3-WC_438913221_EN.pdf?version=1785339033'],
                ['label' => 'FPA4-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913261EN_FPA4-WC_EN.pdf?version=1785339153'],
                ['label' => 'FPA5-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913281EN_FPA5-WC_EN.pdf?version=1785339190'],
                ['label' => 'FPA6-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FPA6-WC_438913301_EN.pdf?version=1785339226'],
            ],
        ],

        'trouser-topper-creased-trousers' => [
            'CAD Drawings' => [
                ['label' => 'FTT2 — CAD Drawing (DWG)', 'url' => '/pdfs/FTT2.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FTT2 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913521EN_FTT2_EN.pdf?version=1785339836'],
            ],
        ],

        'trouser-topper' => [
            'CAD Drawings' => [
                ['label' => 'FTT1 — CAD Drawing (DWG)', 'url' => '/pdfs/FTT1.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FTT1 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913501EN_FTT1_EN.pdf?version=1785339800'],
            ],
        ],

        'steam-boilers' => [
            'CAD Drawings' => [
                ['label' => 'FSB18C — CAD Drawing (DWG)', 'url' => '/pdfs/FSB18C.dwg'],
                ['label' => 'FSB18C (951039) — CAD Drawing (DWG)', 'url' => '/pdfs/951039_FSB18C.dwg'],
                ['label' => 'FSB24C — CAD Drawing (DWG)', 'url' => '/pdfs/FSB24C.dwg'],
                ['label' => 'FSB24C (951040) — CAD Drawing (DWG)', 'url' => '/pdfs/951040_FSB24C.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FSB3.3 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FSB3_3_438913381_EN.pdf?version=1785339618'],
                ['label' => 'FSB18C / FSB24C — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913421EN_FSB18C_FSB24C_EN.pdf?version=1785339642'],
            ],
            'BIM/Revit' => [
                ['label' => 'FSB18C — Revit Family (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_951039_FSB18C.rfa'],
                ['label' => 'FSB24C — Revit Family (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_951040_FSB24C.rfa'],
                ['label' => 'FSB24C-E — Revit Family (RFA)', 'url' => '/pdfs/QF_ELECTROLUXPROFESSIONAL_951040_FSB24C_E.rfa'],
            ],
        ],

        'spotting-cabinet' => [
            'CAD Drawings' => [
                ['label' => 'FSU4 — CAD Drawing (DWG)', 'url' => '/pdfs/FSU4.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FSU4 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_FSU4_438913481_EN.pdf?version=1785339587'],
            ],
        ],

        'spotting-tables' => [
            'CAD Drawings' => [
                ['label' => 'FSU1 — CAD Drawing (DWG)', 'url' => '/pdfs/FSU1.dwg'],
                ['label' => 'FSU2 — CAD Drawing (DWG)', 'url' => '/pdfs/FSU2.dwg'],
                ['label' => 'FSU3 — CAD Drawing (DWG)', 'url' => '/pdfs/FSU3.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FSU1 / FSU3 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913461EN_FSU1-FSU3_EN.pdf?version=1785339467'],
                ['label' => 'FSU7 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438919595EN_FSU7_EN.pdf?version=1785339567'],
            ],
        ],

        'rotary-finishing-cabinets' => [
            'CAD Drawings' => [
                ['label' => 'FRC1 — CAD Drawing (DWG)', 'url' => '/pdfs/FRC1.dwg'],
                ['label' => 'FRC2 — CAD Drawing (DWG)', 'url' => '/pdfs/FRC2.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FRC1 / FRC2 / FRC3 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913361EN_FRC1_FRC2_FRC3_EN.pdf?version=1785339381'],
            ],
        ],

        'finishing-cabinets' => [
            'Brochures' => [
                ['label' => 'FC48 — Serenity Cabinet Leaflet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CLFL/EPR_Serenity_Cabinet_leaflet_ENG_LR.pdf?version=1785339323'],
                ['label' => 'Environmental Declaration', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/BRO/EPR_brochure_EnvironmentalDeclaration_ENG-LR.pdf?version=1785339323'],
            ],
            'CAD Drawings' => [
                ['label' => 'FC48 — CAD Drawing (DWG)', 'url' => '/pdfs/FC48.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FC48 — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438900421_FC48_EN.pdf?version=1785339323'],
            ],
            'Wall Instructions' => [
                ['label' => 'FC48 — Installation Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_05306004_FC48_GB.pdf?version=1785339323'],
            ],
        ],

        'laundry-presses-manually-operated' => [
            'CAD Drawings' => [
                ['label' => 'FPM-WC — CAD Drawing (DWG)', 'url' => '/pdfs/FPM-WC.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FPM-WC — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913321EN_FPM-WC_EN.pdf?version=1785339290'],
            ],
        ],

        'dry-work-presses-manually-operated' => [
            'CAD Drawings' => [
                ['label' => 'FPM1-D — CAD Drawing (DWG)', 'url' => '/pdfs/FPM1-D.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FPM1-D / FPM2-D / FPM3-D / FPM4-D — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913341EN_FPM1-D_FPM2-D_FPM3-D_FPM4-D_EN.pdf?version=1785338960'],
            ],
        ],

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

        // WN6 — Line 6000 Normal-Spin Washer (CompassPro) — WN6-8 representative
        'wn6' => [
            'CAD Drawings' => [
                ['label' => 'WN6-8 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNTJ_WN6-8.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WN6-8 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WN6-8_438908941_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'CompassPro Washer Instructions — CARE', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-CARE_LR.pdf'],
                ['label' => 'CompassPro Washer Instructions — COIN', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-COIN_LR.pdf'],
                ['label' => 'CompassPro Washer Instructions — Facility Management', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-FM_LR.pdf'],
                ['label' => 'CompassPro Washer Instructions — Multi-Housing Laundry', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions%20MHL_LR.pdf'],
                ['label' => 'CompassPro Washer Instructions — OPL', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washer%20instructions-OPL_LR.pdf'],
                ['label' => 'CompassPro Washer Instructions — QSR', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20CompassPro%20Washers%20instructions-QSR_LR.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WN6-8 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNTJ_WN6-8_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WN6 — Operating Manual (CompassPro)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WN6-8,%20WN6-9,%20WN6-11,%20WN6-14,%20WN6-20,%20WN6-28,%20WN6-35_Compass%20Pro_438917934_EN.pdf'],
                ['label' => 'WN6 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_WN6-8,%20WN6-9,%20WN6-11,%20WN6-14,%20WN6-20,%20WN6-28,%20WN6-35_438917554_EN.pdf'],
            ],
        ],

        // WH6-CV — ClarusVibe Washer Variants — WH6-14CV representative
        'wh6-cv' => [
            'CAD Drawings' => [
                ['label' => 'WH6-14CV — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSP43_WH6-14CV.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WH6-14CV — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WH6-14CV_438900693_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'ClarusVibe Washer Instructions — Multi-Housing Laundry', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20Line%206000%20ClarusVibe%20Washers-instructions%20MHL_LR.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WH6-14CV — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSP43_WH6-14CV_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WH6-CV — Operating Manual (ClarusVibe)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WH6-7CV,%20WH6-8CV,%20WH6-11CV,%20WH6-14CV,%20WH6-20CV,%20WH6-27CV,%20WH6-33CV_438917840_EN.pdf'],
                ['label' => 'WH6-CV — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_WH6%E2%80%937CV,%20WH6%E2%80%938CV,%20WH6%E2%80%9311CV,%20WH6%E2%80%9314CV,%20WH6%E2%80%9320CV,%20WH6%E2%80%9327CV,%20WH6%E2%80%9333CV_438905970_EN.pdf'],
            ],
        ],

        // WH6-LAC — Lagoon Advanced Care Washer Variants — WH6-6LAC representative
        'wh6-lac' => [
            'Brochures' => [
                ['label' => 'Line 6000 Washers & Dryers — Brochure', 'url' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'],
                ['label' => 'lagoon Advanced Care — Brochure', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/BRO/EPR-LAC-brochure-19022025_EN.pdf'],
            ],
            'Data Sheet' => [
                ['label' => 'lagoon Advanced Care Essential Set (WH6-6 / TD6-7) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_438913911_Lagoon%20concept_Essential%20set%20TD6-7%20and%20WH6-6_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WH6-6LAC — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSN2D_WH6-6LAC_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WH6-6LAC — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WH6-6LAC_438917900_EN.pdf'],
                ['label' => 'WH6-6LAC — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_WH6-6LAC_438917520_EN.pdf'],
            ],
        ],

        // WH6-LAG — Lagoon Washer Variant (ClarusVibe) — WH6-14LAG representative
        'wh6-lag' => [
            'Brochures' => [
                ['label' => 'Line 6000 Washers & Dryers — Brochure', 'url' => '/pdfs/EPR_Line 6000 Washers and Dryers brochure-01072025_EN.pdf'],
                ['label' => 'lagoon Advanced Care — Brochure', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/BRO/EPR-LAC-brochure-19022025_EN.pdf'],
            ],
            'CAD Drawings' => [
                ['label' => 'WH6-14LAG — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNX9_WH6-14LAG.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'lagoon Advanced Care (WH6-14 / TD6-14) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_438913913_Lagoon%20concept_TD6-14%20and%20WH6-14_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WH6-14LAG — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNX9_WH6-14LAG_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WH6-14LAG — Operating Manual (ClarusVibe)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WH6-14LAG_Clarus%20Vibe_438921390_EN.pdf'],
                ['label' => 'WH6-14LAG — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_WH6-14LAG_Clarus%20Vibe_438917670_EN.pdf'],
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

        // ── Drying cabinets — standard DC6 (heat-pump variants still inherit the range leaflet) ──

        'dc6-4' => [
            'CAD Drawings' => [
                ['label' => 'DC6-4 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNY5_DC6-4.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'DC6-4 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_DC6-4_438900491_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'DC6-4 — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20instructions%20DC6-4_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'DC6-4 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNY5_DC6-4_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'DC6-4 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_DC6-4_427001178_EN.pdf'],
                ['label' => 'DC6-4 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_DC6-4_427001179_EN.pdf'],
            ],
        ],

        'dc6-8' => [
            'CAD Drawings' => [
                ['label' => 'DC6-8 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNY6_DC6-8.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'DC6-8 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_DC6-8_438900492_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'DC6-8 — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20instructions%20DC6-8_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'DC6-8 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNY6_DC6-8_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'DC6-8 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_DC6-8_427001185_EN.pdf'],
                ['label' => 'DC6-8 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_DC6-8_427001186_EN.pdf'],
            ],
        ],

        'dc6-14' => [
            'CAD Drawings' => [
                ['label' => 'DC6-14 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNY8_DC6-14.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'DC6-14 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_DC6-14_438900494_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'DC6-14 — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20instructions%20DC6-14_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'DC6-14 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNY8_DC6-14_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'DC6-14 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_DC6-14_427001193_EN.pdf'],
                ['label' => 'DC6-14 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_DC6-14_427001194_EN.pdf'],
            ],
        ],

        // ── Drying cabinets — heat-pump ──

        'dc6-14hp' => [
            'CAD Drawings' => [
                ['label' => 'DC6-14HP — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSP2X_DC6-14HP.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'DC6-14HP — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_DC6-14HP_438900498_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'DC6-14HP — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/EPR%20instructions%20DC6-14HP_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'DC6-14HP — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSP2X_DC6-14HP_HP.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'DC6-14HP — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_427001216EN_DC6-14HP_EN.pdf'],
                ['label' => 'DC6-14HP — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_DC6-14HP_427001217_EN.pdf'],
            ],
        ],

        // ── Tumble dryers — Line 6000 CompassPro (TD6 series) ──

        'td6-6' => [
            'CAD Drawings' => [
                ['label' => 'TD6-6 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSN2X_TD6-6.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'TD6-6 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-6_438913950_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'TD6-6 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSN2X_TD6-6_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-6 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-6_438917880_EN.pdf'],
                ['label' => 'TD6-6 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-6_438907500_EN.pdf'],
            ],
        ],

        'td6-11' => [
            'CAD Drawings' => [
                ['label' => 'TD6-11 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSPHP_TD6-11_HP.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'TD6-11 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-11_438918154_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'TD6-11 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSPHP_TD6-11_HP.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-11 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-11_438921530_EN.pdf'],
                ['label' => 'TD6-11 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-11_438917660_EN.pdf'],
            ],
        ],

        'td6-14' => [
            'CAD Drawings' => [
                ['label' => 'TD6-14 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/TD6-14%20IS.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'TD6-14 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-14_471151360_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'TD6-14 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1L059Y_TD6-14_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-14 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-14_438909980_EN.pdf'],
                ['label' => 'TD6-14 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-14_438905900_EN.pdf'],
            ],
        ],

        'td6-16' => [
            'CAD Drawings' => [
                ['label' => 'TD6-16 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNSR_TD6-16.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'TD6-16 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-16_438908654_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'TD6-16 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNSR_TD6-16_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-16 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-16_438917946_EN.pdf'],
                ['label' => 'TD6-16 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-16_438917566_EN.pdf'],
            ],
        ],

        'td6-30' => [
            'CAD Drawings' => [
                ['label' => 'TD6-30 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNSS_TD6-30.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'TD6-30 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-30_438908655_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'TD6-30 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNSS_TD6-30_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-30 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-30_438917950_EN.pdf'],
                ['label' => 'TD6-30 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-30_438917570_EN.pdf'],
            ],
        ],

        'td6-45' => [
            'CAD Drawings' => [
                ['label' => 'TD6-45 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSPHM_TD6-45_S.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'TD6-45 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-45_438918180_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'TD6-45 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSPHM_TD6-45_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-45 / TD6-45SLD — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-45,%20TD6-45SLD,%20TD6-60,%20TD6-60SLD_438917993_EN.pdf'],
                ['label' => 'TD6-45 / TD6-45SLD — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-45,%20TD6-45SLD,%20TD6-60,%20TD6-60SLD_438917603_EN.pdf'],
            ],
        ],

        'td6-45sld' => [
            'Data Sheet' => [
                ['label' => 'TD6-45 series — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_TD6-45_438918180_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-45SLD — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-45,%20TD6-45SLD,%20TD6-60,%20TD6-60SLD_438917993_EN.pdf'],
                ['label' => 'TD6-45SLD — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-45,%20TD6-45SLD,%20TD6-60,%20TD6-60SLD_438917603_EN.pdf'],
            ],
        ],

        // ── Drying cabinets — heat-pump DC7 ──

        'dc7-4hp' => [
            'Data Sheet' => [
                ['label' => 'DC7-4HP — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_DC7-4HP_438900496A_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'DC7-4HP — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_DC7-4HP_427001219A_EN.pdf'],
                ['label' => 'DC7-4HP — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_DC7-4HP_427001220A_EN.pdf'],
            ],
        ],

        'dc7-4hph' => [
            'Data Sheet' => [
                ['label' => 'DC7-4HP series — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_DC7-4HP_438900496A_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'DC7-4HPh — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_DC7-4HP_h_427001222A_EN.pdf'],
                ['label' => 'DC7-4HPh — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_DC7-4HP_h_427001223A_EN.pdf'],
            ],
        ],

        // ── Barrier washers — Line 6000 (WB6 series) ──

        'wb6-13' => [
            'CAD Drawings' => [
                ['label' => 'WB6-13 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LT614_WB6-13.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WB6-13 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WB6-13_438918184_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WB6-13 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LT614_WB6-13_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WB6-13 / WB6-18 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_WB6-13,%20WB6-18_438917990_EN.pdf'],
                ['label' => 'WB6-13 / WB6-18 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_WB6-13,%20WB6-18_438917594_EN.pdf'],
            ],
        ],

        'wb6-20' => [
            'CAD Drawings' => [
                ['label' => 'WB6-20 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/WB6-20.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WB6-20 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WB6-20_438913959_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'WB6-20 / 27 / 35 — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/Poster_WB6%20-20-27-35%20GB.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WB6-20 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSN7S_WB6-20_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WB6-20 / 27 / 35 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_01201266_WB6-20-27-35%20GB%20W2127.pdf'],
                ['label' => 'WB6-20 / 27 / 35 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_05201148_WB6%2020-27-35%20GB.pdf'],
            ],
        ],

        'wb6-35' => [
            'CAD Drawings' => [
                ['label' => 'WB6-35 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/WB6-35.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WB6-35 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WB6-35_438913993_EN.pdf'],
            ],
            'Wall Instructions' => [
                ['label' => 'WB6-20 / 27 / 35 — Wall Instructions', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/WI/Poster_WB6%20-20-27-35%20GB.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WB6-35 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSN7U_WB6-35_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WB6-20 / 27 / 35 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_01201266_WB6-20-27-35%20GB%20W2127.pdf'],
                ['label' => 'WB6-20 / 27 / 35 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_05201148_WB6%2020-27-35%20GB.pdf'],
            ],
        ],

        'wb6-110' => [
            'CAD Drawings' => [
                ['label' => 'WB6-110 — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSPP7_WB6-110.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'WB6-110 — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_WB6-110_438913991_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'WB6-110 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSPP7_WB6-110_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'WB6-70 / 90 / 110 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_01201218_WB6%2070-WB6%2090-WB6%20110%20GB%20v2.pdf'],
                ['label' => 'WB6-70 / 90 / 110 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_01201217_WB6%2070-WB6%2090-WB6%20110%20GB.pdf'],
            ],
        ],

        // ── Tumble dryers — PD9C compact ──

        'pd9c' => [
            'CAD Drawings' => [
                ['label' => 'PD9C — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1L07YC_PD9C.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'PD9C — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438919530EN_PD9C_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'PD9C — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_PD9C_438909630_EN.pdf'],
                ['label' => 'PD9C — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_PD9C_438905500_EN.pdf'],
            ],
        ],

        // ── Ironers — Ø 480 mm cylinder (IC6 48xx series) ──

        'cylinder-480mm' => [
            'CAD Drawings' => [
                ['label' => 'IC6-4832 (Ø 480 mm) — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LSNJZ_IC64832FLF.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'IC6-4821 / IC6-4832 (Ø 480 mm) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438900483EN_IC64821-IC64832_FLF_EN.pdf'],
            ],
            'BIM/Revit' => [
                ['label' => 'IC6-4832 — BIM / Revit Family (RFA)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/REV/QF_ELECTROLUXPROFESSIONAL_1LSNJZ_IC64832FLF_E.rfa'],
            ],
            'User Manuals' => [
                ['label' => 'IC6 48xx — Operating Handbook', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM%20IC648xx%20GB.pdf'],
                ['label' => 'IC6 48xx — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_01102059_IC6%2048xx%20GB.pdf'],
            ],
        ],

        // ── Wet cleaning — lagoon Advanced Care ──

        'lagoon-advanced-care' => [
            'Brochures' => [
                ['label' => 'lagoon Advanced Care — Brochure', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/BRO/EPR-LAC-brochure-19022025_EN.pdf'],
                ['label' => 'lagoon Detergents — Leaflet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CLFL/EPR_lagoon%20detergents%20leaflet_17022025_EN.pdf'],
            ],
            'Data Sheet' => [
                ['label' => 'lagoon Advanced Care (WH6-14 / TD6-14) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_438913913_Lagoon%20concept_TD6-14%20and%20WH6-14_EN.pdf'],
                ['label' => 'lagoon Advanced Care (WH6-33 / TD6-37) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913915EN_Lagoon%20concept_WH6-33%20and%20TD6-37_EN.pdf'],
            ],
        ],

        // ── Tumble dryers — Lagoon (TD6-30LAC) & QuickDry ──

        'td6-lac' => [
            'Data Sheet' => [
                ['label' => 'lagoon Advanced Care (WH6-27 / TD6-30) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913914EN_Lagoon%20concept_WH6-27%20and%20TD6-30_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'TD6-30LAC — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_TD6-30LAC_438917954_EN.pdf'],
                ['label' => 'TD6-30 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_TD6-30_438917570_EN.pdf'],
            ],
        ],

        'quickdry-condense' => [
            'Data Sheet' => [
                ['label' => 'QuickDry QDC — Product Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438919466EN_QuickDry_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'QuickDry QDC — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_QuickDry%20QDC_438909600_EN.pdf'],
            ],
        ],

        // ── Ironers — Ø 330 mm cylinder (IC6 33xx series) ──

        'cylinder-330mm' => [
            'CAD Drawings' => [
                ['label' => 'IC6-3316 (Ø 330 mm) — CAD Drawing (DWG)', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CAD/1LT6CA_IC63316.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'IC6-3316 / IC6-3320 (Ø 330 mm) — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PDS_IC63316_IC63320_438918188_EN.pdf'],
            ],
            'User Manuals' => [
                ['label' => 'IC6-3316 / IC6-3320 — Operating Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/OM/OM_01103055_IC63316-IC63320%20GB.pdf'],
                ['label' => 'IC6-3316 / IC6-3320 — Installation Manual', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/IN/IN_01103054_IC63316-IC63320%20GB.pdf'],
            ],
        ],

        // ── Accessories — detergents & consumables ──

        'detergents-consumables' => [
            'Brochures' => [
                ['label' => 'Line 6000 Detergents (Ecolabel) — Leaflet', 'url' => 'https://www.electroluxprofessional.com/gb/wp-content/uploads/2021/11/EPR-Detergents-Ecolabel-Leaflet-GB-Web.pdf'],
                ['label' => 'lagoon Detergents — Leaflet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/CLFL/EPR_lagoon%20detergents%20leaflet_17022025_EN.pdf'],
            ],
        ],

    ],

];
