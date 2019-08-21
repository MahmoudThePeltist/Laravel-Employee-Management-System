
@extends('components.layout')

@section('layout-content')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form method="post" action="/employees">
          {{ csrf_field() }}
          <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control" name="fName" placeholder="First Name *" required/>
                @error('fName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lName" placeholder="Last Name *" required/>
                @error('lName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="position" placeholder="Position *" required/>
                @error('position')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email *" required/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="level" placeholder="Level *" required/>
                @error('level')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password *" required/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Add" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="h3">Employees</div>
    <div class="btn-toolbar mb-2 mb-md-0">
      <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
        New Employee
      </button>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm text-center table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Position</th>
          <th>Level</th>
          <th>Tools</th>
        </tr>
      </thead>
      <tbody>
        @foreach($employees as $employee)
            <tr>
                <a href="employees/{{$employee['id']}}">
                  <td style="cursor: pointer" onclick="window.location='employees/{{$employee['id']}}'">
                    {{ $employee['id'] }}
                  </td>
                  <td style="cursor: pointer" onclick="window.location='employees/{{$employee['id']}}'">
                    {{ $employee['fName'] }}
                  </td>
                  <td style="cursor: pointer" onclick="window.location='employees/{{$employee['id']}}'">
                    {{ $employee['lName'] }}
                  </td>
                  <td style="cursor: pointer" onclick="window.location='employees/{{$employee['id']}}'">
                    {{ $employee['position'] }}
                  </td>
                  <td style="cursor: pointer" onclick="window.location='employees/{{$employee['id']}}'">
                    {{ $employee['level'] }}
                  </td>
                </a>
                <td class="mx-auto">
                  <div class="d-flex justify-content-center px-auto">
                    <div class="mx-2">
                      <a href="employees/{{$employee['id']}}/edit">
                        <button type="submit" class="btn btn-outline-dark">
                          <i class="fas fa-user-edit"></i>
                        </button>
                      </a>
                    </div>
                    <div class="mx-2">
                      <form class="form-inline" method="POST" action="employees/{{$employee['id']}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-dark">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection