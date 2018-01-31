@extends('layout')
@section('title', 'En Savoir Plus...')
@section('content')
    <div class="container-fluid">
        <div class="row">
        	<div class="col-md-12">
				<h1>En Savoir Plus</h1><br>
				<h2 class="h2">Identité</h2><br>

					<div class="col-md-4" id="lateral">
						<p><b>NOM :</b> Lormelet</p>
						<p><b>Prénom :</b> Steve</p>
					</div>

					<div class="col-md-4">
						<img src="img/steve.png" alt="Ma Photo De Profil" title="Ma photo de Profil">
					</div>

					<div class="col-md-4" id="lateral">
						<p><b>E-mail :</b> Lormelet01@hotmail.fr</p>
						<p><b>Date de Naissance :</b> Samedi 1er Avril 1995</p>
					</div>

        	<div class="col-md-12">
				<h2 class="h2">Descriptif</h2><br>
					<p>Steve n'est pas grand mais il est attentionné, discret</p>
			</div>
        <div>
    <div>
@endsection