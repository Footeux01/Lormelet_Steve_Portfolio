@extends('layout')
@section('title', 'Contact')
@section('content')
<section class="jumbotrn">
	<h1>Contactez-moi facilement !</h1>
	<div class="container-fluid">
		<div class="container">

			<div class="row">
							
					<div class="col-md-4 meteo">

						<div id="ville"></div>
						<div id="temperature"></div>
						<img id="icon" src="" width="50px">
						<div id="description"></div>
						<!-- <div id="sunrise"></div>
						<div id="sunset"></div> -->
					</div>
						<br>
					<div class="col-md-4">
						@if (session('message'))
						    <div class="alert alert-success">
						        {{ session('message') }}
						    </div>
						@endif
					<form class="formulaire" method="POST" action="{{url('/contact')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<label>Nom / Pseudo :</label>
						<input type="text" name="name" required><br>
						<label>E-mail :</label>
						<input type="text" name="mail" required><br>
						<label>Téléphone :</label>
						<input type="text" name="telephone" required><br>
						<label>Message :</label>
						<textarea name="message"></textarea><br>

						<div class="row">
							<div class="col-md-12">
								<input class ="btn btn-primary btn-lg" type="submit" id="valid" value="Envoi"/>
								<div id="result"></div>
							</div>
						</div>
					</form>
				</div>	
					<br>
				<div class="col-md-4 contact">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.0240048564606!2d2.7448703150811813!3d46.28949728601623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f0b1d49a9d813b%3A0xd18218384e6f4c0a!2s87+Rue+J+Jacques+Rousseau%2C+03600+Commentry!5e0!3m2!1sfr!2sfr!4v1513350985532" width="300" height="300" frameborder="10" style="border:5" allowfullscreen></iframe><br>
					<p>E-mail : <a href="mailto:Lormelet01@hotmail.fr">Lormelet01@hotmail.fr</a></p>
					<p>Téléphone : <a href="09-66-94-34-83">09 66 94 34 83</a></p>
				</div>
					<br>
			</div>
		</div>	
	</div>	
</section>
            <script src="{{asset('js/meteo.js')}}"></script>
@endsection