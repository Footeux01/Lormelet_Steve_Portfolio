<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formation';
    protected $hidden = ['id_user'];
    protected $fillable = [
    'id_user', 'period', 'title_of_the_training', 'organism',
    ];
}
