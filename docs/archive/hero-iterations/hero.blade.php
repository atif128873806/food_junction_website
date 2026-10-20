<section class="hero" aria-labelledby="hero-heading">
    <div class="hero-composition">
        <div class="hero-copy">
            <h1 id="hero-heading">Tradition,<br><span>served with <em>fire.</em></span></h1>
            <p class="hero-description">From the tandoor to your table. Discover Indian flavours, rich curries and street-food favourites in Markham.</p>
            <div class="hero-actions">
                <a class="button-primary" href="{{ route('menu-proof') }}" @click.prevent="openDialog('menu-dialog')">View our menu <x-arrow /></a>
                <a class="visit-link" href="#visit-contact" @click.prevent="openDialog('visit-dialog')">Plan your visit <x-arrow /></a>
            </div>
            <ul class="hero-services" aria-label="Dining experiences"><li>Dine-in</li><li>Takeout</li><li>Catering</li></ul>
        </div>
        <figure class="hero-photograph">
            <picture>
                <source type="image/webp" srcset="{{ asset('images/tandoori-spread-640.webp') }} 640w, {{ asset('images/tandoori-spread-960.webp') }} 960w, {{ asset('images/tandoori-spread-1440.webp') }} 1440w, {{ asset('images/tandoori-spread-1920.webp') }} 1920w" sizes="(max-width: 767px) calc(100vw - 40px), 54vw">
                <img src="{{ asset('images/tandoori-spread-1440.webp') }}" width="1440" height="960" alt="Tandoori chicken and tikka, naan, curries and accompaniments from the supplied restaurant food photography" fetchpriority="high" decoding="async">
            </picture>
            <figcaption><span>From the tandoor. For the table.</span><span class="photo-caption-detail">Tandoori Junction</span></figcaption>
        </figure>
    </div>
    <div class="hero-baseline">
        <p>Indian flavours. <span>A warm welcome.</span></p>
        <a href="#visit-contact" @click.prevent="openDialog('visit-dialog')">160 New Delhi Drive, Markham <x-arrow /></a>
    </div>
</section>
