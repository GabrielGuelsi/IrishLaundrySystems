<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Commercial Laundry Engineering Ireland | Service Contracts, Repairs & Parts | ILS',
            'metaDescription' => 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment rental and parts across the Republic of Ireland.',
        ]);
    }

    public function services()
    {
        return view('pages.services', [
            'title' => 'Commercial Laundry Services | Contracts, Repairs & Equipment | ILS',
            'metaDescription' => 'Engineering-led commercial laundry services across Ireland. Service contracts, reactive repairs, equipment rental and parts & aftercare — structured around operational continuity.',
        ]);
    }

    public function serviceContracts()
    {
        return view('pages.service-contracts', [
            'title' => 'Preventive Maintenance Contracts Ireland | Commercial Laundry | ILS',
            'metaDescription' => 'Preventive Maintenance Contracts for commercial laundry — scheduled servicing, preferential call-out support, reporting and aftercare around the equipment already in operation.',
        ]);
    }

    public function rental()
    {
        return view('pages.rental', [
            'title' => 'Commercial Laundry Equipment Rental & Lease Ireland | ILS',
            'metaDescription' => 'Equipment rental and lease options for commercial laundry — managed maintenance included. Flexible terms for healthcare, hospitality and care facilities.',
        ]);
    }

    public function repairs()
    {
        return view('pages.repairs', [
            'title' => 'Commercial Laundry Repairs & Call-outs Ireland | Field Engineers | ILS',
            'metaDescription' => 'Commercial laundry breakdown repairs and call-outs across the Republic of Ireland. Experienced engineers, genuine parts, clear communication.',
        ]);
    }

    public function partsAftercare()
    {
        return view('pages.parts-aftercare', [
            'title' => 'Commercial Laundry Parts & Aftercare Ireland | Genuine Spares & Service | ILS',
            'metaDescription' => 'Genuine parts access, service history context and practical aftercare from Irish Laundry Systems. Authorised Electrolux Professional Partner supporting commercial and industrial laundry sites across Ireland.',
        ]);
    }

    public function sectors()
    {
        return view('pages.sectors', [
            'title' => 'Commercial Laundry Sectors | Healthcare, Hospitality & More | ILS',
            'metaDescription' => 'ILS supports healthcare, hospitality, care facilities and commercial operations with specialist laundry engineering and service.',
        ]);
    }

    public function sectorHealthcare()
    {
        return view('pages.sector-healthcare', [
            'title' => 'Healthcare Laundry Engineering Ireland | Contracts, Repairs & Parts | ILS',
            'metaDescription' => 'Specialist laundry engineering for hospitals, HSE sites and healthcare groups. Service contracts, reactive support and compliance documentation.',
        ]);
    }

    public function sectorHospitality()
    {
        return view('pages.sector-hospitality', [
            'title' => 'Hotel & Hospitality Laundry Support Ireland | ILS',
            'metaDescription' => 'Protect guest operations with engineering-led laundry support. Service contracts and reactive call-outs for hotels, guesthouses and hospitality groups.',
        ]);
    }

    public function sectorCare()
    {
        return view('pages.sector-care', [
            'title' => 'Care Home Laundry Engineering Ireland | ILS',
            'metaDescription' => 'Engineering-led laundry support for care homes, nursing homes and residential facilities. Continuity, safety and confidence for care operators.',
        ]);
    }

    public function sectorCommercial()
    {
        return view('pages.sector-commercial', [
            'title' => 'Commercial & Industrial Laundry Engineering Ireland | ILS',
            'metaDescription' => 'Engineering support for commercial laundries and industrial operations — throughput, lifecycle cost and uptime focus.',
        ]);
    }

    public function equipment()
    {
        return view('pages.equipment', [
            'title' => 'Commercial Laundry Equipment Ireland | Sales & Rental | ILS',
            'metaDescription' => 'Commercial laundry equipment supplied and supported — washers, dryers, barrier washers, ironers and drying cabinets. Engineering-first supply and installation.',
        ]);
    }

    public function equipmentCategory($category)
    {
        if ($category === 'washers') {
            return view('pages.commercial-washers', [
                'title' => 'Commercial Washing Machines | Electrolux Professional Washers | ILS',
            ]);
        }

        if ($category === 'tumble-dryers') {
            return view('pages.dryers', [
                'title' => 'Commercial Tumble Dryers | Electrolux Professional Dryers | ILS',
            ]);
        }

        if ($category === 'ironers') {
            return view('pages.ironers', [
                'title' => 'Commercial Ironers & Flatwork Finishing | Electrolux Professional | ILS',
            ]);
        }

        if ($category === 'finishing-equipment') {
            return view('pages.finishing-equipment', [
                'title' => 'Commercial Finishing Equipment | Ironing Tables, Presses & Steam | ILS',
            ]);
        }

        if ($category === 'drying-cabinets') {
            return view('pages.drying-cabinets', [
                'title' => 'Commercial Drying Cabinets | Electrolux Professional | ILS',
            ]);
        }

        if ($category === 'barrier-washers') {
            return view('pages.barrier-washers', [
                'title' => 'Hygiene Barrier Washers | Electrolux Professional | ILS',
            ]);
        }

        if ($category === 'semi-professional') {
            return view('pages.semi-professional', [
                'title' => 'Semi-Professional Laundry Equipment Ireland | myPRO XL',
            ]);
        }

        if ($category === 'wet-cleaning') {
            return view('pages.wet-cleaning', [
                'title' => 'Wet Cleaning Equipment Ireland | Lagoon Advanced Care | Irish Laundry Systems',
            ]);
        }

        if ($category === 'accessories') {
            return view('pages.accessories', [
                'title' => 'Laundry Dosing Systems Ireland | Detergents & Accessories',
            ]);
        }

        if (! array_key_exists($category, config('equipment'))) {
            abort(404);
        }

        $categoryName = ucwords(str_replace('-', ' ', $category));
        $products = Equipment::where('category', $category)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        return view('pages.equipment-category', [
            'title' => "{$categoryName} Equipment | Commercial Laundry Ireland | ILS",
            'metaDescription' => "Commercial {$categoryName} equipment supplied and supported by ILS — expert installation, service and parts across Ireland.",
            'category' => $categoryName,
            'categorySlug' => $category,
            'products' => $products,
        ]);
    }

    public function equipmentProduct($category, $product)
    {
        $item = Equipment::where('category', $category)
            ->where('slug', $product)
            ->where('is_active', true)
            ->first();

        if (! $item) {
            // No detail page for this slug (e.g. a range/family card with no single SKU).
            // Fall back to the category listing instead of a dead end, but only for a
            // category we actually serve — otherwise it's a genuine 404.
            $servedCategories = ['washers', 'tumble-dryers', 'ironers', 'finishing-equipment', 'drying-cabinets', 'barrier-washers'];

            if (in_array($category, $servedCategories, true) || array_key_exists($category, config('equipment'))) {
                return redirect()->route('equipment.category', $category);
            }

            abort(404);
        }

        $categoryName = ucwords(str_replace('-', ' ', $category));

        return view('pages.equipment-product', [
            'title' => "{$item->name} | {$categoryName} | ILS",
            'metaDescription' => "{$item->name} — commercial laundry equipment supplied, installed and supported by Irish Laundry Systems.",
            'category' => $categoryName,
            'categorySlug' => $category,
            'product' => $item->name,
            'productSlug' => $product,
            'item' => $item,
            'specs' => $item->specs ?? [],
            'summary' => $item->summary,
            'imagePath' => $item->image_url,
            'documents' => array_merge(
                config("equipment_documents.categories.{$category}", []),
                config("equipment_documents.products.{$product}", [])
            ),
        ]);
    }

    public function electrolux()
    {
        return view('pages.electrolux', [
            'title' => 'Electrolux Professional Partner Ireland | Irish Laundry Systems',
            'metaDescription' => 'Irish Laundry Systems is an Authorised Electrolux Professional Partner, bringing Electrolux Professional laundry equipment, Irish engineering support, genuine parts access and aftercare to commercial laundry sites across Ireland.',
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'title' => 'About Irish Laundry Systems | Engineering-Led Since 1987 | ILS',
            'metaDescription' => 'Founded in 1987, ILS is an engineering-led commercial laundry specialist serving the Republic of Ireland. Reliability, responsiveness and expertise.',
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Contact Irish Laundry Systems | Request a Service Assessment | ILS',
            'metaDescription' => 'Contact ILS for service contracts, repairs, equipment or assessments. We cover the Republic of Ireland and aim to respond within 24 hours.',
        ]);
    }

    public function resources()
    {
        return view('pages.resources', [
            'title' => 'Commercial Laundry Resources | Guides & Checklists | ILS',
            'metaDescription' => 'Resources for commercial laundry reliability — guides, maintenance checklists, sector collections and case studies from ILS.',
        ]);
    }

    public function brandProtection()
    {
        return view('pages.brand-protection', [
            'title' => 'Irish Laundry Systems (ILS) — Official Website',
            'metaDescription' => 'This is the official website of Irish Laundry Systems (ILS), the commercial laundry engineering specialists based in Ireland.',
        ]);
    }

    public function requestAssessment()
    {
        return view('pages.request-assessment', [
            'title' => 'Request a Service Assessment | ILS',
            'metaDescription' => 'Request a service assessment from Irish Laundry Systems. Tell us about your operation and we will respond with the next best step.',
        ]);
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}
