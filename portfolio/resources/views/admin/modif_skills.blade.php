@extends('layout')
@section('title', 'Modifier la compétence')
    @section('content')
        <a href="{{url('/admin')}}" class="btn btn-info btn-sm right">
            <span class="glyphicon glyphicon-chevron-left"></span> Retour Accueil Administration
        </a>

        <div class="panel panel-default">
            <div class="panel-heading">Modifier la compétence</div>
            <div class="panel-body">
                <form method="POST" action="{{url('skills')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $skill->id }}">
                    <input type="hidden" name="id_user" value="1">
                    
                    <div class="form-group {{ $errors->has('competence') ? 'has-error' : '' }}">
                        <label for="competence">Compétence : </label>
                        <input type="text" class="form-control" name="competence" value="{{ $skill->competence }}"><br/>
                    </div>

                    <div class="form-group {{ $errors->has('group_of_competence') ? 'has-error' : '' }}">
                         <label for="group_of_competence">Groupe de Compétence : </label>
                         <input type="text" class="form-control" name="group_of_competence" value ="{{ $skill->group_of_competence }}"><br/>
                    </div>
                    
                    <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                        <label for="level">Level : </label>
                        <input type="text" class="form-control" name="level" value="{{ $skill->level }}"><br/>
                    </div>   
                    <input type="submit" name="valider">
                </form>
            </div>
        </div>
    @endsection