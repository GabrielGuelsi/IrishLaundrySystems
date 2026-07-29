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
            ],
            'Data Sheet' => [
                ['label' => 'FIT4A / FIT4B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913141EN_FIT4A_FIT4B_EN.pdf?version=1781534779'],
            ],
        ],
        'rectangular-vacuum-ironing-tables' => [
            'CAD Drawings' => [
                ['label' => 'FIT5A — CAD Drawing (DWG)', 'url' => '/pdfs/FIT5A.dwg'],
            ],
            'Data Sheet' => [
                ['label' => 'FIT5A / FIT5B — Data Sheet', 'url' => 'https://tools.electroluxprofessional.com/Mirror/Doc/ELS/PDS/PS_438913161EN_FIT5A_FIT5B_EN.pdf?version=1781536226'],
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

    ],

];
