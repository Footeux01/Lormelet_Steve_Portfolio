<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';
    protected $fillable = [
    'period', 'title_of_the_training', 'organism',
    ];
}
