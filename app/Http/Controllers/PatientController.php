<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialite;
use App\Models\User; 

class PatientController extends Controller
{
    public function dashboard()
    {
        $specialities = Specialite::all();
        $doctors = User::where('role', 'Doctor')->get();
        
        return view('dashboard', [
            'specialities' => $specialities,
            'doctors' => $doctors
        ]);
    }
}
