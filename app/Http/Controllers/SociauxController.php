<?php

namespace App\Http\Controllers;

use App\Models\Sociaux;
use Illuminate\Http\Request;

class SociauxController extends Controller
{
public function index()
{
$sociauxes = Sociaux::all();
return response()->json(['sociauxes' => $sociauxes]);
}

public function store(Request $request)
{
$sociaux = new Sociaux;
$sociaux->facebook = $request->input('facebook');
$sociaux->linkedin = $request->input('linkedin');
$sociaux->instagram = $request->input('instagram');
$sociaux->save();

return redirect()->back()->with('status', 'Service Added Successfully');
}

public function update(Request $request, $id)
{
$sociaux = Sociaux::findOrFail($id);
$sociaux->facebook = $request->input('facebook');
$sociaux->linkedin = $request->input('linkedin');
$sociaux->instagram = $request->input('instagram');
$sociaux->save();

return redirect()->back()->with('status', 'Service Updated Successfully');
}

public function destroy($id)
{
$sociaux = Sociaux::findOrFail($id);
$sociaux->delete();

return redirect()->back()->with('status', 'Service Deleted Successfully');
}
}