<section class="hero immersive-hero" aria-labelledby="hero-heading">
    <div class="hero-composition">
        <div class="hero-copy">
            <h1 id="hero-heading">Tradition,<br><span>served with <em>fire.</em></span></h1>
            <p class="hero-description">From the tandoor to your table. Discover Indian flavours, rich curries and street-food favourites in Markham.</p>
            <div class="hero-actions">
                <a class="button-primary" href="{{ route('menu') }}">View our menu <x-arrow /></a>
                <a class="visit-link" href="{{ route('visit') }}">Plan your visit <x-arrow /></a>
            </div>
            
        </div>
        <figure class="hero-photograph">
            <picture>
                <source type="image/webp" srcset="{{ asset('images/tandoori-spread-640.webp') }} 640w, {{ asset('images/tandoori-spread-960.webp') }} 960w, {{ asset('images/tandoori-spread-1440.webp') }} 1440w, {{ asset('images/tandoori-spread-1920.webp') }} 1920w" sizes="100vw">
                <img src="{{ asset('images/tandoori-spread-1440.webp') }}" width="1440" height="960" alt="An overhead spread of tandoori chicken, tikka, naan, curries and accompaniments" fetchpriority="high" decoding="async">
            </picture>
        </figure>
    </div>
    <div class="hero-baseline">
        <ul class="hero-services" aria-label="Dining experiences"><li>Dine-in</li><li>Takeout</li><li>Catering</li></ul>
        <a href="{{ route('visit') }}">160 New Delhi Drive, Markham <x-arrow /></a>
    </div>
</section>
