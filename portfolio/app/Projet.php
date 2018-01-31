<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
	protected $table = 'projet';
    protected $fillable = [
    'title', 'description', 'image',
    ];
}
