<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('dashboard') }}" wire:navigate>
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    <i class="align-middle" data-feather="user"></i>
                    <span class="align-middle">Profile</span>
                </a>
            </li>



            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    <i class="align-middle" data-feather="book"></i>
                    <span class="align-middle">Blank</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    <i class="align-middle" data-feather="book"></i>
                    <span class="align-middle">Categories</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    <i class="align-middle" data-feather="book"></i>
                    <span class="align-middle">Books</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}" wire:navigate>
                    <i class="align-middle" data-feather="book"></i>
                    <span class="align-middle">Authors</span>
                </a>
            </li>

            <li class="sidebar-header">Auth</li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('login') }}" wire:navigate>
                    <i class="align-middle" data-feather="log-in"></i>
                    <span class="align-middle">Sign In</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('register') }}" wire:navigate>
                    <i class="align-middle" data-feather="user-plus"></i>
                    <span class="align-middle">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
