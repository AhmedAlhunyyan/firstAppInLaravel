<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferControlller extends Controller
{
    public function __construct()
    {
        
    }


    public function getOffers(){
        return Offer::select('name', 'code') -> get();
    }
}
