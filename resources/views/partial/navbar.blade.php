<nav class="navbar">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <div class="logo-wrapper">
                <img src="{{ asset('aset/logo-lebar.png') }}" alt="Impex Helper Logo" class="logo-image">
            </div>
        </a>

        <!-- Menu navbar -->
        <div class="nav-items">
            <!-- Export Import Regulation - sama untuk semua -->
            <a class="nav-link" href="{{ route('regulation') }}">
                Export Import Regulation
            </a>

            @auth
            @if(Auth::user()->role === 'seller')
            <a class="nav-link" href="{{ route('seller.products.create') }}">
                Upload Product
            </a>
            <div class="dropdown">
                <button class="nav-link dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('seller.store') }}">My Store</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @elseif(Auth::user()->role === 'buyer')
            <a class="nav-link" href="{{ route('buyer.purchases') }}">My Purchases</a>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown">
                    Profile
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">My Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    @else
        <!-- Untuk guest -->
        <div class="auth-buttons">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
            <a class="nav-link btn-signup" href="{{ route('register') }}">Sign Up</a>
        </div>
    @endauth
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@push('styles')
    @vite(['resources/css/home.css'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
@endpush
