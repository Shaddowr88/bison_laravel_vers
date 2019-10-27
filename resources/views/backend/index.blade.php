@extends('layouts/dash')
@section('dash')
<!-- EMPLACEMENT PICT + CALLENDIER -->
            <div class="col-xl-3 col-md-6 mb-4 mt-7">
              <div class="mt-6">


                <div id="calMain"> </div>
              <div>
              <p>Sed ut tum ad senem senex de senectute, sic hoc libro ad amicum amicissimus scripsi de amicitia.
              Tum est Cato locutus, quo erat nemo fere senior temporibus illis, nemo prudentior.</p>
              </div>
              <div class="col-xl-3 col-md-6 mb-4"> </div>
<tr>
              <div class="row row-striped">
              			<div class="col-1 text-right mr-3 ">
              				<h1 class=""><span class="badge badge-secondary">23</span></h1>
              				<h2>OCT</h2>
              			</div>
              			<div class="col-10 ">

              				<ul class=>
              				<a class="text-uppercase"><strong>Ice Cream Social</strong></a>
              				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
              					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
              					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe</li>
              				</ul>

              			</div>
              			<p>Lorem ipsum dolsit amet, consectetur adipiscing elit,
                                            				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              		</div>
           </div>
             <div class="col-xl-3 col-md-6 mb-4"> </div>
         </div>

<!-- EMPLACEMENT TAB -->

        <div class=" card  shadow col-xl-8 col-md-6 mb-4">
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
                <div class="col-xl-8">
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
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
        </div>
@endsection
