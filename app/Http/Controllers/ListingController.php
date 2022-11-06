<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Get and show all listings
    public function index() {
        // dd(request('tag')); // dd() = die and dump - pass attr to check we can access
        return view('listings.index', [
            // Sort by newest first instead of all() which is a random order
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }
    //Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
