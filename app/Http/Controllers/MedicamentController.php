<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicament;

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

}
