<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tasks() {
        return $this->hasMany(Task::class, 'project_id');
    }
    public function employees() {
        return $this->belongsToMany(Employee::class);
    }
}
