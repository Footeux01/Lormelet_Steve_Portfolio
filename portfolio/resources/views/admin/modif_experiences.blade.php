@extends('layout')
@section('title', 'Modifier l\'expérience')
    @section('content')
        <a href="{{url('/admin')}}" class="btn btn-info btn-sm right">
            <span class="glyphicon glyphicon-chevron-left"></span> Retour Accueil Administration
        </a>

        <div class="panel panel-default">
            <div class="panel-heading">Modifier l'expérience</div>
            <div class="panel-body">
                <form method="POST" action="{{route('experiences.update', ['experience' => $experience])}}">
                	<input name="_method" value="PUT" type="hidden">
                    {{ csrf_field() }}
                   
                    <input type="hidden" name="id_user" value="1">
                    
                    <div class="form-group {{ $errors->has('period') ? 'has-error' : '' }}">
                        <label for="period">Période : </label>
                        <input type="text" class="form-control" name="period" value="{{ $experience->period }}"><br/>
                    </div>

                    <div class="form-group {{ $errors->has('title_of_the_training') ? 'has-error' : '' }}">
                         <label for="title_of_the_training">Titre de l'Experience : </label>
                         <input type="text" class="form-control" name="title_of_the_training" value ="{{ $experience->title_of_the_training }}"><br/>
                    </div>
                    
                    <div class="form-group {{ $errors->has('organism') ? 'has-error' : '' }}">
                        <label for="organism">Organisme : </label>
                        <input type="text" class="form-control" name="organism" value="{{ $experience->organism }}"><br/>
                    </div>   
                    <input type="submit" name="valider">
                </form>
            </div>
        </div>
    @endsection