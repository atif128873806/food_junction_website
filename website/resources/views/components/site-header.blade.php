<header class="site-header">
    <div class="header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Tandoori Junction home">
            <img src="{{ asset('images/tandoori-junction-logo.svg') }}" width="314" height="252" alt="Tandoori Junction" fetchpriority="high">
        </a>
        <nav class="desktop-navigation" aria-label="Main navigation">
            @foreach (['menu' => 'Our menu', 'story' => 'Our story', 'catering' => 'Catering', 'visit' => 'Visit us'] as $route => $label)
                <a href="{{ route($route) }}" @if(request()->routeIs($route)) aria-current="page" @endif>{{ $label }}</a>
            @endforeach
        </nav>
        <a class="header-menu-action" href="{{ request()->routeIs('menu') ? route('visit') : route('menu') }}">{{ request()->routeIs('menu') ? 'Visit us' : 'View menu' }} <x-arrow /></a>
        <a class="mobile-menu-link" href="{{ request()->routeIs('menu') ? route('visit') : route('menu') }}">{{ request()->routeIs('menu') ? 'Visit us' : 'Our menu' }}</a>
        <details class="mobile-navigation" x-ref="navigation" @keydown.escape="closeNavigation()" @click.outside="$refs.navigation.removeAttribute('open')">
            <summary aria-label="Navigation"><span class="hamburger" aria-hidden="true"><span></span><span></span></span><span class="sr-only">Navigation</span></summary>
            <nav aria-label="Mobile navigation">
                @foreach (['home' => 'Home', 'menu' => 'Our menu', 'story' => 'Our story', 'catering' => 'Catering', 'visit' => 'Visit us'] as $route => $label)
                    <a href="{{ route($route) }}" @if(request()->routeIs($route)) aria-current="page" @endif>{{ $label }} <x-arrow /></a>
                @endforeach
                <a href="tel:+19055541819">905 554 1819 <x-arrow /></a>
            </nav>
        </details>
    </div>
</header>
