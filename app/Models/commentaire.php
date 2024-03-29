<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model

    {
        use HasFactory;
    
        protected $fillable = [
            'id_certificate',
            'content',
        ];
        public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'id_certificate');
    }
    }    

