<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    /** @use HasFactory<\Database\Factories\PlaneFactory> */
    use HasFactory;
    protected $fillable = ["title"];
}