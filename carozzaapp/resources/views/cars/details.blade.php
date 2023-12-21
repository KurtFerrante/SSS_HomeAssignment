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
                      <label for="first_name" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">Camry</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">2010</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">joe@carozza.com</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">Toyota Motor Corp</p>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="#" class="btn btn-info">Edit</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                          <a href="index.html" class="btn btn-outline-secondary">Cancel</a>
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