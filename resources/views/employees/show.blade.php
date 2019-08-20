
@extends('components.layout')

@section('layout-content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="h3">Viewing Employee</div>
  </div>

  <div class="mx-5">
    <div class="row">
        <div class="col-md-2 inline-block">
            First Name:
        </div>
        <div class="col-md-10 h4 inline-block">
            {{ $employee['fName'] }}
        </div>
        <hr>
        <div class="col-md-2 inline-block">
          Last Name: 
        </div>
        <div class="col-md-10 h4 inline-block">
            {{ $employee['lName'] }}
        </div>
        <hr>
        <div class="col-md-2 inline-block">
            Position:
        </div>
        <div class="col-md-10 h4 inline-block">
            {{ $employee['position'] }}
        </div>
        <hr>
        <div class="col-md-2 inline-block">
            Level:
        </div>
        <div class="col-md-10 h4 inline-block">
              {{ $employee['level'] }}
        </div>
    </div>

    <div class="">
      <hr>
      <a type="button" class="btn btn-secondary" href="/">Back</a>
    </div>
  </div>

@endsection
