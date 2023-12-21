<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index(){
        return view('cars.index');
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
