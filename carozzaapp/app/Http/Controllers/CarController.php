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
        $findCars = new Car();
        $manufacturers = Manufacturer::OrderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.create', compact('manufacturers'));
    }

    public function edit($id){
        $findCars = Car::find($id);
        $manufacturers = Manufacturer::OrderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.edit', compact('manufacturers', 'findCars'));
    }
    
    public function details($id){
        $showCar = Car::find($id);
        return view('cars.details', compact('showCar'));
    }

    public function store(Request $request){
        $request->validate([
            'model' =>'required',
            'year'=>'required',
            'salesperson_email'=>'required|email',
            'manufacturer_id'=>'required|exists:manufacturers,id'
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car model has been added successfully');
    }

    public function update($id, Request $request){
        $request->validate([
            'model' =>'required',
            'year'=>'required',
            'salesperson_email'=>'required|email',
            'manufacturer_id'=>'required|exists:manufacturers,id'
        ]);

        $car = Car::find($id);
        $car->update($request->all());
        return redirect()->route('cars.index')->with('message', 'Car model has been edited successfully');
    }
}
