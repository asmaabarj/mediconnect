<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;
    protected $fillable = ['name','specialite_id','statut'];

    public function specialite() 
    {
        return $this->belongsTo(Specialite::class); 
    }
  
}

