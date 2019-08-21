@extends('components.layout')

@section('title')
    Dashboard
@endsection

@section('layout-content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="h2">Dashboard</div>
  </div>


  <div class="mx-5">
    <div class="row">

      <div class="col-md-4 card card-body m-3">
        <div class="row">
          <div class="col-md-6 inline-block">
              Number of Employees:
          </div>
          <div class="col-md-6 h3 inline-block">
              {{ $employees->count() }}
          </div>
        </div>
      </div>

      <div class="col-md-4 card card-body m-3">
        <div class="row">
          <div class="col-md-6 inline-block">
              Number of Projects:
          </div>
          <div class="col-md-6 h3 inline-block">
              {{ $projects->count() }}
          </div>
        </div>
      </div>

  </div>

@endsection
