    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ request()->is('empleado*') ? 'active' : '' }}">
                        <a href="{{ url('empleado') }}">
                            <i class="material-icons">supervisor_account</i> Empleados
                        </a>
                    </li>
                    @guest
                    <li class=" {{ request()->is('login') ? 'active' : '' }} ">
                        <a href="{{ route('login') }}">
                            <i class="material-icons">fingerprint</i> Iniciar Sesión
                        </a>
                    </li>
                    @endguest

                    @auth
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="material-icons">person</i> {{ Auth::user()->name }}
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-with-icons">
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="material-icons">lock</i> Cerrar Sesión
								</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</li>
						</ul>
					</li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>