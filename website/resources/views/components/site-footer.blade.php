<footer class="site-footer">
    <div class="footer-grid"><a class="brand" href="{{ route('home') }}" aria-label="Tandoori Junction home"><img src="{{ asset('images/tandoori-junction-logo.svg') }}" width="314" height="252" alt="Tandoori Junction" loading="lazy"></a>
        <nav aria-label="Footer navigation"><a href="{{ route('menu') }}">Our menu</a><a href="{{ route('story') }}">Our story</a><a href="{{ route('catering') }}">Catering</a><a href="{{ route('visit') }}">Visit us</a></nav>
        <div class="footer-address"><address>{{ config('restaurant.address') }}<br>{{ config('restaurant.city_postal') }}</address><a href="{{ config('restaurant.telephone_uri') }}">{{ config('restaurant.phone') }}</a><p>Dine-in · Takeout · Catering</p></div>
    </div>
    <div class="footer-bottom"><p>© {{ date('Y') }} Tandoori Junction</p><p>Menu prices are shown as printed. Please call to confirm.</p><a href="#top">Back to top <x-arrow /></a></div>
</footer>
