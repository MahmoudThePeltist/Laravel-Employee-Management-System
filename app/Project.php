<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'description', 'owner_id'
    ];

    public function tasks() {
        return $this->hasMany(Task::class, 'project_id');
    }
    public function employees() {
        return $this->belongsToMany(Employee::class);
    }

    public function addTask($task) {
        return $this->tasks()->create($task);
    }
}
