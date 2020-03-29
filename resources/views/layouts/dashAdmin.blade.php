@extends ('layouts/dash')
@section('dashMain')
  <div id="wrapper" >
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </div>
      </a>
      <!--Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span></span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
           aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <!-- menus de navigation -->
          <span>Batiment</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('backend_add')}}">Ajouter</a>
            <a class="collapse-item" href="#">Edité</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu Messages -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Message</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href=href="{{route('messages_ask')}}">Message</a>
            <a class="collapse-item" href="{{route('messages_ask')}}">Demandes</a>
            <a class="collapse-item" href="utilities-border.html">Annonces</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu Evenements-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Annuaire</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="{{route('Books_index')}}">Utilisateurs</a>
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
          <i class="fas fa-fw fa-folder"></i>
          <span>Documents</span>
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
    <div class="col-sm">
      @yield('dash')
    </div>
  </div>
@endsection