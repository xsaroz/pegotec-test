<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="#">Pegotec</a>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
				<a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item {{ Request::is('dashboard/menus') ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('menus.index') }}">Menu</a>
			</li>
			<li class="nav-item {{ Request::is('dashboard/pages') ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('pages.index') }}">Pages</a>
			</li>
		</ul>
		<div class="form-inline mt-2 mt-md-0">
			<button class="btn btn-outline-danger my-2 my-sm-0">
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</button>
		</div>
	</div>
</nav>