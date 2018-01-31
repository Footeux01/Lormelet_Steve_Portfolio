@extends('layout')
@section('title', 'Réalisation')
@section('content')
<section class="jumbotrn">
	<h1>Projets Réalisés</h1>
		<div class="container"> 
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      {{-- <li data-target="#myCarousel" data-slide-to="5"></li>
		      <li data-target="#myCarousel" data-slide-to="6"></li>
		      <li data-target="#myCarousel" data-slide-to="7"></li>
		      <li data-target="#myCarousel" data-slide-to="8"></li> --}}
		    </ol>
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
			    	@foreach($projet as $key => $value)
			      		<div class="item @if($key == 1) active @endif">
			        	<img src="/img/{{$value['image']}}"  alt="{{$value['titre']}}" style="width:100%;">

			      		<div>{{$value['title']}}</div>
			    		<div>{{$value['description']}}</div>
			      		</div>
			      		
			      	@endforeach		    
			</div>
			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Précédent</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Suivant</span>
			    </a>
			</div>
		</div>		
</section>
@endsection