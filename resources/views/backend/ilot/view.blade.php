@extends('layouts/dashAdmin')
@section('dash')

   <div class="row">

   </div>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

        <div class="card mb-3 p-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                <h1 class="h2">Batiment {{$batiment->nom}} </h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_homepage')}}" >Lister les batiments</a>
                    </div>
                    <a href="{{route('backend_edit',['id'=>$batiment->id])}}" class="btn btn-sm btn-outline-secondary"> Modifier </a>
                    </a>
                </div>
                </div>
            <div class="card-body" id="parties" name="parties[]">
                <h5 class="card-title">Batiment {{$batiment->nom}}</h5>
                <p class="card-text">{{$batiment->adresse}}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                @foreach($parties as $partie)
                @if(in_array($partie->id,$parties_id))
                        <span  class="badge badge-pill badge-primary">{{$partie->nom}}</span>
                @else
                        <span class="badge badge-pill badge-primary"></span>
                @endif
                @endforeach
{{--@foreach($appartements as $appartement)--}}

{{--                @endforeach--}}


            </div>

        </div>
<div class="row">
            @if ($errors->any())
                <div class="alert-danger col-3">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">LL</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
    </main>
        @endsection
