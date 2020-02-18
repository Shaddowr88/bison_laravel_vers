@extends('layouts/dashAdmin')
@section('dash')
	@if (session('notice'))

		<div class="alert alert-success " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="alert-heading">{{ session('notice') }}</h4>
			<hr>
{{--            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>--}}
		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

	@endif
	<div class="col-xl-7 col-xs-6 col-md-6 mb-4">
	<div class="row">
		<div class="col-12 mb-2 ">
			<div>
				<div class="card-header">
					<div class="row">

						<div class="col-sm-7 text-left">
							<h5 class="card-category"></h5>
							<h2 class="card-title">Liste batiment</h2>
                        </div>

						@if ($errors->any())
							<div class="alert-danger">
								@foreach($errors->all() as $error)
									<p> {{$error}} </p>
								@endforeach
							</div>
                        @endif



					</div>
				</div>
				<div class="card-body m-2">
					<table class="table table-striped table-sm text-center ">
						<thead class="table-dark">
						<tr class="text-center">

							<th>Batiment</th>
							<th>Ville</th>
							<th></th>
							<th>Actions</th>
						</tr>
						</thead>
						<tbody>
						@foreach($copros as $copro)
							<tr>
								<td class="">
									<a href="{{route('backend_viewByAppartement',
									['id'=>$copro->id]) }}">{{$copro->name}}</a></td>
								<td>{{$copro->ville}} {{$copro->cp}}</td>
								<td></td>
								<td>
									<a href="{{route('backend_edit',['id'=>$copro->id])}}"
									   class="btn btn-sm btn-primary">Modifier</a>
{{--                                    <a href="#" class="btn btn-sm btn-outline-primary">propriétaires</a>--}}
									<a onclick="return(confirm('sans regret ? '))" href="{{route('backend_ilot_delete',
									['id'=>$copro->id]) }}" class="btn btn-sm btn-danger">Supprimer</a>

								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				</ul>
				{{$copros->links()}}
					</div>
				</div>
			</div>
        </div>

<div class="row mt-4">

		<div class="col-lg-5 col-md-6 ">
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
		<div class="col-lg-5 col-md-6">
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

		<div class="col-lg-5 col-md-6">
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


		<div class="col-lg-5 col-md-6">
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
</div>
@endsection
