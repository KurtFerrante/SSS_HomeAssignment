@extends('layouts.main')

@section('manufacturers')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Manufacturers</h2>
                    <div class="ml-auto">
                      <a href="form.html" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row"></div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Toyota Motor Corporation</td>
                      <td>HQ, Kyoto District, Tokyo, Japan</td>
                      <td>+1 800 233 8232</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>BMW Group</td>
                      <td>HQ, Bavaria State, Berlin, Germany</td>
                      <td>+1 234 855 2923</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Audi AG</td>
                      <td>--</td>
                      <td>--</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Honda Motor Group</td>
                      <td>--</td>
                      <td>--</td>
                    </tr>
                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection