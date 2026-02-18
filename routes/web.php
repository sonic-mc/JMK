<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index']);
Route::get('/references', [ReferenceController::class, 'index']);

// Divisions
Route::get('/mining-industrial', [DivisionController::class, 'mining']);
Route::get('/agriculture', [DivisionController::class, 'agriculture']);
Route::get('/supreme-clean', [DivisionController::class, 'supreme']);
Route::get('/technical-services', [DivisionController::class, 'technical']);

// Industries
Route::get('/industries', [IndustryController::class, 'index']);

// Catalogue
Route::get('/catalogue', [CatalogueController::class, 'index']);

// Quote

Route::get('/request-quote', [QuoteController::class, 'index'])->name('quote.request');
Route::post('/request-quote', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/quote-success', [QuoteController::class, 'success'])->name('quote.success');

// Contact
Route::get('/contact', [ContactController::class, 'index']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show']);

// Product Routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/mining-industrial', [ProductController::class, 'miningIndustrial'])->name('products.mining-industrial');
    Route::get('/agriculture', [ProductController::class, 'agriculture'])->name('products.agriculture');
    Route::get('/supreme-clean', [ProductController::class, 'supremeClean'])->name('products.supreme-clean');
    Route::get('/catalogue', [ProductController::class, 'catalogue'])->name('products.catalogue');
    
    // Download routes
    Route::get('/catalogue/download', [ProductController::class, 'downloadCatalogue'])->name('products.catalogue.download');
    Route::get('/datasheet/{product}', [ProductController::class, 'downloadDatasheet'])->name('products.datasheet');
});


// Add these routes to your existing web.php

// Industries Routes
Route::get('/industries', function () {
    return view('industries.index');
})->name('industries.index');

Route::get('/industries/gold-mining', function () {
    return view('industries.gold-mining');
})->name('industries.gold-mining');

Route::get('/industries/platinum-mining', function () {
    return view('industries.platinum-mining');
})->name('industries.platinum-mining');

Route::get('/industries/coal-mining', function () {
    return view('industries.coal-mining');
})->name('industries.coal-mining');

Route::get('/industries/foundries', function () {
    return view('industries.foundries');
})->name('industries.foundries');

Route::get('/industries/agriculture', function () {
    return view('industries.agriculture');
})->name('industries.agriculture');

Route::get('/industries/manufacturing', function () {
    return view('industries.manufacturing');
})->name('industries.manufacturing');

// Legacy routes for backward compatibility
Route::get('/mining-industrial', [ProductController::class, 'miningIndustrial']);
Route::get('/agriculture', [ProductController::class, 'agriculture']);
Route::get('/supreme-clean', [ProductController::class, 'supremeClean']);
Route::get('/catalogue', [ProductController::class, 'catalogue']);