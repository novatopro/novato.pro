<!-- Menu -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <x-application-logo />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">{{ __('Dashboard') }}</a>
                </li>
                @endauth
                
                <li class="nav-item">
                    <a href="{{ route('qr') }}" class="nav-link">{{ __('Qr generator') }}</a>
                </li>

            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                        id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-label="Toggle theme (dark)">
                        <i class="bi bi-moon-stars-fill me-2"></i>
                        <span class="d-lg-none ms-2" id="bd-theme-text">{{__('Toggle theme')}}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="light" aria-pressed="false">
                                <i class="bi bi-sun-fill me-2"></i>
                                {{__('Light')}}
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active"
                                data-bs-theme-value="dark" aria-pressed="true">
                                <i class="bi bi-moon-stars-fill me-2"></i>
                                {{__('Dark')}}
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="auto" aria-pressed="false">
                                <i class="bi bi-circle-half me-2"></i>
                                {{__('Auto')}}
                            </button>
                        </li>
                    </ul>
                </li>
                @if (Route::has('login'))
                    @auth
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex items-center justify-center" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img src="{{ auth()->user()->profile_photo_url }}" alt="User photo" class="h-7">
                                @endif
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>

                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">{{ __('Log in') }}</a>
                        </li>


                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
