<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $table = "profil";

    protected $fillable = ['id', 'ttl', 'gender', 'alamat', 'users_id'];

    public function currentUser()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
