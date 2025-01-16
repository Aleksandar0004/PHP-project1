<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    // Декларираме кои полета могат да бъдат масово попълвани (Mass Assignment)
    protected $fillable = ['brand', 'model', 'price', 'color', 'in_stock'];
}
