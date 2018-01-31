<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model{
        protected $table = 'experience';
        protected $hidden = ['id_user'];
        protected $fillable = [
        'id_user', 'period', 'title_of_the_training', 'organism',
    ];
}