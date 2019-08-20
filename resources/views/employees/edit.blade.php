
@extends('components.layout')

@section('layout-content')

<div class="mx-auto"> 
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <div class="h3">Editing Employee</div>
      <hr>
    </div>
  <form method="post" action="/employees/{{ $employee['id'] }}">

    @method('PATCH')
    @csrf

    <div class="mx-5">
      <div class="form-group">
          <input type="text" class="form-control" name="fName" value="{{ $employee['fName'] }}" required/>
      </div>
      <div class="form-group">
          <input type="text" class="form-control" name="lName" value="{{ $employee['lName'] }}" required/>
      </div>
      <div class="form-group">
          <input type="text" class="form-control" name="position" value="{{ $employee['position'] }}" required/>
      </div>
      <div class="form-group">
          <input type="text" class="form-control" name="level" value="{{ $employee['level'] }}" required/>
      </div>
    </div>
    <div class="">
      <hr>
      <input type="submit" class="btn btn-primary" value="Save" />
    </div>

    @include('errors')
    
  </form>
</div>

@endsection