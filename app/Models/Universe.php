<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
    protected $fillable = ['name', 'description'];
{
    protected $table = "universes";

}
