@extends('layout')
@section('title', 'Connecté')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tableau de bord</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-10">
						<a href="{{url('/admin')}}" class="btn btn-success"><span style="color: #FFA563;" class="glyphicon glyphicon-home"></span> Entrez dans l'Administration </a>
					</div>

                    Vous êtes connecté !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
