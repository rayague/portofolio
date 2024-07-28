<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Profil;
use App\Models\Clients;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Sociaux;
use App\Models\Services;
use App\Models\notification;
use Illuminate\Http\Request;
use App\Models\Collaborateurs;

class ViewsController extends Controller
{
    public function singleView(){
        return view("single");
    }

    public function aboutView(){
        $blogPosts = Blog::all();
        $clients = Clients::all();
        $collaborateurs = Collaborateurs::all();
        $contacts = Contact::all();
        $counters = Counter::all();
        $profils = Profil::all();
        $services = Services::all();
        $sociauxes = Sociaux::all();
        return view("about", compact('profils', 'blogPosts', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') 
    );
    }

    public function contactView(){
        $blogPosts = Blog::all();
        $clients = Clients::all();
        $collaborateurs = Collaborateurs::all();
        $contacts = Contact::all();
        $counters = Counter::all();
        $profils = Profil::all();
        $services = Services::all();
        $sociauxes = Sociaux::all();
        return view("contact", compact('profils', 'blogPosts', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') 
    );
    }

    public function blogView(){
        $blogPosts = Blog::all();
        $clients = Clients::all();
        $collaborateurs = Collaborateurs::all();
        $contacts = Contact::all();
        $counters = Counter::all();
        $profils = Profil::all();
        $services = Services::all();
        $sociauxes = Sociaux::all();
        return view("blog", compact('profils', 'blogPosts', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') 
    );
    }

    public function servicesView(){
        $blogPosts = Blog::all();
        $clients = Clients::all();
        $collaborateurs = Collaborateurs::all();
        $contacts = Contact::all();
        $counters = Counter::all();
        $profils = Profil::all();
        $services = Services::all();
        $sociauxes = Sociaux::all();
        return view("service", compact('profils', 'blogPosts', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') 
    );
    }

    public function notifications() {
        
        $notifications = notification::all();

        return view("admin/cards", compact('notifications'));
    }
}