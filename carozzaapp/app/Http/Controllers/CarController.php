<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index(){
        if (request('manufacturer_id') == null){
            $cars = Car::all();
        }
        else{
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }
        $manufacturers = Manufacturer::OrderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.index', compact('cars', 'manufacturers'));
    }

    public function create(){
        return view('cars.create');
    }

    public function edit($id){
        $editCar = Car::find($id);
        return view('cars.edit', compact('editCar'));
    }
    
    public function details($id){
        $showCar = Car::find($id);
        return view('cars.details', compact('showCar'));
    }
}
