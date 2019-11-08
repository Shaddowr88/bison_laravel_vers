@extends('layouts/dash')
@section('dash')
<script src="{{asset('js/zingchart.min.js')}}"></script>
<!-- EMPLACEMENT PICT + CALLENDIER -->
<div class="col-xl-3 col-md-6 mb-4 mt-7">
    <div class="mt-6">
        <div id="calMain"> </div>

        <div>

        <p> </p>


         </div>

        <div class="col-xl-3 col-md-6 mb-4"> </div>
            <tr>
        <div class="row row-striped ">
            <div class="col-1 text-right mr-3 ">
            <h1 class=""><span class="badge badge-secondary">23</span></h1>
            <h2>OCT</h2>
        </div>
      <div class="col-10 ">
            <div id='myChart'> </div>
       <!-- <ul>
       <!--     <a class="text-uppercase"><strong>Ice Cream Social</strong></a> -->
       <!--     <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li> -->
       <!--     <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li> -->
       <!--     <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe</li> -->
       <!-- </ul> -->
    </div>








<!--Menus deroulant message-->
<div class="accordion col-11" id="accordion">


      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Contacts
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">


          <div class="card-body">
            <ul class="nav-item">
                       <li> <a class="collapse-item" href="utilities-color.html">Syndic</a></li>
                       <li> <a class="collapse-item" href="utilities-border.html">prestataire</a></li>
                       <li> <a class="collapse-item" href="utilities-animation.html">numero utiles</a></li>
                     </ul>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Documents
            </button>
          </h2>
        </div>


        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
             <ul class="nav-item">
                        <li><a class="collapse-item" href="utilities-color.html">Relevés de charges</a></li>
                        <li><a class="collapse-item" href="utilities-border.html">Assemblée générale</a></li>
                        <li><a class="collapse-item" href="utilities-animation.html">Règlementations</a></li>
                        </ul>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Comment effacer mon compte ?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
            Un bouton est proposé dans ce but dans les paramètres de votre profil, une fois connecté.
          </div>
        </div>
      </div>
      </div>

</div>
</div>
</div>

<!-- EMPLACEMENT TAB -->

<div class=" col-xl-8 col-md-6 mb-4" height="100">
    <div class="py-3">
    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
</div>

<div class="card-body">

<ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
              <a class= id="home-tab" data-toggle="tab" href="#home"
              role="tab" aria-controls="home">Home</a>
              <p></p> </div>
          </li>

          <div class="col-xl-10" >
              <tr>

                <td class="title-dark" width="100"  >Emeteur</td>

              </tr>

                  <p>Quam ob rem circumspecta cautela observatum est deinceps et cum edita montium
                  petere coeperint grassatores, loci iniquitati milites cedunt. ubi autem in
                  planitie potuerint reperiri, quod contingit adsidue, nec exsertare lacertos nec
                  crispare permissi tela, quae vehunt bina vel terna, pecudum ritu inertium
                  trucidantur.Alios autem dicere aiunt multo etiam inhumanius
                  (quem locum breviter paulo ante perstrinxi) praesidii adiumentique causa,
                  non benevolentiae neque caritatis, amicitias esse expetendas; itaque,
                  ut quisque minimum firmitatis haberet minimumque virium, ita amicitias appetere
                  maxime; ex eo fieri ut mulierculae magis amicitiarum praesidia quaerant quam
                  viri et inopes quam opulenti et calamitosi quam ii qui putentur beati.

                  Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque
                  feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam
                  gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores
                  rati intempestivum anceps subire certamen cum haut longe muri distarent,
                  quorum tutela securitas poterat in solido locari cunctorum.</p>
          </div>
     </ul>

</div>

@endsection


<script src="{{asset('js/calendar.js')}}"></script>

