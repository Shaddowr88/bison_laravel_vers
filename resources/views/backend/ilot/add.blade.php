@extends('layouts/dashAdmin')
@section('dash')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Ajouter un Batiment</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary" href="{{route('backend_homepage')}}" >Lister les batiments</button>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary">
                        <span data-feather="calendar"></span>
                        Nouveau
                    </button>
                </div>
            </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom"></label>
                        <input placeholder="Nom du batiment" type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prix_ht"></label>
                        <input placeholder="Numero" type="text" class="form-control" id="prix_ht" name="prix_ht">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prix_ht">Etage</label>
                        <input type="text" class="form-control" id="prix_ht" name="prix_ht">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="description">Adresse</label>
                        <textarea type="text" class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="form-row">
                                         <div class="form-group col-md-12">
                                             <label for="category_id">ville</label>
                                             <select class="form-control form-control-lg" id="category_id" name="category_id">
                                                 <option>78300 </option>
                                                 <option>78450 </option>
                                                 <option>98600 </option>
                                                 <option>98300 </option>
                                                 <option>75010 </option>
                                                 <option>98300 </option>
                                                 <option>94500 </option>
                                                 <option>97230 </option>
                                             </select>
                                      </div>
                </div>
               <div class="form-row">
                           <h1 class="h2">Parties communes</h1>
                                       <div class="form-group col-md-12">
                                           <label for="description">Denomination</label>
                                           <textarea type="text" class="form-control" name="description" id="description"></textarea>
                                       </div>
                                       <div class="form-group col-md-6">
                                            <label for="nom">types</label>
                                            <input type="text" class="form-control" id="nom" name="nom">
                                       </div>

               </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="produits_recommandes">Produits recommandés</label>
                        <select multiple class="form-control" name="produits_recommandes" id="produits_recommandes">
                            <option>equipement electrique</option>
                            <option>equipement thermique</option>
                            <option>equipement telecom</option>
                            <option>equipement hydrolique</option>
                            <option>equipement vegetal</option>
                            <option>equipement televisuel</option>
                            <option>equipement air</option>
                            <option>equipement incendie</option>
                        </select>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </main>


        @endsection
