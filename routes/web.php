<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Typical Naming Conventions:
// - index() - show all listings
// - show() - show single listing
// - create() - show form to create new listing 
// - store() - save new listing
// - edit() - show form to edit listing
// - update() - save edited listing
// - destroy() - delete listing

// All listings
Route::get('/', [ListingController::class, 'index']);

// Use route model binding -> Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
