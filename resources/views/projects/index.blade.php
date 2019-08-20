
@extends('components.layout')

@section('layout-content')

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <form method="post" action="/projects">
          {{ csrf_field() }}
          <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name *" required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="description" placeholder="Description *" required/>
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
    <div class="h3">Projects</div>
    <div class="btn-toolbar mb-2 mb-md-0">
      <button class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
        New Project
      </button>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm text-center table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Tools</th>
        </tr>
      </thead>
      <tbody>
        @foreach($projects as $project)
            <tr>
                <td style="cursor: pointer" onclick="window.location='projects/{{$project['id']}}'">
                  {{ $project['id'] }}
                </td>
                <td style="cursor: pointer" onclick="window.location='projects/{{$project['id']}}'">
                  {{ $project['name'] }}
                </td>
                <td style="cursor: pointer" onclick="window.location='projects/{{$project['id']}}'">
                  {{ $project['description'] }}
                </td>
                <td class="mx-auto">
                  <div class="d-flex justify-content-center px-auto">
                    <div class="mx-2">
                      <a href="projects/{{$project['id']}}/edit">
                        <button type="submit" class="btn btn-outline-dark">
                          <i class="fas fa-edit"></i>
                        </button>
                      </a>
                    </div>
                    <div class="mx-2">
                      <form class="form-inline" method="POST" action="projects/{{$project['id']}}">
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