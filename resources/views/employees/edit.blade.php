
@extends('layout')

<div class="container">
  <div class="row h-100">
    <div class="card mx-auto my-auto col-md-6"> 
        <div class="card-footer">
          <div class="h3">Editing Employee</div>
        </div>
      <form method="post" action="/employees/{{ $employee['id'] }}">

        @method('PATCH')
        @csrf

        <div class="card-body">
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
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" value="Save" />
        </div>
        @if($errors->any())
        <div class="form-group">
            @foreach ($errors->all() as $error)
                <div class="h5 text-danger">{{ $error }}</div>
            @endforeach
        </div>
        @endif
      </form>
    </div>
  </div>
</div>
