@extends('layouts/dashAdmin')
@section('dash')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <h1 class="h2">Modifier le Batiment </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_viewByCopro',['id'=>$batiment->copro_id])}}" >Lister les batiments</a>
                </div>
                <a class="btn btn-sm btn-outline-secondary" href="{{route('backend_add')}}">
                    <span data-feather="calendar"></span>
                    Nouveau
                </a>
            </div>
        </div>
        <form action="{{route('backend_ilot_update',['id'=>$batiment->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="nom"></label>
                    <input placeholder="Nom du batiment"  type="text" class="form-control" value="{{$batiment->nom}}" id="nom" name="nom">
                </div>

                <div class="form-group col-md-2">
                    <label for="numero"></label>
                    <input placeholder="Numero" type="text" class="form-control" value="{{$batiment->numero}}" id="numero" name="numero">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="adresse">Adresse</label>
                    <textarea type="text" class="form-control" name="adresse" id="adresse">{{$batiment->adresse}}</textarea>
                </div>


                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 col-md-12">
                                        <h1 class="h2">P. Communes</h1>
                                    </div>
                                    <div class="form-group col-md-12">
                                       <select multiple class="form-control form-control-lg" id="parties" name="parties[]">

                                               @foreach($parties as $partie)
                                                   @if(in_array($partie->id,$parties_id))
                                                       <option selected value="{{$partie->id}}">{{$partie->nom}}</option>
                                                   @else
                                                       <option value="{{$partie->id}}">{{$partie->nom}}</option>
                                                   @endif
                                               @endforeach
                                       </select>
                                    </div>
                                </div>


            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produits_recommandes"></label>

                </div>
            </div>
        </form>
    </main>
        @endsection

