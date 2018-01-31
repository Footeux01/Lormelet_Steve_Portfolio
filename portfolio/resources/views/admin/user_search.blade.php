@extends('layout')
@section('title', 'User_Search')
@section('content')
	<a href="{{url('/admin')}}" class="btn btn-info btn-sm right">
		<span class="glyphicon glyphicon-chevron-left"></span> Retour Accueil Administration
	</a>
<section id="user_search">
	<div class="container-fluid">
		<div class="container">
			<div class="jumbotrn row">
			    <h1 id="search">Recherche d'utilisateur</h1>
	
					<div class="recherche_p">

						<form action="/search" id="searchthis" method="get">
						<input id="search" name="q" type="text" placeholder="Rechercher" />
						<input id="search-btn" type="submit" value="Valider" />
						</form>

					</div>

			</div>
		</div>
	</div>
</section>