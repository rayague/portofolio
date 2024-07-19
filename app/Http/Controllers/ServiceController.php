<?php
namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('admin.index', compact('services'));
    }

    public function store(Request $request)
    {
        $service = new Services;
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();

        return redirect()->back()->with('status', 'Service Added Successfully');
    }

    public function update(Request $request, $id)
    {
        $service = Services::findOrFail($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();

        return redirect()->back()->with('status', 'Service Updated Successfully');
    }

    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('status', 'Service Deleted Successfully');
    }
}