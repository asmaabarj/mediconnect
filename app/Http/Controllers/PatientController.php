<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\favori;
use App\Models\Specialite;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        $favorites = favori::where('favori', '1')->where('patient', Auth::id());
        $favorites = favori::where('favori', '1')->where('patient', Auth::id());
        $doctors = User::where('role', 'Doctor')->get();
        $hours = [
            ['label' => '8h-9h', 'start' => '21:00', 'end' => '22:00'],
            ['label' => '9h-10h', 'start' => '09:00', 'end' => '10:00'],
            ['label' => '10h-11h', 'start' => '10:00', 'end' => '11:00'],
            ['label' => '11h-12h', 'start' => '11:00', 'end' => '12:00'],
            ['label' => '14h-15h', 'start' => '14:00', 'end' => '15:00'],
            ['label' => '15h-16h', 'start' => '15:00', 'end' => '16:00'],
        ];

        $now = Carbon::now('Africa/Casablanca');

        if ($now->hour >= 23 && $now->minute >= 58) {
            Reservation::where('statut', '1')
                ->update([
                    'statut' => '0'
                ]);
        }
        
        return view('dashboard', [
            'specialities' => $specialities,
            'doctors' => $doctors,
            'filtreddoctors' => $filtreddoctors,
            'hours' => $hours,

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
            ->whereDate('created_at', '>=', now()->startOfDay())
            ->where('Medecin', $data['Medecin'])
            ->where('statut' , '1')
            ->first();

        $existingReservations = Reservation::where('date', $data['date'])
            ->where('Medecin', $data['Medecin'])
            ->first();

        if (!$existingReservation && !$existingReservations) {
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

        $hours = [
            ['label' => '8h-9h', 'start' => '21:00', 'end' => '22:00'],
            ['label' => '9h-10h', 'start' => '09:00', 'end' => '10:00'],
            ['label' => '10h-11h', 'start' => '10:00', 'end' => '11:00'],
            ['label' => '11h-12h', 'start' => '11:00', 'end' => '12:00'],
            ['label' => '14h-15h', 'start' => '14:00', 'end' => '15:00'],
            ['label' => '15h-16h', 'start' => '15:00', 'end' => '16:00'],
        ];
        $now = Carbon::now('Africa/Casablanca');

        if ($now->hour >= 23 && $now->minute >= 58) {
            Reservation::where('statut', '1')
                ->update([
                    'statut', '0'
                ]);
        }
        $favorites = favori::where('favori', '1')->where('patient', Auth::id());

        return view('PaHistory', [
            'favoriteDoctors' => $favoriteDoctors,
            'favorites' => $favorites,
            'hours' => $hours,
        ]);
    }
}
