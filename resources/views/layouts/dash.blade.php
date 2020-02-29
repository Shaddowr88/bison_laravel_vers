<!DOCTYPE html>
<html lang="en">

<head>
  <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js")}}></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bison </title>


  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body >

<!-- Content Wrapper -->
             <div >

<!-- Main Content -->
             <div id="content">

<!-- Top bar  -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <ul class="navbar-nav ml-auto">

    <!-- Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>

                  <li class="nav-item dropdown no-arrow mx-1">
                      <a class="nav-link dropdown-toggle" href="{{route('dashbord_index')}}" id="messagesDropdown" role="button">
                          <i class="fas fa-envelope fa-fw"></i>
                          <!-- Counter - Messages -->
                          <span class="badge badge-danger badge-counter">Home</span>
                      </a>
                  </li>


    <!--  Menus  Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
    <!-- Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                  </a>
    <!--contenue Menus Alerts  Notification -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header"> Notification</h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <i class="fas fa-file-alt text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-success">
                          <i class="fas fa-donate text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-warning">
                          <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We ve noticed unusually high spending for your account.
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                  </div>
                </li>

    <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                  </a>



    <!-- Messages -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                      Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I ve been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                        <div class="status-indicator"></div>
                      </div>
                      <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                        <div class="status-indicator bg-warning"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Last month s report looks great, I am very happy with the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren t good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                  </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>


    <!-- User Information -->
                <li class="nav-item dropdown no-arrow">
                  <ul>
                  <li class="nav-item dropdown">
                                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                      {{ Auth::user()->name }} <span class="caret"></span>
                                                  </a>

                                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                                       document.getElementById('logout-form').submit();">
                                                          {{ __('Logout') }}
                                                      </a>

                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                          @csrf
                                                      </form>
                                                  </div>
                                              </li>
                                              </ul>
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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


<!-- menus -->

                <div class="container-fluid">

                    <div class="col-sm">

                    <div class="row align-items-center">
                        <div class="col-md-4 mb-4"><h1 class="h3 mb-0 text-gray-800">Bienvenue <br> {{ Auth::user()->name }}  </h1></div>
                        </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="row no-gutters rounded overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                                <h1 class=""><span class="badge badge-secondary">{{ Auth::user()->appartement_id }}</span></h1>
                                <div class="col pl-3 d-flex flex-column position-static">
                                    <a class="text-uppercase ">Adresse rue user </a>
                                    <a class="text-uppercase ">Adresse rue user </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row h-50 ">
                        <div class="col-md-4 mb-5 ">
                            <div class="accordion col-11" id="accordion">


                                <div class="card mb-2">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed" type="button" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <a class="alert">Ma Co-pro</a>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav-item">
                                                <li> <a class="collapse-item" href="{{route('my_index')}}">Evenement</a></li>
                                                <li> <a class="collapse-item" href="{{route('signal')}}">Signalé</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-2">
                                    <div class="card-header " id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree"><a class="alert">Contacts</a></button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav-item">
                                                <li><a class="collapse-item" href="{{route('contact_syndic')}}">Syndic</a></li>
                                                <li><a class="collapse-item" href="{{route('contact_prestataire')}}">prestataire</a></li>
                                                <li><a class="collapse-item" href="{{route('contact_utility')}}">numero utiles</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card ">
                                    <div class="card-header " id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour"><a class="alert">Documents</a></button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav-item">
                                                <li><a class="collapse-item" href="{{route('Documents')}}">Relevés de charges</a></li>
                                                <li><a class="collapse-item" href="{{route('dating')}}">Assemblée générale</a></li>
                                                <li><a class="collapse-item" href="{{route('settlement')}}">Règlementations</a></li>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                    </div>

                    </div>
    <!-- Yield -->
                        <div class="col-md-8" height="100%">@yield('dash')</div>
           </div>

  <!-- Scroll to Top Button-->
<!-- menus Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
