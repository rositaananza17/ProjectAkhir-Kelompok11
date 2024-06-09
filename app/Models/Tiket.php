<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table="tiket";

    protected $fillable = ['price','seat_number','availabilty_status','konser_id'];

    public function konser()
    {
        return $this->belongsTo(konser::class, 'konser_id');
    }
}
