@extends('layouts/dashAdmin')
@section('dash')
    @if (session('notice'))

        <script>
            $("document").ready(function(){
                setTimeout(function(){
                    // $("div.alert").animate({left: '250px'});
                    $("div.alert").remove();
                }, 2000 ); // 2 secs
            });
        </script>

        <div class="alert alert-success " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            <h4 class="alert-heading">{{ session('notice') }}</h4>

            {{--            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>--}}
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <div class="col-xl-12 col-xs-6 col-md-6 ">

        <div class="row">
            <div class="col-12 mb-2 ">
                <div class="col-xl-10">
                    <div>
                        <div class="row mt-5">
                            <div class="col-xl-12  col-sm-7 text-left">
                                <h5 class="card-category"></h5>
                                <h2 class="card-title mt-6">Liste des Co-pro</h2>
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
                    <a class="btn btn-dark" href="{{route('coPro_add')}}">Ajouter</a>
                    <div class="row mt-4">
                        @foreach($copros as $copro)
                            <div class="col-lg-4 col-md-6 mb-5 ">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="info-icon text-center icon-warning">
                                                    <i class="tim-icons icon-chat-33"></i>
                                                    <div class="info-icon text-center icon-warning">
                                                        <a>
                                                            <img style="height: 10rem;" class="card-img h-rounded"
                                                                 src="{{asset('storage/uploads/'.$copro->photo_principale)}}"
                                                                 alt="{{$copro->name}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="numbers">
                                                    <a href="{{route('backend_viewByCopro',['id'=>$copro->id]) }}">
                                                        <strong>{{$copro->name}}</strong>
                                                    </a>
                                                    <h4 class="card-title">{{$copro->ville}} <br> {{$copro->cp}}</h4>
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
                                </div>
                            </div>
                        @endforeach
                    </div>
              {{$copros->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
