@extends('layouts/dash')
@section('dash')
<!-- EMPLACEMENT PICT + CALLENDIER -->
<div class="container">
    <div class="row">
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Objet</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="invalid-feedback">
                        #
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">etage</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choisir</option>
                            <option>4</option>
                        </select>
                        <div class="invalid-feedback">
                            Sélectionner un étage.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Urgence</label>
                </div>
                <hr class="mb-4">
                <div class="row">
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">validé</button>
            </form>
        </div>
    </div>

</div>
@endsection
