<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm border-bottom">
  <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
              <h5>Backend User</h5>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto align-items-center">
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item me-2">
                          <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle fw-semibold text-dark" href="#" role="button"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">
                              Profile
                          </a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>
