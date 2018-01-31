<!--Page pour la modification des formations-->

@extends('layout')
@section('title', 'Formations')
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
                <div class="panel-heading">Formations</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><h5>Période</h5></th>
                            <th><h5>Titre de la Formation</h5></th>
                            <th><h5>Organisme</h5></th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        <tr>
                    </thead>                      
                    @foreach($formation as $formation)
                        <tr>
                            <td>{{ $formation->period }}</td>
                            <td>{{ $formation->title_of_the_training }}</td>
                            <td>{{ $formation->organism }}</td>
                            <td><a href="{{ route('formations.edit', array('id'=>$formation->id))}}" class="btn btn-secondary">Modifier</a></td>
                            <td><a href="{{ route('formations_destroy', array('id'=>$formation->id))}}" class="supprimer btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une formation :</div>
                <div class="panel-body">
                    <form method="POST" action="{{route('formations_add')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="1">
                        
                        <label for="period">Période : </label>
                        <input type="text" name="period"></input><br/>
                        
                        <label for="title_of_the_training">Titre de la Formation : </label>
                        <input type="text" name="title_of_the_training"><br/>
                        
                        <label for="organism">Organisme : </label>
                        <input type="text" name="organism"><br/>
                        <input type="submit" name="valider">
                    </form>
                </div>
            </div>

        </div>
    </div>
  </div>
@endsection