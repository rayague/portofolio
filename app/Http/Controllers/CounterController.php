<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function index()
    {
        $counters = Counter::all();
        return response()->json(['counters' => $counters]);
    }

    public function store(Request $request)
    {
        $counter = new Counter;
        $counter->nbrsMessage = $request->input('nbrsMessage');
        $counter->nbrsCollaborateurs = $request->input('nbrsCollaborateurs');
        $counter->nbrsClients = $request->input('nbrsClients');
        $counter->save();

        return response()->json(['message' => 'Counter Added Successfully']);
    }

    public function update(Request $request, $id)
    {
        $counter = Counter::findOrFail($id);
        $counter->nbrsMessage = $request->input('nbrsMessage');
        $counter->nbrsCollaborateurs = $request->input('nbrsCollaborateurs');
        $counter->nbrsClients = $request->input('nbrsClients');
        $counter->save();

        return response()->json(['message' => 'Counter Updated Successfully']);
    }

    public function destroy($id)
    {
        $counter = Counter::findOrFail($id);
        $counter->delete();

        return response()->json(['message' => 'Counter Deleted Successfully']);
    }
}