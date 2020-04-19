@extends('layouts/dashAdmin')
@section('dash')
    <div class="col-xl-12 p-lg-4">
        <div>
            <div class="row mt-5">
                <div class="col-xl-12  col-sm-7 text-left">
                    <h5 class="card-category"></h5>
                    <h2 class="card-title mt-6">Copropriétés</h2>
                </div>
                @if ($errors->any())
                    <div class="alert-danger">
                        @foreach($errors->all() as $error)
                            <p> {{$error}} </p>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @if (session('notice'))
            <div class="alert alert-success position-relative popover" >
                {{ session('notice') }}
            </div>
        @endif
        <div class=" position-relative ml-5" >
            <a class=" btn " href="{{route('coProMmore')}}">
                <ion-icon name="add-circle-outline"
                          size="large" data-toggle="tooltip"
                          data-placement="right"
                          title="Ajouter une nouvelle copropriété" >
                </ion-icon>
            </a>
        </div>
        <div class="row mt-1 ml-lg-5">
            @foreach($copros as $copro)
                <div class="card m-2 shadow-sm" style="max-width: 35vh;">
                    <div class="row no-gutters align-content-center" href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">
                        <div class="col-md-6">
                            <img src="{{asset('storage/uploads/'.$copro->photo_principale)}}" href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}" class="card-img h-100 " alt="{{$copro->name}}">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title" href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">
                                    <a href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">{{$copro->name}}</a> </h5>
                                <p class="card-text">{{$copro->ville}}</p>
                                <tr>
                                    <td>
                                        <a  href="{{route('backendCoProEdit',['id'=>$copro->id])}}"
                                            class="btn btn-sm btn-primary col-12 mb-2">Modifier</a>
                                        <a onclick="return(confirm('sans regret ? '))"
                                           href="{{route('coProDelete',['id'=>$copro->id]) }}"
                                           class="btn btn-sm btn-danger col-12">
                                            Supprimer
                                        </a>
                                    </td>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="fixed-bottom  position-relative ml-lg-3 " >
        {{$copros->links()}}
    </div>
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                // $("div.alert").animate({left: '250px'});
                $("div.alert").remove();
            }, 2000 ); // 2 secs
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection



