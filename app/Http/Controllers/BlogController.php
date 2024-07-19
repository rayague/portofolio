<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogPosts = Blog::all();
        return view('admin.blog', compact('blogPosts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable|mimes:pdf|max:10000',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $filePath = $request->file('file') ? $request->file('file')->store('files', 'public') : null;

        Blog::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'file' => $filePath,
            'published_at' => now(),
        ]);

        return redirect()->back()->with('status', 'Publication ajoutée avec succès');
    }

    public function update(Request $request, $id)
    {
        $post = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'nullable|mimes:pdf|max:10000',
        ]);

        $imagePath = $post->image;
        $filePath = $post->file;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('files', 'public');
        }

        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'file' => $filePath,
        ]);

        return redirect()->back()->with('status', 'Publication mise à jour avec succès');
    }

    public function destroy($id)
    {
        $post = Blog::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('status', 'Publication supprimée avec succès');
    }
}