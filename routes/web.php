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
use App\Models\notification;

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
    $blogPosts = Blog::all();
    $clients = Clients::all();
    $collaborateurs = Collaborateurs::all();
    $contacts = Contact::all();
    $counters = Counter::all();
    $profils = Profil::all();
    $services = Services::all();
    $sociauxes = Sociaux::all();
    return view('index' , compact('profils', 'blogPosts', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') );
});

Route::get('/services', [ViewsController::class, 'servicesView'])->name('servicesView');
Route::get('/about', [ViewsController::class, 'aboutView'])->name('aboutView');
Route::get('/contact', [ViewsController::class, 'contactView'])->name('contactView');
Route::get('/blog', [ViewsController::class, 'blogView'])->name('blogView');
Route::get('/single', [ViewsController::class, 'singleView'])->name('singleView');
Route::get('/notifications', [ViewsController::class, 'notifications'])->name('notifications');

Route::get('/administration', function () {
    $blogPosts = Blog::all();
    $clients = Clients::all();
    $collaborateurs = Collaborateurs::all();
    $contacts = Contact::all();
    $counters = Counter::all();
    $profils = Profil::all();
    $services = Services::all();
    $sociauxes = Sociaux::all();
    // dd($counters);

    return view('admin.index'
    , compact('profils', 'blogPosts', 'clients', 'collaborateurs', 'contacts', 'counters', 'services', 'sociauxes') 
);
})
// ->middleware(['auth', 'verified'])
->name('dashboard');

// Routes pour les blogs
// Routes pour les blogs
// Route::get('/blogs', [BlogController::class, 'index']);
Route::post('/blogs', [BlogController::class, 'store'])->name('storeBlog');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('updateBlog');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('destroyBlog');

// Routes pour les clients
// Route::get('/clients', [ClientController::class, 'index']);
Route::post('/clients', [ClientController::class, 'store'])->name('storeClients');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('updateClients');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('destroyClients');

// Routes pour les compteurs
// Route::get('/counters', [CounterController::class, 'index']);
Route::post('/counters', [CounterController::class, 'store'])->name('storeCounter');
Route::put('/counters/{id}', [CounterController::class, 'update'])->name('updateCounter');
Route::delete('/counters/{id}', [CounterController::class, 'destroy'])->name('destroyCounter');

// Routes pour les notifications
// Route::get('/notifications', [NotificationController::class, 'index']);
Route::post('/notifications', [NotificationController::class, 'store'])->name('storeNotifications');
Route::put('/notifications/{id}', [NotificationController::class, 'update'])->name('updateNotifications');
Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('destroyNotifications');

// Routes pour les profils
// Route::get('/profils', [ProfilController::class, 'index']);
Route::post('/profils', [ProfilController::class, 'store'])->name('storeProfils');
Route::put('/profils/{id}', [ProfilController::class, 'update'])->name('updateProfils');
Route::delete('/profils/{id}', [ProfilController::class, 'destroy'])->name('destroyProfils');

// Routes pour les contacts
// Route::get('/contacts', [ContactController::class, 'index']);
Route::post('/contacts', [ContactController::class, 'store'])->name('storeContact');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('updateContact');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('destroyContact');

// Routes pour les services
// Route::get('/services', [ServicesController::class, 'index']);
Route::post('/services', [ServicesController::class, 'store'])->name('storeServices');
Route::put('/services/{id}', [ServicesController::class, 'update'])->name('updateServices');
Route::delete('/services/{id}', [ServicesController::class, 'destroy'])->name('destroyServices');

// Routes pour les sociaux
// Route::get('/sociaux', [SociauxController::class, 'index']);
Route::post('/sociaux', [SociauxController::class, 'store'])->name('storeSocialMedia');
Route::put('/sociaux/{id}', [SociauxController::class, 'update'])->name('updateSocialMedia');
Route::delete('/sociaux/{id}', [SociauxController::class, 'destroy'])->name('destroySocialMedia');

// Routes pour les collaborateurs
// Route::get('/collaborateurs', [CollaborateursController::class, 'index']);
Route::post('/collaborateurs', [CollaborateursController::class, 'store'])->name('storeCollaborateurs');
Route::put('/collaborateurs/{id}', [CollaborateursController::class, 'update'])->name('updateCollaborateurs');
Route::delete('/collaborateurs/{id}', [CollaborateursController::class, 'destroy'])->name('destroyCollaborateurs');

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