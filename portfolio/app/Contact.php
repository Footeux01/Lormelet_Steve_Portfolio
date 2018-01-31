<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'mail';
    protected $fillable = [
    'name', 'mail', 'telephone', 'message'
    ];
}
