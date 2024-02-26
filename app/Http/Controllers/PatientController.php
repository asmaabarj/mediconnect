<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\favori;
use App\Models\Rating;
use App\Models\Specialite;
use App\Models\certificate;
use App\Models\commentaire;
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

        $averageRatings = [];

        foreach ($filtreddoctors as $doctor) {
            $certificateIds = Certificate::whereHas('reservation', function ($query) use ($doctor) {
                $query->where('Medecin', $doctor->id);
            })->get(['id'])->toArray();

            $averageRatings[$doctor->id] = Rating::whereIn('id_certificate', $certificateIds)->avg('note')-1;
            
        }

        $favorites = Favori::where('favori', '1')->where('patient', Auth::id())->get();
        $doctors = User::where('role', 'Doctor')->get();

        $hours = [
            ['label' => '8h-9h', 'start' => '08:00', 'end' => '09:00'],
            ['label' => '9h-10h', 'start' => '09:00', 'end' => '10:00'],
            ['label' => '10h-11h', 'start' => '10:00', 'end' => '11:00'],
            ['label' => '11h-12h', 'start' => '11:00', 'end' => '12:00'],
            ['label' => '14h-15h', 'start' => '14:00', 'end' => '15:00'],
            ['label' => '15h-16h', 'start' => '15:00', 'end' => '16:00'],
        ];

        $now = Carbon::now('Africa/Casablanca');

        Reservation::where('statut', '1')
            ->whereDate('created_at', '<', $now->toDateString())
            ->update([
                'statut' => '0'
            ]);

        $commentsByDoctor = [];

        foreach ($filtreddoctors as $doctor) {
            $commentsByDoctor[$doctor->id]  = Commentaire::select('commentaires.content')
                ->join('certificates', 'commentaires.id_certificate', '=', 'certificates.id')
                ->join('reservations', 'certificates.id_reservation', '=', 'reservations.id')
                ->where('reservations.Medecin', $doctor->id)
                ->get();
        }

        return view('dashboard', [
            'specialities' => $specialities,
            'doctors' => $doctors,
            'filtreddoctors' => $filtreddoctors,
            'hours' => $hours,
            'favorites' => $favorites,
            'commentsByDoctor' => $commentsByDoctor,
            'averageRatings' => $averageRatings,
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
            ->where('statut', '1')
            ->where('patient', $data['patient'])
            ->whereDate('created_at', '>=', now()->startOfDay())
            ->where('Medecin', $data['Medecin'])
            ->first();


        $existingReservations = Reservation::where('date', $data['date'])
            ->where('statut', '1')

            ->where('Medecin', $data['Medecin'])
            ->first();

        $alreadyReservedToday = Reservation::where('statut', '1')
            ->where('patient', $data['patient'])
            ->count();

        $check = ($alreadyReservedToday >= 1);

        if (!$existingReservation && !$existingReservations && !$check) {
            Reservation::create($data);
            return redirect('/dashboard')->with('success', 'Reservation successful!');
        } else {
            return redirect('/dashboard')->with('error', 'Error: Reservation already exists for this date and patient, Or you have already passed an appointment for today.');
        }
    }


    public function favoriteDoctors()
    {
        $favoriteDoctors = Favori::where('favori', '1')
            ->where('patient', Auth::id())
            ->with('doctor')
            ->get();

        $hours = [
            ['label' => '8h-9h', 'start' => '08:00', 'end' => '09:00'],
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

    public function notification()
    {
        $certificates = Certificate::select('certificates.*', 'reservations.date', 'patients.name as patient_name', 'patients.email as patient_email', 'patients.numTel as patient_phone', 'doctors.name as doctor_name' , 'reservations.Medecin as DocId')
            ->join('reservations', 'certificates.id_reservation', '=', 'reservations.id')
            ->join('users as patients', 'reservations.patient', '=', 'patients.id')
            ->join('users as doctors', 'reservations.Medecin', '=', 'doctors.id')
            ->where('reservations.patient', Auth::id())
            ->get();

        return view('notifPatient', ['certificates' => $certificates]);
    }

    public function downloadCertificate($certificateId)
    {
        $certificate = Certificate::findOrFail($certificateId);


        return response()->download($certificate->certificate_url);
    }
    // PatientController.php

    public function consultation()
    {
        $doctorIds = Certificate::select('reservations.Medecin')
            ->join('reservations', 'certificates.id_reservation', '=', 'reservations.id')
            ->where('reservations.patient', Auth::id())
            ->distinct()
            ->pluck('Medecin');
    
        $certificates = Certificate::select('certificates.*', 'reservations.date', 'patients.name as patient_name', 'patients.email as patient_email', 'patients.numTel as patient_phone', 'doctors.name as doctor_name', 'doctors.email as doctor_email', 'doctors.numTel as doctor_phone', 'doctors.desc as doctor_description', 'doctors.photo as doctor_photo')
            ->join('reservations', 'certificates.id_reservation', '=', 'reservations.id')
            ->join('users as patients', 'reservations.patient', '=', 'patients.id')
            ->join('users as doctors', 'reservations.Medecin', '=', 'doctors.id')
            ->whereIn('reservations.Medecin', $doctorIds)
            ->where('reservations.patient', Auth::id())
            ->get();
    
        $comments = [];
        foreach ($certificates as $certificate) {
            $comments[$certificate->id] = Commentaire::where('id_certificate', $certificate->id)->get();
        }
    
        return view('certificat', ['certificates' => $certificates, 'comments' => $comments]);
    }
    





    public function addComment(Request $request)
    {
        $data = $request->validate([
            'certificate_id' => 'required|exists:certificates,id',
            'content' => 'required',
        ]);

        commentaire::create([
            'id_certificate' => $data['certificate_id'],
            'content' => $data['content'],
        ]);

        return redirect()->back();
    }

    public function rateDoctor(Request $request)
{
    $data = $request->validate([
        'certificate_id' => 'required',
        'rating' => 'required|in:1,2,3,4,5',
    ]);

    $existingRating = Rating::where('id_certificate', $data['certificate_id'])->first();

    if ($existingRating) {
        Rating::where('id_certificate', $data['certificate_id'])->update(['note' => $data['rating']]);
    } else {
        Rating::create([
            'id_certificate' => $data['certificate_id'],
            'note' => $data['rating'],
        ]);
    }

    return redirect()->back()->with('success', 'Doctor rated successfully!');
}



    

}
