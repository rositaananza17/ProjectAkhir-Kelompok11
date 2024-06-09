<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;

    protected $table = 'konser';
    protected $fillable = ['event','artis','venue','date'];
}
