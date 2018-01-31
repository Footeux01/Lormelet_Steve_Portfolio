@extends('layout')
@section('title', 'Compétence')
@section('content')
<section class="jumbotrn">
	<h1>Compétences Techniques</h1>
	<a id="github" href="https://github.com/Footeux01"><img width="60px" src="{{asset('img/logogithub.svg')}}"/></a>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<form method="post" action=" ">
			       <label for="langageclient">Langage de Programmation :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'programme')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>


					<label for="librairies">Librairies :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'librairies')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>

				    <label for="framework">Framework Serveur :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'serveur')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				</form>						
			</div>
			<div class="col-md-3">
				<form method="post" action=" ">
			       <label for="design">Design &amp; Marketting :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'design')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
					<label for="serveur">Serveur Web :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'serveurweb')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>							      
				    <label for="cms">CMS :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'cms')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				</form>							
			</div>
			<div class="col-md-3">
				<form method="post" action=" ">
			       <label for="client">Framework Client :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'client')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
					<label for="langageserveur">Serveur Web :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'serveurweb')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				    <label for="bureautique">Bureautique :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'bureautique')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				</form>	
			</div>
			<div class="col-md-3">
				<form method="post" action=" ">
					<label for="outils">Outils :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'outils')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				</form>
				<form method="post" action=" ">
					<label for="donnees">Données :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'donnees')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				</form>
				<form method="post" action=" ">
					<label for="os">OS :</label>
						<ul>
							@foreach($skill as $key => $value)
                        @if($value['group_of_competence'] == 'os')
                            <li>{{$value['competence']}}: {{$value['level']}}%</li>
                        @endif
                    @endforeach
						</ul><br>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection