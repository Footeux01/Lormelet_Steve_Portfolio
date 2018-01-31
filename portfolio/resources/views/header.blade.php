<header>
    <div class="container-fluid">
        <nav class="navbar {{-- navbar-nav --}} navbar-header {{-- disposition --}}">
	        <div class="navbar-left">
	            <a href="{{route('/')}}"> <img src="{{asset('img/InexistanteProduction0.png')}}" class="img-rounded navbar-left" alt="Logo Of Inexistante Production" width="8%"></a>

	            <ul class="nav navbar-right">
	                <li class="active"><a href="{{url('/')}}">PRESENTATION |</a></li>
	                <li><a href="{{url('/skill')}}">COMPETENCES TECHNIQUES |</a></li>
	                <li><a href="{{url('/formation')}}">EXPERIENCES  &amp; FORMATIONS |</a></li>
	                <li><a href="{{url('/projet')}}">PROJETS REALISES |</a></li>
	                <li><a href="{{url('/contact')}}">CONTACT |</a></li>
	                    <!-- Authentication Links -->
	                @guest
	                    <li><a href="{{ route('login') }}" class="glyphicon glyphicon-log-in"> CONNEXION</a></li>
	                @else
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
	                            {{ Auth::user()->name }} <span class="caret"></span>
	                        </a>

	                        <ul class="dropdown-menu">
	                            <li>
	                                <a href="{{ route('logout') }}"
	                                    onclick="event.preventDefault();
	                                             document.getElementById('logout-form').submit();" class="glyphicon glyphicon-log-off">
	                                     DÉCONNEXION
	                                </a>

	                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                    {{ csrf_field() }}
	                                </form>
	                            </li>
	                        </ul>
	                    </li>
	                @endguest
	            </ul>
	        </div>
        </nav>
    </div>
</header>