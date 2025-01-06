<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="{{ route('home1') }}" class="navbar-logo">
            <div class="logo-wrapper">
                <img src="{{ asset('aset/logo-lebar.png') }}" alt="Impex Helper Logo" class="logo-image">
            </div>
        </a>

        <!-- Navigation Items -->
        <div class="nav-items">
            <a href="{{ route('regulation') }}" class="nav-link">Export Import Regulation</a>
            <div class="auth-buttons">
                {{-- <a href="{{ route('login') }}" class="nav-link">Log in</a> --}}
                <a href="{{ route('signup') }}" class="btn-signup">Sign Up</a>
            </div>
        </div>
    </div>
</nav>
