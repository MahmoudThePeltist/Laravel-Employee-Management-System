<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'description',
        'completed',
        'project_id'
    ];
    //
    public function project() {
        return $this->belongsTo(Project::class);
    }

    // Doing some of that incapsulation, I'm not totally onboard 
    // with this style but I think I can get used to it

    public function complete() {
        $this->update(['completed' => true]);
    }

    public function incomplete() {
        $this->update(['completed' => false]);
    }
}
