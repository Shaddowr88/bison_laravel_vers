@extends ('layouts/dash')
@section('dashMain')
  <div id="wrapper" >
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion align-items-center" style="list-style: none;"
        id="accordionSidebar">
      <!-- Sidebar - Brand -->

      <div class="mt-5 btn-group dropright">
        <button type="button" style="color:white" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <a style="font-max-size: 70px">{{ Auth::user()->name }}</a>
        </button>
        <div class="dropdown-menu justify-content-center">
          <a class=" btn ml-3" href="{{ route('logout') }}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-align: center">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
      <!--Nav Item - Dashboard -->
      <li class="nav-item active" style="list-style: none;">
        <a class="nav-link" href="#">
          </a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
        <a class="btn-light btn-circle mb-2 float-right p-2"  href="{{route('backend_homepage')}}">
          <!-- menus de navigation -->
          <ion-icon name="list-circle-sharp" size="large" data-toggle="tooltip" data-placement="left" title="Liste de copropriété" ></ion-icon>
        </a>
      <hr>
      <!-- Nav Item - Utilities Collapse Menu Messages -->
      <li class="nav-item">
        <a class="nav-link collapsed position-relative" href="#" data-toggle="collapse" data-target="#message"
           aria-expanded="true" aria-controls="message">
          <i class="fas fa-fw fa-folder position-relative float-lg-right">
            <!-- menus de navigation -->
{{--            <ion-icon name="paper-plane" size="large" data-toggle="tooltip" data-placement="left" title="Ajouter un nouveau bâtiment" ></ion-icon>--}}
          </i>
          Message
        </a>
        <div id="message" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('Books_index')}}">Utilisateur</a>
            <a class="collapse-item" href="{{route('Books_syndic')}}">Syndic</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu Evenements-->
      <li class="nav-item">
        <a class="nav-link collapsed position-relative" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder position-relative float-lg-right">
              <!-- menus de navigation -->
{{--              <ion-icon name="book" size="large" data-toggle="tooltip" data-placement="left" title="Ajouter un nouveau bâtiment" ></ion-icon>--}}
            </i>
          Annuaire
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('Books_index')}}">Utilisateur</a>
            <a class="collapse-item" href="{{route('Books_syndic')}}">Syndic</a>
            <a class="collapse-item" href="{{route('Books_prestataire')}}">Prestataire</a>
            <a class="collapse-item" href="{{route('Books_other')}}">Numeros utiles</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu document -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsedoc"
           aria-expanded="true" aria-controls="collapsedoc">
          <i class="fas fa-fw fa-folder position-relative float-lg-right">
            <!-- menus de navigation -->
{{--            <ion-icon name="documents" size="large" data-toggle="tooltip" data-placement="left" title="Ajouter un nouveau bâtiment" ></ion-icon>--}}
          </i>
          Documents
        </a>
        <div id="collapsedoc" class="collapse" aria-labelledby="headingDoc" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="login.html">Courrier</a>
            <a class="collapse-item" href="register.html">Reglement</a>
            <a class="collapse-item" href="forgot-password.html">Notice</a>
          </div>
        </div>
      </li>
    </ul>
    <div style="background: white;">
      @yield('dash')
    </div>
  </div>
  <script>
    $('#myCollapsible').collapse('hide');
    //$('#myCollapsible').collapse({ toggle: false });
    $('.dropdown-toggle').dropdown()
  </script>
@endsection