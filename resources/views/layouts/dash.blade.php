<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bizon') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href={{asset("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")}} integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Styles -->

    <script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js")}}></script>
    <script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js")}}></script>
    <script src={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js")}}></script>
    <script src={{asset("https://cdn.zingchart.com/zingchart.min.js")}}></script>
    <!-- Laravel Chart script-->
    <script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js")}} charset="utf-8"></script>

    <title>Dashbison-Admin </title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
          rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body>

{{--    <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">--}}
{{--        <ul class=" navbar-nav ml-auto">--}}
{{--            <!-- Messages -->--}}
{{--            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">--}}
{{--                <form class="form-inline mr-auto w-100 navbar-search">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-primary" type="button">--}}
{{--                                <i class="fas fa-search fa-sm"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                <a class="nav-link dropdown-toggle" href="{{route('dashbord_index')}}" id="messagesDropdown" role="button">--}}
{{--                    <i class="fas fa-envelope fa-fw"></i>--}}
{{--                    <!-- Counter - Messages -->--}}
{{--                    <span class="badge badge-danger badge-counter">Home</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <!--  Menus  Alerts -->--}}
{{--            <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="fas fa-bell fa-fw"></i>--}}
{{--                    <!-- Alerts -->--}}
{{--                    <span class="badge badge-danger badge-counter">3+</span>--}}
{{--                </a>--}}
{{--                <!--contenue Menus Alerts  Notification -->--}}
{{--                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">--}}
{{--                    <h6 class="dropdown-header"> Notification</h6>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="mr-3">--}}
{{--                            <div class="icon-circle bg-primary">--}}
{{--                                <i class="fas fa-file-alt text-white"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="small text-gray-500">December 12, 2019</div>--}}
{{--                            <span class="font-weight-bold">A new monthly report is ready to download!</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="mr-3">--}}
{{--                            <div class="icon-circle bg-success">--}}
{{--                                <i class="fas fa-donate text-white"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="small text-gray-500">December 7, 2019</div>--}}
{{--                            $290.29 has been deposited into your account!--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="mr-3">--}}
{{--                            <div class="icon-circle bg-warning">--}}
{{--                                <i class="fas fa-exclamation-triangle text-white"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="small text-gray-500">December 2, 2019</div>--}}
{{--                            Spending Alert: We ve noticed unusually high spending for your account.--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <!-- Nav Item - Messages -->--}}
{{--            <li class="nav-item dropdown no-arrow mx-1">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <i class="fas fa-envelope fa-fw"></i>--}}
{{--                    <!-- Counter - Messages -->--}}
{{--                    <span class="badge badge-danger badge-counter">7</span>--}}
{{--                </a>--}}
{{--                <!-- Messages -->--}}
{{--                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">--}}
{{--                    <h6 class="dropdown-header">--}}
{{--                        Message Center--}}
{{--                    </h6>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="dropdown-list-image mr-3">--}}
{{--                            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">--}}
{{--                            <div class="status-indicator bg-success"></div>--}}
{{--                        </div>--}}
{{--                        <div class="font-weight-bold">--}}
{{--                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I ve been having.</div>--}}
{{--                            <div class="small text-gray-500">Emily Fowler · 58m</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="dropdown-list-image mr-3">--}}
{{--                            <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">--}}
{{--                            <div class="status-indicator"></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>--}}
{{--                            <div class="small text-gray-500">Jae Chun · 1d</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="dropdown-list-image mr-3">--}}
{{--                            <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">--}}
{{--                            <div class="status-indicator bg-warning"></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="text-truncate">Last month s report looks great, I am very happy with the progress so far, keep up the good work!</div>--}}
{{--                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="#">--}}
{{--                        <div class="dropdown-list-image mr-3">--}}
{{--                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">--}}
{{--                            <div class="status-indicator bg-success"></div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren t good...</div>--}}
{{--                            <div class="small text-gray-500">Chicken the Dog · 2w</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <div class="topbar-divider d-none d-sm-block"></div>--}}
{{--            <!-- User Information -->--}}
{{--            <li class="nav-item dropdown no-arrow">--}}
{{--                <ul>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <div>--}}
{{--                            <a class="mt-2 btn" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                               document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <!-- Dropdown - User Information -->--}}
{{--                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">--}}
{{--                    <a class="dropdown-item" href="#">--}}
{{--                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                        Profile--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item" href="#">--}}
{{--                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                        Settings--}}
{{--                    </a>--}}
{{--                    <a class="dropdown-item" href="#">--}}
{{--                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                        Activity Log--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">--}}
{{--                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                        Logout--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
    @yield('dashMain')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{{--    <script>--}}
{{--        import InterventionsChart from "../../js/components/interventionsChart";--}}
{{--        import BlocChartIntervention from "../../js/components/blocChartIntervention";--}}

{{--        export default {--}}
{{--            components: {BlocChartIntervention, InterventionsChart}--}}
{{--        }--}}
{{--    </script>--}}
</body>
</html>

