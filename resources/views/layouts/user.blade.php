@extends ('layouts/dash')
@section('dashMain')
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
        <div class="col-md-8" height="100%">
            @yield('dash')
        </div>
  </div>
</div>
@endsection