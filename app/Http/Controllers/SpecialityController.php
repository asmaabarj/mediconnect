<?php

namespace App\Http\Controllers;


use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function createSpeciality(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'The Name is required.',
        ]);

        $data['name'] = strip_tags($data['name']);

        Specialite::create($data);
        
        return redirect('/admin');
    }

    public function listSpecialities()
    {
        $specialities = Specialite::all();
        
        return view('admin.admin', ['specialities' => $specialities]);
    }
    public function DeleteSpeciality(Specialite $Specialite)
   {
      $Specialite->delete();
      return redirect('/admin');
   }
}
