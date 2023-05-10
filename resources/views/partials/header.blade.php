<header class="d-flex justify-content-between header">
    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo"/>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'comics'?'active':''}}" aria-current="page" href="{{route('comics')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'about'?'active':''}}" href="{{route('about')}}">About</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</header>