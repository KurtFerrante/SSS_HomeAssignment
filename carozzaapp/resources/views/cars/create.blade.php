@extends('layouts.main')

@section('create')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Car</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="model" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <input type="text" name="model" id="model" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          Please specify model.
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="year" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <input type="text" name="year" id="year" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          Please specify year.
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Salesperson Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          Please specify email.
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="manufactor_id" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <select name="manufactor_id" id="manufactor_id" class="form-control  is-invalid">
                          <option value="">Select Manufacturer</option>
                          <option value="1">Toyota Motor Corp</option>
                          <option value="2">BMW Group</option>
                          <option value="3">Audi AG</option>
                          <option value="4">Honda Motor Group</option>
                        </select>
                        <div class="invalid-feedback">
                          Please specify Manufacturer.
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
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