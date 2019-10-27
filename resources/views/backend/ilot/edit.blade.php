@extends('backend')
@section ('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Modifier un produit</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary">Lister les produits</button>
                </div>
                <button class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    Nouveau
                </button>
            </div>
        </div>
{{--        mise a jours de la page--}}
        <form action="{{route('backend_ilot_update')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nom">Nom du produit</label>
{{--               F.Edite     appel de la variable en préremplissage : value='{{#}}'--}}
                    <input type="text" class="form-control" id="nom" name="nom" value="{{$batiment->nom}}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="prix_ht">PRIX H.T</label>
                    <input type="number" class="form-control" id="prix_ht" name="prix_ht" value="{{$batiment->numero}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="prix_ht">Qté</label>
                    <input type="number" class="form-control" id="qte" name="qte" value="{{$batiment->etage}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="photo_principale">Photo du produit</label>
                    <input type="file" class="form-control-file" id="photo_principale" name="photo_principale">
                </div>
                <div class="col-md-4">

                </div>

            </div>


            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </main>
@endsection
