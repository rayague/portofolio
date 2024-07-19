<?php

use App\Models\Blog;
use App\Models\Client;
use App\Models\Profil;
use App\Models\Clients;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Service;
use App\Models\Sociaux;
use App\Models\Services;
use App\Models\Collaborateur;
use App\Models\Collaborateurs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SociauxController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CollaborateursController;
use App\Http\Controllers\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/services', [ViewsController::class, 'servicesView'])->name('servicesView');
Route::get('/about', [ViewsController::class, 'aboutView'])->name('aboutView');
Route::get('/contact', [ViewsController::class, 'contactView'])->name('contactView');
Route::get('/blog', [ViewsController::class, 'blogView'])->name('blogView');
Route::get('/single', [ViewsController::class, 'singleView'])->name('singleView');
Route::get('/notifications', [ViewsController::class, 'notifications'])->name('notifications');

Route::get('/administration', function () {
    $profils = Profil::all();
    $blogs = Blog::all();
    $clients = Clients::all();
    // dd($clients); 
    $collaborateurs = Collaborateurs::all();
    $contacts = Contact::all();
    $counters = Counter::all();
    $services = Services::all();
    $sociauxes = Sociaux::all();
    return view('admin.index'
    , compact('profils', 'blogs', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') 
);
})
// ->middleware(['auth', 'verified'])
->name('dashboard');

// Routes pour les blogs
// Routes pour les blogs
// Route::get('/blogs', [BlogController::class, 'index']);
Route::post('/blogs', [BlogController::class, 'storeBlog']);
Route::put('/blogs/{id}', [BlogController::class, 'updateBlog']);
Route::delete('/blogs/{id}', [BlogController::class, 'destroyBlog']);

// Routes pour les clients
// Route::get('/clients', [ClientController::class, 'index']);
Route::post('/clients', [ClientController::class, 'storeClients']);
Route::put('/clients/{id}', [ClientController::class, 'updateClients']);
Route::delete('/clients/{id}', [ClientController::class, 'destroyClients']);

// Routes pour les compteurs
// Route::get('/counters', [CounterController::class, 'index']);
Route::post('/counters', [CounterController::class, 'store']);
Route::put('/counters/{id}', [CounterController::class, 'update']);
Route::delete('/counters/{id}', [CounterController::class, 'destroy']);

// Routes pour les notifications
// Route::get('/notifications', [NotificationController::class, 'index']);
Route::post('/notifications', [NotificationController::class, 'store']);
Route::put('/notifications/{id}', [NotificationController::class, 'update']);
Route::delete('/notifications/{id}', [NotificationController::class, 'destroy']);

// Routes pour les profils
// Route::get('/profils', [ProfilController::class, 'index']);
Route::post('/profils', [ProfilController::class, 'storeProfils']);
Route::put('/profils/{id}', [ProfilController::class, 'updateProfils']);
Route::delete('/profils/{id}', [ProfilController::class, 'destroyProfils']);

// Routes pour les contacts
// Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'storeContact']);
Route::put('/contacts/{id}', [ContactController::class, 'updateContact']);
Route::delete('/contacts/{id}', [ContactController::class, 'destroyContact']);

// Routes pour les services
// Route::get('/services', [ServicesController::class, 'index']);
Route::post('/services', [ServicesController::class, 'storeServices']);
Route::put('/services/{id}', [ServicesController::class, 'updateServices']);
Route::delete('/services/{id}', [ServicesController::class, 'destroyServices']);

// Routes pour les sociaux
// Route::get('/sociaux', [SociauxController::class, 'index']);
Route::post('/sociaux', [SociauxController::class, 'store']);
Route::put('/sociaux/{id}', [SociauxController::class, 'update']);
Route::delete('/sociaux/{id}', [SociauxController::class, 'destroy']);

// Routes pour les collaborateurs
// Route::get('/collaborateurs', [CollaborateursController::class, 'index']);
Route::post('/collaborateurs', [CollaborateursController::class, 'storeCollaborateurs']);
Route::put('/collaborateurs/{id}', [CollaborateursController::class, 'updateCollaborateurs']);
Route::delete('/collaborateurs/{id}', [CollaborateursController::class, 'destroyCollaborateurs']);

// Route::resource('clients', ClientController::class);
// Route::resource('blog', BlogController::class);
// Route::resource('socialMedia', SociauxController::class);
// Route::resource('collaborateurs', CollaborateursController::class);
// Route::resource('services', ServicesController::class);
// Route::resource('profils', ProfilController::class);
// Route::resource('contacts', ContactController::class);


Route::get('/dashboard', function () {  
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';