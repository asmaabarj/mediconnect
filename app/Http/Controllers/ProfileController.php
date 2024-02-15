<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */

     public function update(ProfileUpdateRequest $request): RedirectResponse
     {
         $user = $request->user();
     
         $validatedData = $request->validated();
     
         // Handle the file upload
         if ($request->hasFile('photo')) {
             $photo = $request->file('photo');
             $photoName = $photo->getClientOriginalName(); // or use any logic to generate a unique name
             $photo->storeAs('images', $photoName, 'public');
             $validatedData['photo'] = $photoName;
         }
     
         $user->fill($validatedData);
     
         if ($user->isDirty('email')) {
             $user->email_verified_at = null;
         }
     
         $user->save();
     
         return redirect()->route('profile.edit')->with('status', 'profile-updated');
     }
     
    
    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
