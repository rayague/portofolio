<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

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
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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
//     public function index()
//     {
//         $profils = Profil::where('status', true)->get();
//         return response()->json(['profils' => $profils]);
//     }

//     public function store(Request $request)
//     {
//         $profil = Profil::create($request->all());
//         return response()->json(['profil' => $profil], 201);
//     }

//     public function update(Request $request, $id)
//     {
//         $profil = Profil::findOrFail($id);
//         $profil->update($request->all());
//         return response()->json(['profil' => $profil]);
//     }

//     public function destroy($id)
//     {
//         $profil = Profil::findOrFail($id);
//         $profil->update(['status' => false]);
//         return response()->json(['message' => 'Profil deleted successfully']);
//     }
// }

}