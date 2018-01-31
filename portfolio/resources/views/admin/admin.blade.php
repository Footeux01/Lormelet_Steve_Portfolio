<!DOCTYPE html>
	<html lang="fr">
		<head>
			<title>Administration de mon Portfolio</title>
			<meta charset="utf-8">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

			<style>@import url('https://fonts.googleapis.com/css?family=Berkshire+Swash');
			</style> 
			<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>

		<body>
			<section id="admin">
				<div class="container-fluid">
					<div class="container">
						<div class="jumbotrn row">
						    <h1>Administration de mon Portfolio</h1>
						  	
								<div class="col-md-2">
						  			<a href="{{url('/admin_inbox')}}" class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span> Boîte de Réception</a>
						  		</div>

						  		<div class="col-md-2">
						  			<a href="{{url('/skills')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Compétence </a>
						  		</div>

						  		<div class="col-md-2">
						  			<a href="{{url('/experiences')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Expérience </a>
						  		</div>

						  		<div class="col-md-2">
						  			<a href="{{url('/formations')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Formation </a>
						  		</div>

						  		<div class="col-md-2">
						  			<a href="{{url('/projets')}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Projet </a>
						  		</div>

						  		<div class="col-md-2">
						  			<a href="{{url('/admin_user_search')}}" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Recherche d'utilisateur</a>
						  		</div>
						</div>
					</div>
				</div>
			</section>


		</body>

		<footer>
			<div class="container-fluid">
				<div class="row">
					<p>Steve Lormelet - inexistante-production.fr - Copyright © 2018 </p>
				</div>
			</div>
		</footer>
		
	</html>