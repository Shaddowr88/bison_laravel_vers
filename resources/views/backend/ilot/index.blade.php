@extends('layouts/dashAdmin')
@section('dash')
    <div class="col-xl-12 col-md-6 mb-4">
    <div class="row">
        <div class="col-12 mb-2 ">
            <div class="card card-chart">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Total fond</h5>
                            <h2 class="card-title">Performance</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                {{--                                <label class="btn btn-sm btn-primary btn-simple active" id="0">--}}
                                {{--                                    <input type="radio" name="options" checked="">--}}
                                {{--                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>--}}
                                {{--                                    <span class="d-block d-sm-none">--}}
                                {{--                          <i class="tim-icons icon-single-02"></i>--}}
                                {{--                        </span>--}}
                                {{--                                </label>--}}
                                {{--                                <label class="btn btn-sm btn-primary btn-simple" id="1">--}}
                                {{--                                    <input type="radio" class="d-none d-sm-none" name="options">--}}
                                {{--                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>--}}
                                {{--                                    <span class="d-block d-sm-none">--}}
                                {{--                          <i class="tim-icons icon-gift-2"></i>--}}
                                {{--                        </span>--}}
                                {{--                                </label>--}}
                                {{--                                <label class="btn btn-sm btn-primary btn-simple" id="2">--}}
                                {{--                                    <input type="radio" class="d-none" name="options">--}}
                                {{--                                    <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>--}}
                                {{--                                    <span class="d-block d-sm-none">--}}
                                {{--                          <i class="tim-icons icon-tap-02"></i>--}}
                                {{--                        </span>--}}
                                {{--                                </label>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-sm ">
                        <thead class="table-dark">
                        <tr>

                            <th>ID</th>
                            <th>Batiment</th>
                            <th>Etage</th>
                            <th>Adresse</th>
                            <th></th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($batiments as $batiment)
                            <tr>
                                <td>{{$batiment->id}}</td>
                                <td>{{$batiment->nom}}</td>
                                <td>{{$batiment->etage}}</td>
                                <td>{{$batiment->adresse}}</td>
                                <td></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Voir / Modifier</a>
                                    <a href="#" class="btn btn-sm btn-outline-primary">gérer les tailles</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </ul>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-primary">
                                <i class="tim-icons icon-shape-star"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">intervention</p>
                                <h3 class="card-title">45</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-success">
                                <i class="tim-icons icon-single-02"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category">Due</p>
                                <h3 class="card-title">150</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="info-icon text-center icon-danger">
                                <i class="tim-icons icon-molecule-40"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="numbers">
                                <p class="card-category"> Année </p>
                                <h3 class="card-title">12</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
