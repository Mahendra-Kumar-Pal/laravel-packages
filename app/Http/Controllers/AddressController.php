<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index($locale)
    {
        $addresses=Address::select('city', 'address')->limit(2)->get();
        return view('address', compact('addresses'));
    }
}
