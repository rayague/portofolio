<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        return view('admin.index', compact('profils'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        $profil->firstName = $request->input('firstName');
        $profil->lastName = $request->input('lastName');
        $profil->age = $request->input('age');
        $profil->diploma = $request->input('diploma');
        $profil->entreprise = $request->input('entreprise');
        $profil->description = $request->input('description');
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $profil->image = $imagePath;
        }

        $profil->save();
        return redirect()->back()->with('status', 'Profil Updated Successfully');
    }

    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->status = false;
        $profil->save();
        return redirect()->back()->with('status', 'Profil Deleted Successfully');
    }
}