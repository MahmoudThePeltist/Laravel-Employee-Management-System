
@extends('layout')

<div class="container">
  <div class="row h-100">
    <div class="card mx-auto my-auto col-md-6">

        <div class="card-header">
          <div class="h3">Viewing Employee</div>
        </div>

        <div class="card-body">
            <div class="h4 inline-block">
                First Name:
            </div>
            <div class="inline-block">
                {{ $employee['fName'] }}
            </div>
            <div class="h4 inline-block">
              Last Name: 
            </div>
            <div class="inline-block">
                {{ $employee['lName'] }}
            </div>
            <div class="h4 inline-block">
                Position:
            </div>
            <div class="inline-block">
                {{ $employee['position'] }}
            </div>
            <div class="h4 inline-block">
                Level:
            </div>
            <div class="inline-block">
                 {{ $employee['level'] }}
            </div>
        </div>

        <div class="card-footer">
          <a type="button" class="btn btn-secondary" href="/">Back</a>
        </div>
    </div>
  </div>
</div>
