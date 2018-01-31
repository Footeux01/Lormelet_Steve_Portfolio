<!--Page pour la modification des compétences-->

@extends('layout')
@section('title', 'Skills')
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
                <div class="panel-heading">Compétences Techniques</div>
                <div class="panel-body">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><h5>Compétence</h5></th>
                            <th><h5>Groupe de Compétence</h5></th>
                            <th><h5>Level</h5></th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        <tr>
                    </thead>                      
                    @foreach($skills as $skill)
                        <tr>
                            <td>{{ $skill->competence }}</td>
                            <td>{{ $skill->group_of_competence }}</td>
                            <td>{{ $skill->level }}</td>
                            <td><a href="{{ route('skills.edit', array('id'=>$skill->id))}}" class="btn btn-secondary">Modifier</a></td>
                            <td><a href="{{ route('skills_destroy', array('id'=>$skill->id))}}" class="supprimer btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une compétence :</div>
                <div class="panel-body">
                    <form method="POST" action="{{route('skills_add')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_user" value="1">
                        
                        <label for="competence">Compétence : </label>
                        <input type="text" name="competence"></input><br/>
                        
                        <label for="group_of_competence">Groupe de Compétence : </label>
                        <input type="text" name="group_of_competence"><br/>
                        
                        <label for="level">Level : </label>
                        <input type="text" name="level"><br/>
                        <input type="submit" name="valider">
                    </form>
                </div>
            </div>

        </div>
    </div>
  </div>
@endsection