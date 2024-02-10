<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Models\Specialite;
use Illuminate\Http\Request;

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

        return redirect('/admin');
    }

    public function listMedicamentsAndSpecialities()
    {
        $medicaments = Medicament::with('specialite')->where('statut', '1')->get();    
        $specialities = Specialite::where('statut', '1')->get(); 
        $specialiteCount = $specialities->count();
        $MedicamentCount = $medicaments->count();

        return view('admin.admin', [
            'medicaments' => $medicaments,
            'specialities' => $specialities,
            'specialiteCount' => $specialiteCount,
            'MedicamentCount' => $MedicamentCount,

        ]);
    }

    public function deleteMedicament(Request $request)
    {
        $medicamentId = $request->medicament_id;
        $medicament = Medicament::findOrFail($medicamentId);
        $medicament->update(['statut' => '0']);  
        return redirect('/admin');
    }
    
    
    
}
