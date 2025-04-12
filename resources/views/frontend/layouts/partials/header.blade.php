<header class="py-5 bg-light shadow-sm">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo Centered on LG, Left on SM -->
            <div class="col-6 col-lg-4 offset-lg-4 text-center text-lg-center mb-3 mb-lg-0">
                <a href="{{ url('/') }}">
                    <svg class="text-danger" style="height: 60px;" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG Path here (kept same for design) -->
                        <path d="...your SVG path..." fill="currentColor"/>
                    </svg>
                </a>
            </div>

            <!-- Auth Links -->
            <div class="col-6 col-lg-4 text-end">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark me-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-danger text-white">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</header>
