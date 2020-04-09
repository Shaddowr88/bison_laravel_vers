@extends('layouts/user')
@section('dash')
    <div class="pr-5" id="app" type="module">
        <div class="row ">
            <div  class="col-11">
                 <grafi-component
                         v-bind:labels="month"
                         v-bind:budget-count-data="budgetCountData"
                 >

                 </grafi-component>
            </div>
        </div>
        <div class="row d-flex p-2 bd-highlight">
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
                <block-chard></block-chard>
            </div>
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
                <interv-component></interv-component>
            </div>
            <div class="card m-4 col-3 d-flex p-2 bd-highlight">
                <block-chard/>
            </div>
        </div>
    </div>
@endsection


