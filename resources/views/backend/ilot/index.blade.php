@extends('layouts/dash')
@section('dash')
<!-- EMPLACEMENT PICT + CALLENDIER -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="">
              <input type="text" name="date" id="dateField" value="" />
                <div id="calMain"> </div>
              <div>
              <p>Sed ut tum ad senem senex de senectute, sic hoc libro ad amicum amicissimus scripsi de amicitia.
              Tum est Cato locutus, quo erat nemo fere senior temporibus illis, nemo prudentior.</p>
              </div>
              <div class="col-xl-3 col-md-6 mb-4"> </div>
              <div class="card  shadow h-25 py-2">
                <div class="card-body"><input type="button" id="calToogle" value="Calendrier" onclick="calToogle();" />
                </div>
             <div id="calendarWrap">
               <ul>
                 <li>
                   <input type="button" value="«" onclick="calYearNav('-1');" />
                 </li>
                 <li>
                   <input type="button" value="‹" onclick="calMonthNav('-1');" />
                 </li>
                 <li id="calendarTitle"> </li>
                 <li>
                   <input type="button" value="›" onclick="calMonthNav('+1');" />
                 </li>
                 <li>
                   <input type="button" value="»" onclick="calYearNav('+1');" />
                 </li>
               </ul>
               <div id="calendar"></div>
             </div>
           </div>
           </div>
             <div class="col-xl-3 col-md-6 mb-4"> </div>
         </div>

<!-- EMPLACEMENT TAB -->

        <div class=" card  shadow col-xl-8 col-md-6 mb-4">
        <div class="py-3">
          <h6 class="m-0 font-weight-bold text-primary">Ilot</h6>
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class= id="home-tab" data-toggle="tab" href="#home"
                  role="tab" aria-controls="home">Home</a>
                   <p></p> </div>
                </li>
                <div class="col-xl-12 text-align-center">
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
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>
        </div>
@endsection
