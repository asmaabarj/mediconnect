<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','statut'
    ];

    public function medecins() 
    {
        return $this->hasMany(user::class); 
    }
    public function medicaments()
    {
        return $this->hasMany(Medicament::class);
    }
}
