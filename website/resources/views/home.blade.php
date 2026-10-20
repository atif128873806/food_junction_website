<x-layout title="Indian food in Markham" description="Browse the Tandoori Junction menu, explore tandoori dishes and street food, and find us in Markham for dine-in, takeout and catering.">
<div class="light-site home-page">
    <x-site-header />
    <main id="main-content" class="home-main" data-motion-page>
        <section class="home-hero" aria-labelledby="home-heading" data-home-hero>
            <div class="home-hero-copy" data-reveal>
                <p class="eyebrow"><span class="eyebrow-line"></span> Markham, Ontario <span class="eyebrow-line"></span> Indian food</p>
                <h1 id="home-heading">Come hungry.<br><em>Stay awhile.</em></h1>
                <div class="hero-bottom-row"><p>Tandoori dishes, Indian favourites and Hakka cuisine at Tandoori Junction.</p><a class="circle-link" href="{{ route('menu') }}" aria-label="Explore our menu"><x-arrow /></a></div>
            </div>
            <figure class="home-hero-photo" data-image-reveal>
                <picture><source srcset="{{ asset('images/menu-category-tandoori-non-veg-640.webp') }} 640w, {{ asset('images/menu-category-tandoori-non-veg-1274.webp') }} 1274w" sizes="100vw"><img src="{{ asset('images/menu-category-tandoori-non-veg-1274.webp') }}" width="1274" height="400" alt="Tandoori dishes pictured in the Tandoori Junction printed menu" fetchpriority="high" decoding="async" data-hero-image></picture>
                <figcaption>From the Tandoori Junction menu</figcaption>
            </figure>
            <div class="hero-service-strip"><span>Tandoori Junction</span><span>Dine in <b>·</b> Take out <b>·</b> Catering</span><a href="{{ route('visit') }}">Find us in Markham <x-arrow /></a></div>
        </section>

        <section class="home-intro section-shell" aria-labelledby="intro-heading" data-reveal>
            <p class="eyebrow">Good food brings us together</p>
            <div class="intro-layout"><h2 id="intro-heading">There’s something<br><em>for the whole table.</em></h2><div><p>From the tandoor to street food, curries and Hakka favourites, the printed menu gives you plenty to explore.</p><a class="underlined-link" href="{{ route('menu') }}">Explore the full menu <x-arrow /></a></div></div>
        </section>

        <section class="home-feature section-shell" aria-labelledby="feature-heading">
            <div class="feature-heading" data-reveal><p class="eyebrow">A few places to start</p><h2 id="feature-heading">Find your favourite.</h2></div>
            <div class="feature-grid">
                <a class="feature-card feature-card-large" href="{{ route('menu', ['category' => 'tandoori-veg']) }}" data-reveal><div class="feature-image"><x-food-image name="paneer-tandoor" alt="Paneer tikka pictured in the Tandoori Junction menu" sizes="(max-width: 700px) 100vw, 55vw" /></div><div class="feature-caption"><span><small>Tandoori veg</small><strong>Paneer Tikka</strong></span><x-arrow /></div></a>
                <a class="feature-card" href="{{ route('menu', ['category' => 'tandoori-non-veg']) }}" data-reveal><div class="feature-image"><x-food-image name="chicken-tandoor" alt="Tandoori chicken pictured in the Tandoori Junction menu" sizes="(max-width: 700px) 100vw, 35vw" /></div><div class="feature-caption"><span><small>Tandoori non-veg</small><strong>Tandoori Chicken</strong></span><x-arrow /></div></a>
                <a class="feature-card" href="{{ route('menu', ['category' => 'street-food']) }}" data-reveal><div class="feature-image"><x-food-image name="street-table" alt="Street food pictured in the Tandoori Junction menu" sizes="(max-width: 700px) 100vw, 35vw" /></div><div class="feature-caption"><span><small>Street food</small><strong>Street Food</strong></span><x-arrow /></div></a>
            </div>
        </section>

        <section class="home-service section-shell" aria-labelledby="service-heading" data-reveal><p class="eyebrow">However you join us</p><h2 id="service-heading">Your table, your way.</h2><div class="service-rows"><a href="{{ route('visit') }}"><span aria-hidden="true">•</span><strong>Dine in</strong><small>Find us in Markham</small><x-arrow /></a><a href="{{ config('restaurant.telephone_uri') }}"><span aria-hidden="true">•</span><strong>Takeout</strong><small>Call {{ config('restaurant.phone') }}</small><x-arrow /></a><a href="{{ route('catering') }}"><span aria-hidden="true">•</span><strong>Catering</strong><small>Talk through your gathering</small><x-arrow /></a></div></section>

        <section class="home-endcap" aria-labelledby="endcap-heading" data-reveal><div class="section-shell endcap-inner"><p class="eyebrow">See you at the junction</p><h2 id="endcap-heading">Around the corner<br><em>from your next meal.</em></h2><div class="endcap-footer"><address>{{ config('restaurant.address') }}<br>{{ config('restaurant.city_postal') }}</address><div><a class="button-primary button-light" href="{{ route('visit') }}">Plan your visit <x-arrow /></a><a class="underlined-link" href="{{ config('restaurant.telephone_uri') }}">{{ config('restaurant.phone') }}</a></div></div></div></section>
    </main>
    <x-site-footer />
</div>
</x-layout>
