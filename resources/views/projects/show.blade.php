
@extends('components.layout')

@section('layout-content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <div class="h3">Viewing Project</div>
  </div>
  
  <div class="mx-5">
      <div class="">
          <div class="h5 inline-block">
              Name:
          </div>
          <div class="inline-block">
              {{ $project->name }}
          </div>
          <hr>
          <div class="h5 inline-block">
            Description: 
          </div>
          <div class="inline-block">
              {{ $project->description }}
          </div>
          <hr>
          <div class="h5 inline-block">
              Assigned To:
          </div>  
          <div class="inline-block">
              @if($project->employees->count())
              <ul class="w-100">
                  @foreach ($project->employees as $employee)
                  <li class="my-4 pr-4 w-100">{{ $employee->fName }} {{ $employee->lName }}
                    <form class="form-inline float-right" method="POST" action="{{ $project->id }}/deassign/{{ $employee->id }}">
                      @csrf
                      <button type="submit" class="btn btn-outline-dark">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </li>
                  @endforeach
              </ul>
              @else
                  <i>Not assigned.</i>
              @endif
          </div>
          <hr>
          <div class="h5 inline-block">
              Tasks:
          </div>
          <div class="inline-block">
              @if($project->tasks->count())
              <ul class="w-100">
                  @foreach ($project->tasks as $task)
                  <div class="row">
                    <div class="col-md-10">
                      <form class="my-2 pr-4" method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" 
                                class="custom-control-input" 
                                name="completed" 
                                onChange="this.form.submit()" 
                                id="task{{ $task->id }}" 
                                {{ $task->completed ? 'checked' : '' }}>
                          <label class="custom-control-label" for="task{{ $task->id }}">
                            {{ $task->description }}
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-2">
                      <form class="my-2 pr-4" method="POST" action="/tasks/{{ $task->id }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-dark">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                  @endforeach
              </ul>
              @else
                  <i>No tasks.</i>
              @endif
              <form classs="form-group" method="POST" action="{{ $project->id }}/tasks/">
                @csrf
                <input type="text" class="form-control" name="description" placeholder="Description">
                <button type="submit" class="btn btn-outline-primary mt-2">Add</button>
              </form>

            @include('errors')
      
          </div>
      </div>

      <div class="">
        <hr>
        <a type="button" class="btn btn-secondary" href="/projects">Back</a>
      </div>
  </div>

@endsection