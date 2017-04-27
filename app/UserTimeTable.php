<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTimeTable extends Model
{
    protected $table = 'user_timetable';

    protected $fillable = ['email', 'department', 'level', 'semester'];
}
