<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'fName',
        'lName',
        'position',
        'level'
    ];
    
    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
