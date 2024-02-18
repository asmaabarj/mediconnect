<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['id_reservation', 'certifDays'];

    use HasFactory;
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'id_reservation');
    }
}
