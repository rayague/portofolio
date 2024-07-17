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
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="container-fluid">

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
                                                <th>Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>Entreprise</td>
                                                <td>Eazrez</td>
                                                <th><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editProfile" data-bs-whatever="@mdo">Modifier</button></th>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Modal Profile --}}

                        <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter des informations</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">Nom:</label>
                                      <input type="text" class="form-control" id="firstName" name="firstName">
                                    </div>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Pénoms:</label>
                                      <input type="text" class="form-control" id="lastName" name="lastName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Age:</label>
                                        <input type="number" class="form-control" id="age" name="age">
                                    </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Diplome Actuel:</label>
                                        <input type="text" class="form-control" id="diploma" name="diploma">
                                    </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Nom Entreprise:</label>
                                        <input type="text" class="form-control" id="entreprise" name="entreprise">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description:</label>
                                        <textarea class="form-control" id="description" name="description"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Enrégistrer</button>
                                </div>
                              </div>
                            </div>
                          </div>
{{-- 
                          <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de Profil</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                      <label for="recipient-name" class="col-form-label">Nom:</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Pénoms:</label>
                                      <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Age:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Diplome Actuel:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Nom Entreprise:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Photo:</label>
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
                          </div> --}}

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Informations de Contact</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Adresse</th>
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
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>$320,800</td>
                                                <th><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editContact" data-bs-whatever="@mdo">Modifier</button></th>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                        <div class="modal fade" id="addContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter des informations de contact</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                      <label for="message-text" class="col-form-label">Ville:</label>
                                      <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Boite Postale:</label>
                                        <input type="text" class="form-control" id="bp" name="bp">
                                    </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Pays:</label>
                                        <input type="text" class="form-control" id="country" name="country">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Numéro de Téléphone:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Poste de Travail:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Enrégistrer</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="modal fade" id="editContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de contact</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Addresse:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Ville:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Boite Postale:</label>
                                          <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                        <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Pays:</label>
                                          <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Email:</label>
                                          <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Numéro de Téléphone:</label>
                                          <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Poste de Travail:</label>
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
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editServices" data-bs-whatever="@mdo">Modifier</button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editPost" data-bs-whatever="@mdo">Supprimer</button>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addServices" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations de contact</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Titre du Service</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description du Service</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Ajouter</button>
                                </div>
                              </div>
                            </div>
                          </div>
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
                                <h6 class="m-0 font-weight-bold text-primary">Informations des Collaborateurs</h6>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCollaborateurs" data-bs-whatever="@mdo">Ajouter un Collaborateur</button>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom </th>
                                                <th>Prénoms</th>
                                                <th>Profession</th>
                                                <th>image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCollaborateurs" data-bs-whatever="@mdo">Modifier</button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editPost" data-bs-whatever="@mdo">Supprimer</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                          <div class="modal fade" id="addCollaborateurs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter les informations du Collaborateur</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nom:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Prénom:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Profession:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Image:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Ajouter</button>
                                </div>
                              </div>
                            </div>
                        </div>


                        <div class="modal fade" id="editCollaborateurs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations du collaborateur</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nom:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Prénom:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Profession:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Image:</label>
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
                                {{-- <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ajouter</button> --}}

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Facebook</th>
                                                <th>Linkedin</th>
                                                <th>Instagram</th>
                                                <th>Twitter</th>
                                                <th>Modifier</th>
                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSocialMedia" data-bs-whatever="@mdo">Modifier</button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editSocialMedia" data-bs-whatever="@mdo">Supprimer</button>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="editSocialMedia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les liens</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">FaceBook:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">LinkedIn:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Instagram:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Twitter:</label>
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
                                                <th>Modifier</th>
                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>61</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editPost" data-bs-whatever="@mdo">Modifier</button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editPost" data-bs-whatever="@mdo">Supprimer</button>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Poste</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Titre du Poste:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description du Poste:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Image Descriptive:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Joindre un fichier PDF:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                  <button type="button" class="btn btn-primary">Ajouter</button>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier les informations du Post</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Titre du Poste:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description du Poste:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Image Descriptive:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Joindre un fichier PDF:</label>
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
                                <h6 class="m-0 font-weight-bold text-primary">Informations sur les clients</h6>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addClient" data-bs-whatever="@mdo">Informations sur les clients</button>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nom du client</th>
                                                <th>Profession</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Modifier</th>
                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editClient" data-bs-whatever="@mdo">Modifier</button>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editPost" data-bs-whatever="@mdo">Supprimer</button>

                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>



                    
                    <!-- /.container-fluid -->

                    <div class="modal fade" id="addClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout d'un client</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nom du Client:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="mb-3">
                                <label for="message-text" class="col-form-label">Profession:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Description:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Image:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="editClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout d'un client</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Nom du Client:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Profession:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Description:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Image:</label>
                                  <input type="text" class="form-control" id="recipient-name">
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                          </div>
                        </div>
                      </div>


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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
