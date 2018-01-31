@extends('layout')
@section('title', 'Modifier le projet')
    @section('content')
        <a href="{{url('/admin')}}" class="btn btn-info btn-sm right">
            <span class="glyphicon glyphicon-chevron-left"></span> Retour Accueil Administration
        </a>

        <div class="panel panel-default">
            <div class="panel-heading">Modifier le projet</div>
            <div class="panel-body">
                <form method="POST" action="{{route('projets.update', ['projet' => $projet])}}">
                	<input name="_method" value="PUT" type="hidden">
                    {{ csrf_field() }}
                   
                    <input type="hidden" name="id_user" value="1">
                    
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label for="title">Nom : </label>
                        <input type="text" class="form-control" name="title" value="{{ $projet->title }}"><br/>
                    </div>

                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                         <label for="description">Titre du Projet : </label>
                         <input type="text" class="form-control" name="description" value ="{{ $projet->description }}"><br/>
                    </div>
                    

                    <input type="submit" name="valider">
                </form>
            </div>
        </div>
    @endsection