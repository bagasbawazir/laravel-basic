<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $table = 'crew';
    protected $fillable = ['name','phone','email','position'];
}
