<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialite;
use App\Models\User;

class PatientController extends Controller
{
    public function dashboard(Request $request)
    {
        $specialities = Specialite::all();

        if ($request->has('specialityId')) {
            $specialityId = $request->input('specialityId');
            $filtreddoctors = User::where('role', 'Doctor')->where('specialite_id', $specialityId)->get();
        } else {
            $filtreddoctors = User::where('role', 'Doctor')->get();
        }

        $doctors = User::where('role', 'Doctor')->get();

        return view('dashboard', [
            'specialities' => $specialities,
            'doctors' => $doctors,
            'filtreddoctors' => $filtreddoctors,
        ]);
    }
}
