
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
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="lName" placeholder="Last Name *" required/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="position" placeholder="Position *" required/>
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="level" placeholder="Level *" required/>
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
  <div class="h3">Section title</div>
  <div class="btn-toolbar mb-2 mb-md-0">
    <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
      Add New
    </button>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Level</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employees as $employee)
          <tr>
              <td>{{ $employee['id'] }}</td>
              <td>{{ $employee['fName'] }}</td>
              <td>{{ $employee['lName'] }}</td>
              <td>{{ $employee['position'] }}</td>
              <td>{{ $employee['level'] }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
