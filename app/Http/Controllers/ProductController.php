<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products overview
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Display mining and industrial products
     */
    public function miningIndustrial()
    {
        $products = [
            'Mining' => [
                'White Hydrated Lime',
                'Grey Hydrated Lime',
                'Stone Dust (Fiery Mines)',
                'Caustic Soda Flakes',
                'Activated Carbon (6*12, 8*16)',
                'Silica Flour',
                'Sodium Silicate',
            ],
            'Industrial Chemicals' => [
                'Degreaser',
                'Engine Cleaner',
                'Truck Wash',
                'Hand Cleaner',
                'Drain Opener',
                'Caustic Soda',
                'Turpentine',
                'Thinners',
                'Methylated Spirit',
            ],
            'Foundry' => [
                'Fire Clay',
                'Bentonite (Local & Import)',
                'Limestone',
                'Graphite',
                'Blacking',
                'Coal Dust',
                'Ferrosilicon',
                'Waproset',
            ],
            'Fluxing Agents' => [
                'Limestone',
                'Quartz',
                'Magnesite',
            ],
        ];

        return view('products.mining-industrial', compact('products'));
    }

    /**
     * Display agriculture products
     */
    public function agriculture()
    {
        $products = [
            'Agricultural Lime',
            'Chicken Grit',
            'Fertilizer Fillers',
            'Dolomite',
            'Soil Amendments',
        ];

        return view('products.agriculture', compact('products'));
    }

    /**
     * Display Supreme Clean products
     */
    public function supremeClean()
    {
        $products = [
            'Household Chemicals' => [
                'Tissues',
                'Dishwashing Liquid',
                'Toilet Cleaner',
                'Tile Cleaner',
                'Floor Polish',
                'Toilet Dip',
                'Pine Gel',
                'Brooms',
                'Mops',
                'Rakes',
                'Bleach',
                'Thick Bleach',
            ],
            'Industrial Cleaning' => [
                'All Purpose Cleaner',
                'Degreaser',
                'Sanitizer',
            ],
        ];

        return view('products.supreme-clean', compact('products'));
    }

    /**
     * Display full product catalogue
     */
    public function catalogue()
    {
        $categories = [
            'Mining' => [
                'White Hydrated Lime',
                'Grey Hydrated Lime',
                'Stone Dust',
            ],
            'Fillers' => [
                'Talc',
                'Kaolin',
                'Dolomite',
                'Putty Flour',
            ],
            'Agriculture' => [
                'Agricultural Lime',
                'Chicken Grit',
            ],
            'Oxides' => [
                'Black Oxide',
                'Red Oxide',
                'Yellow Oxide',
            ],
            'Foundry' => [
                'Fire Clay',
                'Bentonite',
                'Limestone',
                'Graphite',
                'Blacking',
                'Coal Dust',
                'Sodium Silicate',
            ],
            'Industrial Chemicals' => [
                'Degreaser',
                'Engine Cleaner',
                'Truck Wash',
                'Hand Cleaner',
                'Drain Opener',
                'Caustic Soda',
                'Turpentine',
                'Thinners',
                'Methylated Spirit',
            ],
            'Household Chemicals' => [
                'Tissues',
                'Dishwashing Liquid',
                'Toilet Cleaner',
                'Tile Cleaner',
                'Floor Polish',
                'Pine Gel',
                'Bleach',
                'Thick Bleach',
            ],
            'Raw Materials' => [
                'SLES',
                'Wax',
                'Hardener',
                'Dyes',
                'Perfumes',
                'CDEA',
                'Sulphonic Acid',
                'Dolomite',
                'Oxides',
            ],
        ];

        return view('products.catalogue', compact('categories'));
    }

    /**
     * Download PDF catalogue
     */
    public function downloadCatalogue()
    {
        $file = public_path('downloads/JMK-Trading-Catalogue.pdf');
        
        if (file_exists($file)) {
            return response()->download($file);
        }
        
        return redirect()->back()->with('error', 'Catalogue not available for download at the moment.');
    }

    /**
     * Download product datasheet
     */
    public function downloadDatasheet($product)
    {
        $file = public_path('downloads/datasheets/' . $product . '.pdf');
        
        if (file_exists($file)) {
            return response()->download($file);
        }
        
        return redirect()->back()->with('error', 'Datasheet not available.');
    }
}
