<?php

namespace App\Http\Controllers;

use App\Models\Collaborateur;
use App\Models\Collaborateurs;
use Illuminate\Http\Request;

class CollaborateursController extends Controller
{
    public function index()
    {
        $collaborateurs = Collaborateurs::all();
        return view('admin.index', compact('collaborateurs'));
    }

    public function store(Request $request)
    {
        $collaborateur = new Collaborateurs;
        $collaborateur->nom = $request->input('nom');
        $collaborateur->prenoms = $request->input('prenoms');
        $collaborateur->profession = $request->input('profession');
        $collaborateur->image = $request->input('image');
        $collaborateur->save();

        return redirect()->back()->with('status', 'Collaborateur Added Successfully');
    }

    public function update(Request $request, $id)
    {
        $collaborateur = Collaborateurs::findOrFail($id);
        $collaborateur->nom = $request->input('nom');
        $collaborateur->prenoms = $request->input('prenoms');
        $collaborateur->profession = $request->input('profession');
        $collaborateur->image = $request->input('image');
        $collaborateur->save();

        return redirect()->back()->with('status', 'Collaborateur Updated Successfully');
    }

    public function destroy($id)
    {
        $collaborateur = Collaborateurs::findOrFail($id);
        $collaborateur->delete();

        return redirect()->back()->with('status', 'Collaborateur Deleted Successfully');
    }
}