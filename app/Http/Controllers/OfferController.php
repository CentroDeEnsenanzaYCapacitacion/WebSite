<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function showOffer()
    {
        return view('offer.secondary');
    }
}
