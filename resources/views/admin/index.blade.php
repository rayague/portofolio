<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/administration">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Porto Folio<sup>x</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/administration">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Acceuil</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('notifications')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Notifications</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i> 
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('admin/img/undraw_profile_1.svg') }}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('admin/img/undraw_profile_2.svg') }}"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('img/undraw_profile_3.svg ') }}"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('img/undraw_profile_3.svg ') }}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('admin/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->

                    <!-- Content Row -->
                            <div class="container-fluid">
                            @if (Session::has('status'))
                                <div class="alert alert-info">{{ Session::get('status') }}</div>
                            @endif

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                            For more information about DataTables, please visit the <a target="_blank"
                                href="https://datatables.net">official DataTables documentation</a>.</p>
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Informations de Profil</h6>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Nom</th>
                                              <th>Prénoms</th>
                                              <th>Age</th>
                                              <th>Description</th>
                                              <th>Diplome actuelle</th>
                                              <th>Nom Entreprise</th>
                                              <th>Image</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($profils as $profil)
                                          <tr>
                                              <td>{{ $profil->firstName }}</td>
                                              <td>{{ $profil->lastName }}</td>
                                              <td>{{ $profil->age }}</td>
                                              <td>{{ $profil->description }}</td>
                                              <td>{{ $profil->diploma }}</td>
                                              <td>{{ $profil->entreprise }}</td>
                                              <td><img src="{{ asset('storage/' . $profil->image) }}" alt="Profile Image" width="50" height="50"></td>
                                              <td>
                                                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProfile{{ $profil->id }}" data-bs-whatever="@mdo">Modifier</button>
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      
                      @foreach($profils as $profil)
                      <!-- Modal Profile -->
                      <div class="modal fade" id="editProfile{{ $profil->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier des informations</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{ route('updateProfils', $profil->id) }}" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="mb-3">
                                              <label for="firstName" class="col-form-label">Nom:</label>
                                              <input type="text" class="form-control" id="firstName" name="firstName" value="{{ $profil->firstName }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="lastName" class="col-form-label">Prénoms:</label>
                                              <input type="text" class="form-control" id="lastName" name="lastName" value="{{ $profil->lastName }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="age" class="col-form-label">Age:</label>
                                              <input type="number" class="form-control" id="age" name="age" value="{{ $profil->age }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="diploma" class="col-form-label">Diplome Actuel:</label>
                                              <input type="text" class="form-control" id="diploma" name="diploma" value="{{ $profil->diploma }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="entreprise" class="col-form-label">Nom Entreprise:</label>
                                              <input type="text" class="form-control" id="entreprise" name="entreprise" value="{{ $profil->entreprise }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="description" class="col-form-label">Description:</label>
                                              <textarea class="form-control" id="description" name="description">{{ $profil->description }}</textarea>
                                          </div>
                                          <div class="mb-3">
                                              <label for="image" class="col-form-label">Image:</label>
                                              <input type="file" class="form-control" id="image" name="image">
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <button type="submit" class="btn btn-primary">Enrégistrer</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informations de Contact</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Ville</th>
                                            <th>Boite Postale</th>
                                            <th>Pays</th>
                                            <th>Email</th>
                                            <th>Numéro de Télephone</th>
                                            <th>Poste de Travail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->city }}</td>
                                            <td>{{ $contact->bp }}</td>
                                            <td>{{ $contact->country }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->telephone }}</td>
                                            <td>{{ $contact->office }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editContact{{ $contact->id }}" data-bs-whatever="@mdo">Modifier</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    @foreach($contacts as $contact)
                    <!-- Modal Contact -->
                    <div class="modal fade" id="editContact{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de contact</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('updateContact', $contact->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="city" class="col-form-label">Ville:</label>
                                            <input type="text" class="form-control" id="city" name="city" value="{{ $contact->city }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="postalBox" class="col-form-label">Boite Postale:</label>
                                            <input type="text" class="form-control" id="postalBox" name="postalBox" value="{{ $contact->postalBox }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="col-form-label">Pays:</label>
                                            <input type="text" class="form-control" id="country" name="country" value="{{ $contact->country }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="col-form-label">Numéro de Téléphone:</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jobTitle" class="col-form-label">Poste de Travail:</label>
                                            <input type="text" class="form-control" id="jobTitle" name="jobTitle" value="{{ $contact->jobTitle }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Enrégistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Informations de services</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addServices" data-bs-whatever="@mdo">Ajouter un Service</button>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Type de service</th>
                        <th>Description du service</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#editServices{{ $service->id }}" data-bs-whatever="@mdo">Modifier</button>
                            <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#deleteService{{ $service->id }}" data-bs-whatever="@mdo">Supprimer</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Ajouter Service -->
<div class="modal fade" id="addServices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('storeServices') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Titre du Service</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description du Service</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@foreach($services as $service)
<!-- Modal Modifier Service -->
<div class="modal fade" id="editServices{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations du service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateServices', $service->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Titre du Service:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description du Service:</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Supprimer Service -->
<div class="modal fade" id="deleteService{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le Service</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('destroyServices', $service->id) }}">
                    @csrf
                    @method('DELETE')
                    <p>Êtes-vous sûr de vouloir supprimer ce service ?</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Informations des Collaborateurs</h6>
  </div>
  <div class="card-body">
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCollaborateurs" data-bs-whatever="@mdo">Ajouter un Collaborateur</button>
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>Nom</th>
                      <th>Prénoms</th>
                      <th>Profession</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($collaborateurs as $collaborateur)
                  <tr>
                      <td>{{ $collaborateur->nom }}</td>
                      <td>{{ $collaborateur->prenoms }}</td>
                      <td>{{ $collaborateur->profession }}</td>
                      <td><img src="{{ $collaborateur->image }}" alt="Image" style="width: 50px; height: 50px;"></td>
                      <td>
                          <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#editCollaborateurs{{ $collaborateur->id }}" data-bs-whatever="@mdo">Modifier</button>
                          <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#deleteCollaborateur{{ $collaborateur->id }}" data-bs-whatever="@mdo">Supprimer</button>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>

<!-- Modal Ajouter Collaborateur -->
<div class="modal fade" id="addCollaborateurs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter les informations du Collaborateur</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('storeCollaborateurs') }}">
                  @csrf
                  <div class="mb-3">
                      <label for="nom" class="col-form-label">Nom:</label>
                      <input type="text" class="form-control" id="nom" name="nom">
                  </div>
                  <div class="mb-3">
                      <label for="prenoms" class="col-form-label">Prénom:</label>
                      <input type="text" class="form-control" id="prenoms" name="prenoms">
                  </div>
                  <div class="mb-3">
                      <label for="profession" class="col-form-label">Profession:</label>
                      <input type="text" class="form-control" id="profession" name="profession">
                  </div>
                  <div class="mb-3">
                      <label for="image" class="col-form-label">Image:</label>
                      <input type="text" class="form-control" id="image" name="image">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Ajouter</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

@foreach($collaborateurs as $collaborateur)
<!-- Modal Modifier Collaborateur -->
<div class="modal fade" id="editCollaborateurs{{ $collaborateur->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations du collaborateur</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('updateCollaborateurs', $collaborateur->id) }}">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label for="nom" class="col-form-label">Nom:</label>
                      <input type="text" class="form-control" id="nom" name="nom" value="{{ $collaborateur->nom }}">
                  </div>
                  <div class="mb-3">
                      <label for="prenoms" class="col-form-label">Prénom:</label>
                      <input type="text" class="form-control" id="prenoms" name="prenoms" value="{{ $collaborateur->prenoms }}">
                  </div>
                  <div class="mb-3">
                      <label for="profession" class="col-form-label">Profession:</label>
                      <input type="text" class="form-control" id="profession" name="profession" value="{{ $collaborateur->profession }}">
                  </div>
                  <div class="mb-3">
                      <label for="image" class="col-form-label">Image:</label>
                      <input type="text" class="form-control" id="image" name="image" value="{{ $collaborateur->image }}">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- Modal Supprimer Collaborateur -->
<div class="modal fade" id="deleteCollaborateur{{ $collaborateur->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le Collaborateur</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{ route('destroyCollaborateurs', $collaborateur->id) }}">
                  @csrf
                  @method('DELETE')
                  <p>Êtes-vous sûr de vouloir supprimer ce collaborateur ?</p>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-danger">Supprimer</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endforeach

                          <div class="modal fade" id="editServices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de contact</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Titre du Service:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description du Service:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Modifier</button>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Informations sur les réseaux sociaux</h6>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Facebook</th>
                                              <th>LinkedIn</th>
                                              <th>Instagram</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($sociauxes as $socialMedia)
                                          <tr>
                                              <td>{{ $socialMedia->facebook }}</td>
                                              <td>{{ $socialMedia->linkedin }}</td>
                                              <td>{{ $socialMedia->instagram }}</td>
                                              <td>
                                                  <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#editSocialMedia{{ $socialMedia->id }}" data-bs-whatever="@mdo">Modifier</button>
                                                  <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#deleteSocialMedia{{ $socialMedia->id }}" data-bs-whatever="@mdo">Supprimer</button>
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      
                      @foreach($sociauxes as $socialMedia)
                      <!-- Modal Modifier Réseaux Sociaux -->
                      <div class="modal fade" id="editSocialMedia{{ $socialMedia->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les liens</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{ route('updateSocialMedia', $socialMedia->id) }}">
                                          @csrf
                                          @method('PUT')
                                          <div class="mb-3">
                                              <label for="facebook" class="col-form-label">Facebook:</label>
                                              <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $socialMedia->facebook }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="linkedin" class="col-form-label">LinkedIn:</label>
                                              <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $socialMedia->linkedin }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="instagram" class="col-form-label">Instagram:</label>
                                              <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $socialMedia->instagram }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="twitter" class="col-form-label">Twitter:</label>
                                              <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $socialMedia->twitter }}">
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <button type="submit" class="btn btn-primary">Modifier</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <!-- Modal Supprimer Réseaux Sociaux -->
                      <div class="modal fade" id="deleteSocialMedia{{ $socialMedia->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer les informations du réseau social</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{ route('destroySocialMedia', $socialMedia->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <p>Êtes-vous sûr de vouloir supprimer ces informations ?</p>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <button type="submit" class="btn btn-danger">Supprimer</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      
                        <div class="modal fade" id="editServices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de contact</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Titre du Service:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description du Service:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Modifier</button>
                                </div>
                              </div>
                            </div>
                        </div>


                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Informations sur le Blog</h6>
                          </div>
                          <div class="card-body">
                              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addPost" data-bs-whatever="@mdo">Ajouter une Publication</button>
                      
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Titre</th>
                                              <th>Description</th>
                                              <th>Date de publication</th>
                                              <th>Image</th>
                                              <th>Joindre un Fichier</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($blogPosts as $post)
                                          <tr>
                                              <td>{{ $post->title }}</td>
                                              <td>{{ $post->description }}</td>
                                              <td>{{ $post->created_at }}</td>
                                              <td><img src="{{ asset('storage/' . $post->image) }}" alt="Image" width="50"></td>
                                              <td>{{ $post->file ? 'Oui' : 'Non' }}</td>
                                              <td>
                                                  <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#editPost{{ $post->id }}" data-bs-whatever="@mdo">Modifier</button>
                                                  <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#deletePost{{ $post->id }}" data-bs-whatever="@mdo">Supprimer</button>
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      
                      <!-- Modal Ajouter une Publication -->
                      <div class="modal fade" id="addPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Poste</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{ route('storeBlog') }}" enctype="multipart/form-data">
                                          @csrf
                                          <div class="mb-3">
                                              <label for="title" class="col-form-label">Titre du Poste:</label>
                                              <input type="text" class="form-control" id="title" name="title">
                                          </div>
                                          <div class="mb-3">
                                              <label for="description" class="col-form-label">Description du Poste:</label>
                                              <textarea class="form-control" id="description" name="description"></textarea>
                                          </div>
                                          <div class="mb-3">
                                              <label for="image" class="col-form-label">Image Descriptive:</label>
                                              <input type="file" class="form-control" id="image" name="image">
                                          </div>
                                          <div class="mb-3">
                                              <label for="file" class="col-form-label">Joindre un fichier PDF:</label>
                                              <input type="file" class="form-control" id="file" name="file">
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <button type="submit" class="btn btn-primary">Ajouter</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      @foreach($blogPosts as $post)
                      <!-- Modal Modifier une Publication -->
                      <div class="modal fade" id="editPost{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations du Post</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{ route('updateBlog', $post->id) }}" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="mb-3">
                                              <label for="title" class="col-form-label">Titre du Poste:</label>
                                              <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                                          </div>
                                          <div class="mb-3">
                                              <label for="description" class="col-form-label">Description du Poste:</label>
                                              <textarea class="form-control" id="description" name="description">{{ $post->description }}</textarea>
                                          </div>
                                          <div class="mb-3">
                                              <label for="image" class="col-form-label">Image Descriptive:</label>
                                              <input type="file" class="form-control" id="image" name="image">
                                          </div>
                                          <div class="mb-3">
                                              <label for="file" class="col-form-label">Joindre un fichier PDF:</label>
                                              <input type="file" class="form-control" id="file" name="file">
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <button type="submit" class="btn btn-primary">Modifier</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <!-- Modal Supprimer une Publication -->
                      <div class="modal fade" id="deletePost{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer la Publication</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{ route('destroyBlog', $post->id) }}">
                                          @csrf
                                          @method('DELETE')
                                          <p>Êtes-vous sûr de vouloir supprimer cette publication ?</p>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                              <button type="submit" class="btn btn-danger">Supprimer</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      


                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informations sur les clients</h6>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addClient" data-bs-whatever="@mdo">Ajouter un Client</button>
                    
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom du client</th>
                                            <th>Profession</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clients as $client)
                                        <tr>
                                            <td>{{ $client->name }}</td>
                                            <td>{{ $client->profession }}</td>
                                            <td>{{ $client->description }}</td>
                                            <td><img src="{{ asset('storage/' . $client->image) }}" alt="Image" width="50"></td>
                                            <td>
                                                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#editClient{{ $client->id }}" data-bs-whatever="@mdo">Modifier</button>
                                                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#deleteClient{{ $client->id }}" data-bs-whatever="@mdo">Supprimer</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal Ajouter un Client -->
                    <div class="modal fade" id="addClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout d'un client</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('storeClients') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="col-form-label">Nom du Client:</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="profession" class="col-form-label">Profession:</label>
                                            <input type="text" class="form-control" id="profession" name="profession">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="col-form-label">Description:</label>
                                            <textarea class="form-control" id="description" name="description"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="col-form-label">Image:</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @foreach($clients as $client)
                    <!-- Modal Modifier un Client -->
                    <div class="modal fade" id="editClient{{ $client->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations du client</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('updateClients', $client->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="name" class="col-form-label">Nom du Client:</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="profession" class="col-form-label">Profession:</label>
                                            <input type="text" class="form-control" id="profession" name="profession" value="{{ $client->profession }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="col-form-label">Description:</label>
                                            <textarea class="form-control" id="description" name="description">{{ $client->description }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="col-form-label">Image:</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal Supprimer un Client -->
                    <div class="modal fade" id="deleteClient{{ $client->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le client</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('destroyClients', $client->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <p>Êtes-vous sûr de vouloir supprimer ce client ?</p>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Porto Folio 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
