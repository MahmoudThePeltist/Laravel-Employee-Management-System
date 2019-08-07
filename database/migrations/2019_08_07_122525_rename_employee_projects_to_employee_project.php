<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameEmployeeProjectsToEmployeeProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Renaming the table cuz i messed up the first time lol
        $from = 'employee_projects';
        $to = 'employee_project';
        Schema::rename($from, $to);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // setting the name back
        $from = 'employee_project';
        $to = 'employee_projects';
        Schema::rename($from, $to);
    }
}
