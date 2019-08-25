<?php

namespace App\Policies;

use App\Employee;
use App\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the project.
     *
     * @param  \App\Employee  $user
     * @param  \App\Project  $project
     * @return mixed
     */
    public function view(Employee $employee, Project $project)
    {
        if($employee->id == $project->id || $employee->level < 5){
            return true;
        } else {
            return false;
        }
    }
}
