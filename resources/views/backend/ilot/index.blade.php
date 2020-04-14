@extends('layouts/dashAdmin')
@section('dash')
    @if (session('notice'))
{{--        Auto dismiss message script--}}


        <div class=" modal fade alert alert-success col-6 mt-5"
             role="alert">
            <h4 class="alert-heading">{{ session('notice') }}</h4>
            <hr>
        </div>
        <div class="modal fade"
             id="exampleModal"
             tabindex="-1"
             role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="exampleModalLabel">Modal title</h5>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal">Close
                        </button>
                        <button type="button"
                                class="btn btn-primary">Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="row">
            <div class="col-12 mb-2 ">
                <div>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <h5 class="card-category"></h5>
                                <h2 class="card-title">batiments</h2>
                            </div>
                            @if ($errors->any())
                                <div class="alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p> {{$error}} </p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    <table class="table-sm table-striped table-sm text-center ">
                        <thead class="#" >
                        <tr class="text-center"
                            style="text-transform: capitalize">
                            <th class="w-25 p-1"></th>
                            <th>Batiment</th>
                            <th>Etage</th>
                            <th>Adresse</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($batiments as $batiment)
                            <tr>
                                <td style="background: whitesmoke">
                                    <a href="{{route('backend_viewByBatiment',['id'=>$batiment->id]) }}">
                                        <img class="w-50 rounded"
                                             src="{{asset('storage/uploads/'.$batiment->photo_principale)}}"
                                             alt="{{$batiment->nom}}">
                                    </a>
                                </td>
                                <td>
                                    <a style="
                                        text-transform: capitalize;
                                        text-decoration: none;
                                        text-align-last: left;"
                                       href="{{route('backend_viewByBatiment',['id'=>$batiment->id]) }}">
                                        {{$batiment->nom}}
                                    </a>
                                </td>
                                <td>{{$batiment->etage}}</td>
                                <td>{{$batiment->adresse}}</td>
                                <td style="background: whitesmoke; margin-left: 4em;" >
{{--                                    <button type="button" class="btn btn-secondary"--}}
{{--                                            data-container="body" data-toggle="popover"--}}
{{--                                            data-placement="left"--}}
{{--                                            data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">--}}
{{--                                        Popover on left--}}
{{--                                    </button>--}}
                                    <div class="row">
                                    <a href="{{route('backend_edit',['id'=>$batiment->id])}}"
                                       class="btn align-middle">Modifier</a>
                                    </div>
                                    <div class="row">
                                    <a onclick="return(confirm('sans regret ? '))"
                                       href="{{route('backend_ilot_delete',['id'=>$batiment->id]) }}"
                                       class="btn align-middle">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5" >
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-warning">
                                <i class="tim-icons icon-chat-33"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Prestataire</p>
                                <h3 class="card-title">15</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($budgets as $budget)
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div   class=" col-8  btn" data-toggle="modal" data-target="#exampleModal">
                            <div class="numbers">
                                <p class="card-category">Budget</p>
                                <h3 class="card-title"> {{$budget->budget}} €</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                         role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
{{--@foreach($budgets as $budget)--}}
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div   class=" col-7  btn" data-toggle="modal" data-target="#exampleModal">
                            <div class="numbers">
                                <p class="card-category">Intervention</p>

                                <h3 class="card-title">3</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1"
                         role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
{{--                                    {{$budgets}}--}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
{{--    @endforeach--}}
    </div>


    <script>
        $("document").ready(function(){
            setTimeout(function(){
                // $("div.alert").animate({left: '250px'});
                $("div.alert").remove();
            }, 2000 ); // 2 secs
        });

        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        $(function () {
            $('.example-popover').popover({
                container: 'body'
            })
        })
    </script>
@endsection
