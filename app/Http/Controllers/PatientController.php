<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\favori;
use App\Models\Specialite;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $favorites = favori::where('favori' ,'1')->where('patient', Auth::id());
        $doctors = User::where('role', 'Doctor')->get();

        return view('dashboard', [
            'specialities' => $specialities,
            'doctors' => $doctors,
            'filtreddoctors' => $filtreddoctors,
            'favorites' => $favorites
        ]);
    }
    public function favorit(Request $request)
    {
        $data = $request->validate([
            'favori' => 'required',
            'Medecin' => 'required',
            'patient' => ''
        ]);
    
        $data['patient'] = Auth::id();
    
        $existingFavorit = Favori::where('Medecin', $data['Medecin'])
                          ->where('patient', $data['patient'])
                          ->first(['favori']);

    
        if (!$existingFavorit) {
            Favori::create($data);
        } else {
            if ($existingFavorit->favori === '1') {
                Favori::where('patient', $data['patient'])
                      ->where('Medecin', $data['Medecin'])
                      ->update(['favori' => '0']);
            } else {
                Favori::where('patient', $data['patient'])
                      ->where('Medecin', $data['Medecin'])
                      ->update(['favori' => '1']);
            }
        }
    
        return redirect('/dashboard');
    }
    


    public function reservation(Request $request)
    {
        $data = $request->validate([
            'Medecin' => 'required',
            'date' => 'required',
        ]);
        $data['patient'] = Auth::id();

        $existingReservation = Reservation::where('date', $data['date'])
            ->where('patient', $data['patient'])
            ->first();

        if (!$existingReservation) {
            Reservation::create($data);
            return redirect('/dashboard')->with('success', 'Reservation successful!');
        } else {
            return redirect('/dashboard')->with('error', 'Reservation already exists for this date and patient.');
        }
    }

    public function favoriteDoctors()
{
    $favoriteDoctors = Favori::where('favori', '1')
    ->where('patient', Auth::id())
    ->with('doctor')
    ->get();


    return view('PaHistory', ['favoriteDoctors' => $favoriteDoctors]);
}
}
