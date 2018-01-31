@extends('layout')
@section('title', 'Bienvenue sur mon Portfolio')
@section('content')
	<section>
		<div class="jumbotrn">
		    <h1>Bienvenue sur mon Portfolio</h1>

				<span id="date_heure"></span>
            		<script> window.onload = date_heure('date_heure');</script>
					

		  	<div id="presentation">
		  		<h2>Steve Lormelet</h2>
		  		<img src="{{asset('img/steve.png')}}">
		  	</div>
		  	<a href="{{url('/porfolio')}}" class="myButton">Voir plus</a>
		</div>
	</section>

	<section class="compteur">
		
			<?php
				session_start();
					
					if(file_exists('compteur_visites.txt'))
					{
				        $compteur_f = fopen('compteur_visites.txt', 'r+');
				        $compte = fgets($compteur_f);
					}

					else
					{
				        $compteur_f = fopen('compteur_visites.txt', 'a+');
				        $compte = 0;
					}

					if(!isset($_SESSION['compteur_de_visite']))
					{
				        $_SESSION['compteur_de_visite'] = 'visite';
				        $compte++;
				        fseek($compteur_f, 0);
				        fputs($compteur_f, $compte);
					}
				fclose($compteur_f);
				echo '<strong>'.$compte.'</strong> visites';
			?>

		<aside>
			<a href="https://www.facebook.com/FooteuxOlympienNumeroTreize" target="_blank"><i class="fa fa-facebook-square fa-5x left" aria-hidden="true"></i></a>

			<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.aformac-vichy-app10.ovh/" target="_blank"><i class="fa fa-share-alt fa-5x right" aria-hidden="true"></i></a>
		</aside>
	</section>
@endsection
