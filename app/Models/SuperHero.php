<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuperHero extends Model
    protected $fillable = ['name', 'power', 'universe_id', 'gender_id'];
{
    use HasFactory;

    protected $table = "superheroes";

}
