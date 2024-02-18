<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
   
    public function ReservationsDoc()
    {
        $medecin = Auth::id();
        $reservations = Reservation::select('reservations.*', 'patients.name as patient_name', 'patients.email as patient_email','patients.numTel as patient_phone' )
            ->join('users as patients', 'reservations.patient', '=', 'patients.id')
            ->where('reservations.medecin', $medecin)
            ->get();



        return view('doctor.notifDoctor', ['reservations' => $reservations]);
    }
    public function storeCertificate(Request $request)
{
    $request->validate([
        'ResrvData' => 'required|exists:reservations,id',
        'certifDays' => 'required|numeric',
    ]);

    certificate::create([
        'id_reservation' => $request->ResrvData,
        'certifDays' => $request->certifDays,
    ]);


    return redirect()->back();
}
public function showCertificates()
{
    $certificates = Certificate::select('certificates.*', 'reservations.date', 'reservations.created_at', 'patients.name as patient_name', 'patients.email as patient_email', 'patients.numTel as patient_phone')
        ->join('reservations', 'certificates.id_reservation', '=', 'reservations.id')
        ->join('users as patients', 'reservations.patient', '=', 'patients.id')
        ->get();

    return view('doctor.certificates', ['certificates' => $certificates]);
}


}
