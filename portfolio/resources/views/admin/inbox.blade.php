@extends('layout')
@section('title', 'Inbox')
	@section('content')
		<a href="{{url('/admin')}}" class="btn btn-info btn-sm right">
			<span class="glyphicon glyphicon-chevron-left"></span> Retour Accueil Administration
		</a>
		
		<section id="indox">
			<div class="container-fluid">
				<div class="container">
					<div class="jumbotrn row">

						<div class="col-md-8 col-md-offset-2">
					        @if (session('message'))
					            <div class="alert alert-success">
					                {{ session('message') }}
					            </div>
					        @endif

					    <h1>Boite de Réception</h1><br>

								<table style="width=100%">
									<thead>
										<tr> 
											<th>Utilisateur</th>
											<th>Numéro</th>
											<th>E-Mail</th>
											<th>Message</th>
											<th>Supprimer</th>
	                          				
										</tr>
									</thead>

										@foreach($mail as $value)
											<tr>
													<td>{{$value->name}}</td>
													<td>{{$value->telephone}}</td>
													<td>{{$value->mail}}</td>
													<td>{{$value->message}}</td>
													<td><a href="{{ route('destroy_inbox', array('id'=>$value->id))}}" class="supprimer btn btn-danger">Supprimer</a></td>
											</tr>
									@endforeach
								</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endsection
