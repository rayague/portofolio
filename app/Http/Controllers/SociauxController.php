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

return response()->json(['message' => 'Sociaux Added Successfully']);
}

public function update(Request $request, $id)
{
$sociaux = Sociaux::findOrFail($id);
$sociaux->facebook = $request->input('facebook');
$sociaux->linkedin = $request->input('linkedin');
$sociaux->instagram = $request->input('instagram');
$sociaux->save();

return response()->json(['message' => 'Sociaux Updated Successfully']);
}

public function destroy($id)
{
$sociaux = Sociaux::findOrFail($id);
$sociaux->delete();

return response()->json(['message' => 'Sociaux Deleted Successfully']);
}
}