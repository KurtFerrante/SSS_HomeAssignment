<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufactureController extends Controller
{
    public function index(){
        $manufacturerIndex = Manufacturer::all();
        return view('manufacturers.index', compact('manufacturerIndex'));
    }
}
