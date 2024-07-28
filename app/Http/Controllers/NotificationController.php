<?php

namespace App\Http\Controllers;

use App\Models\notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = notification::all();
        return view('admin.cards', compact('notifications'));
    }

    public function store(Request $request)
    {
        $notifications = new notification;
        $notifications->name = $request->input('name');
        $notifications->subject = $request->input('subject');
        $notifications->email = $request->input('email');
        $notifications->message = $request->input('message');
        $notifications->save();

        return redirect()->back()->with('status', 'Service Added Successfully');
    }

    public function update(Request $request, $id)
    {
        $notifications = notification::findOrFail($id);
        $notifications->name = $request->input('name');
        $notifications->subject = $request->input('subject');
        $notifications->email = $request->input('email');
        $notifications->message = $request->input('message');
        $notifications->save();

        return redirect()->back()->with('status', 'Service Updated Successfully');
    }

    public function destroy($id)
    {
        $notifications = notification::findOrFail($id);
        $notifications->delete();

        return redirect()->back()->with('status', 'Service Deleted Successfully');
    }
}