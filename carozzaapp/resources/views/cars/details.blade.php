@extends('layouts.main')

@section('details')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Car Details</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="model" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $showCar->model }}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="year" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $showCar->year }}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $showCar->salesperson_email }}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="manufacturer" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $showCar->manufacturer->name }}</p>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="#" class="btn btn-info">Edit</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                          <a href="{{route('cars.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection