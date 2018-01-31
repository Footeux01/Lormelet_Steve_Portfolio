@extends('layout')
@section('title', 'Formation / Expérience')
@section('content')
<section class="jumbotrn">
    <h1>Expériences  &amp; Formations</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2 class="reddit">Expériences</h2>
                <ul>
                    
                <h3>Vente :</h3>
                    @foreach($experience as $key => $value)
                        @if($value['title_of_the_training'] == 'vente')
                            <li>{{$value['period']}}: {{$value['organism']}}</li>
                        @endif
                    @endforeach

                <h3>Accueil :</h3>
                    @foreach($experience as $key => $value)
                        @if($value['title_of_the_training'] == 'accueil')
                            <li>{{$value['period']}}: {{$value['organism']}}</li>
                        @endif
                    @endforeach

                <h3>Informatique :</h3>
                    @foreach($experience as $key => $value)
                        @if($value['title_of_the_training'] == 'informatique')
                            <li>{{$value['period']}}: {{$value['organism']}}</li>
                        @endif
                    @endforeach

                <h3>Fonction publique :</h3>
                    @foreach($experience as $key => $value)
                        @if($value['title_of_the_training'] == 'fonction')
                            <li>{{$value['period']}}: {{$value['organism']}}</li>
                        @endif
                    @endforeach

                <h3>Manutention</h3>
                    @foreach($experience as $key => $value)
                        @if($value['title_of_the_training'] == 'manutentionnaire')
                            <li>{{$value['period']}}: {{$value['organism']}}</li>
                        @endif
                    @endforeach 
                </ul>

            </div>
            <div class="col-md-4">
                    <h2 class="reddit">Formations</h2>
                    @foreach($formation as $key => $value)
                            <li>{{$value['period']}}: {{$value['organism']}}</li>
                    @endforeach 
            </div>
            <div class="col-md-4">
            	<h2 class="reddit">Mon Curriculum Vitae <br> Téléchargeable</h2><br>
            		<a target="_blank" id="pdf" href="{{asset('curriculum/curriculum_vitæ_steve.pdf')}}">
            		<img alt="mon_curriculum_vitae.pdf" title="View PDF" width="40px" src="{{asset('img/pdf.png')}}"></a>
            </div>
        </div>
    </div>           
</section>
@endsection