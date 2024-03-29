<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favori extends Model
{
    use HasFactory;
    protected $fillable = ['favori','Medecin','patient'];
    public function doctor()
    {
        return $this->belongsTo(User::class, 'Medecin');
    }
}
