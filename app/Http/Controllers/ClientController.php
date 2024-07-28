<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Clients::all();
        return view('admin.clients', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:9048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Clients::create([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('status', 'Client ajouté avec succès');
    }

    public function update(Request $request, $id)
    {
        $client = Clients::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:9048',
        ]);

        $imagePath = $client->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $client->update([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('status', 'Client mis à jour avec succès');
    }

    public function destroy($id)
    {
        $client = Clients::findOrFail($id);
        $client->delete();

        return redirect()->back()->with('status', 'Client supprimé avec succès');
    }
}