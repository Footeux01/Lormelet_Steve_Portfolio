<!--Page pour la modification des projets-->

@extends('layout')
@section('title', 'Projets')
@section('content')
  <a href="{{url('/admin')}}" class="btn btn-info btn-sm right">
    <span class="glyphicon glyphicon-chevron-left"></span> Retour Accueil Administration
  </a>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Projets</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><h5>Période</h5></th>
                            <th><h5>Titre du Projet</h5></th>
                            <th><h5>Image</h5></th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        <tr>
                    </thead>                      
                    @foreach($projet as $projet)
                        <tr>
                            <td>{{ $projet->title }}</td>
                            <td>{{ $projet->description }}</td>
                            <td><img width="80px" src="img/{{ $projet->image }}"/></td>
                            <td><a href="{{ route('projets.edit', array('id'=>$projet->id))}}" class="btn btn-secondary">Modifier</a></td>
                            <td><a href="{{ route('projets_destroy', array('id'=>$projet->id))}}" class="supprimer btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une projet :</div>
                <div class="panel-body">
                    <form method="POST" action="{{route('projets_add')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="1">
                        
                        <label for="title">Nom : </label>
                        <input type="text" name="title"></input><br/>
                        
                        <label for="description">Titre du Projet : </label>
                        <input type="text" name="description"><br/>
                        
                        <label for="image">Image : </label>
                        <input type="file" name="image"><br/>
                        <input type="submit" name="valider">
                    </form>
                </div>
            </div>

        </div>
    </div>
  </div>
@endsection