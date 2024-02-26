<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Models\Specialite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class MedicamentController extends Controller
{
    public function addMedicament(Request $request)
    {
        $data = $request->validate([
            'MedicamentName' => 'required|string|max:255',
            'specialite_id' => 'required',
        ]);

        Medicament::create([
            'name' => $data['MedicamentName'],
            'specialite_id' => $data['specialite_id'],
            'statut' => '1',
        ]);

        if (auth()->user()->role === 'Admin'){
            return redirect('/admin');
        }
        if(auth()->user()->role === 'Doctor'){
            return redirect('/doctor');
    
        }    }

    public function listMedicamentsAndSpecialities(Request $request)
    {
        $specialityId = $request->input('specialite_id');

        if ($specialityId !== null) {
            $editspecialite = Specialite::where('id', $specialityId)->first();
        } else {
            $editspecialite = null;
        }
        $medicamentId = $request->input('medicament_id');
        if ($medicamentId !== null) {
            $editmedicament = Medicament::where('id', $medicamentId)->first();
        } else {
            $editmedicament = null;
        }
        $medicaments = Medicament::with('specialite')->where('statut', '1')->get();
        $specialities = Specialite::where('statut', '1')->get();
        $specialiteCount = $specialities->count();
        $MedicamentCount = $medicaments->count();
        $doctorCount = User::where('role', 'doctor')->count();
        $patientCount = User::where('role', 'patient')->count();


    
            return view('admin.admin', [
                'medicaments' => $medicaments,
                'specialities' => $specialities,
                'specialiteCount' => $specialiteCount,
                'MedicamentCount' => $MedicamentCount,
                'editspecialite' => $editspecialite,
                'editmedicament' => $editmedicament,
                'doctorCount' => $doctorCount,
                'patientCount' => $patientCount,
            ]);
        }
      
        
        
    



    public function deleteMedicament(Request $request)
    {
        $medicamentId = $request->medicament_id;
        $medicament = Medicament::findOrFail($medicamentId);
        $medicament->update(['statut' => '0']);
       
        if (auth()->user()->role === 'Admin'){
            return redirect('/admin');
        }
        if(auth()->user()->role === 'Doctor'){
            return redirect('/doctor');
    
        }          
    
        }    
    public function UpdateSpecialities(Request $request)
    {
        $specialiteId = $request->input('specialite_id');

        if ($specialiteId !== null) {
            $specialite = Specialite::find($specialiteId);
            $specialite->name = $request->input('name');
            $specialite->save();
        }

       
        return redirect('/admin');
    }
    public function UpdateMedicaments(Request $request)
    {
        $medicamenId = $request->input('medicament_id');

        if ($medicamenId !== null) {
            $medicamen = Medicament::find($medicamenId);
            $medicamen->name = $request->input('MedicamentName');
            $medicamen->save();
        }

        if (auth()->user()->role === 'Admin'){
            return redirect('/admin');
        }
        if(auth()->user()->role === 'Doctor'){
            return redirect('/doctor');
    
        }   

    }
    }
   
    
    


