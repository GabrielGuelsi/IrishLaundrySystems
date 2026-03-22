<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Commercial Laundry Engineering Ireland | Service Contracts, Repairs & Parts | ILS',
            'metaDescription' => 'Irish Laundry Systems — specialist commercial laundry engineering since 1987. Service contracts, repairs, equipment rental and parts across the Republic of Ireland.',
        ]);
    }

    public function solutions()
    {
        return view('pages.solutions', [
            'title' => 'Laundry Solutions | Contracts, Repairs & Equipment | ILS',
            'metaDescription' => 'Outcomes-first solutions for critical laundry operations. Service contracts, reactive repairs, equipment supply and rental — all engineered for uptime.',
        ]);
    }

    public function serviceContracts()
    {
        return view('pages.service-contracts', [
            'title' => 'Commercial Laundry Service Contracts Ireland | Preventive Maintenance | ILS',
            'metaDescription' => 'Structured service contracts for commercial laundry — Core, Priority and Assured tiers. Preventive maintenance, compliance support and priority scheduling.',
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
            'title' => 'Commercial Laundry Repairs & Call-outs Ireland | Engineers Nationwide | ILS',
            'metaDescription' => 'Commercial laundry breakdown repairs and call-outs across the Republic of Ireland. Experienced engineers, genuine parts, clear communication.',
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
            'metaDescription' => 'Protect guest operations with reliable laundry engineering. Service contracts and reactive call-outs for hotels, guesthouses and hospitality groups.',
        ]);
    }

    public function sectorCare()
    {
        return view('pages.sector-care', [
            'title' => 'Care Home Laundry Engineering Ireland | ILS',
            'metaDescription' => 'Reliable laundry engineering for care homes, nursing homes and residential facilities. Continuity, safety and confidence for care operators.',
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
                         ->firstOrFail();

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
            'imagePath' => $item->image_path,
        ]);
    }

    public function electrolux()
    {
        return view('pages.electrolux', [
            'title' => 'Authorised Electrolux Professional Partner | ILS Ireland',
            'metaDescription' => 'Irish Laundry Systems is an Authorised Electrolux Professional Partner — genuine parts, trained engineers and manufacturer-backed support.',
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
}
