<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'Medecin', 'patient','statut'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    
}
