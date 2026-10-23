<x-layout title="Indian food in Markham" description="Browse the Tandoori Junction menu, explore tandoori dishes and street food, and find us in Markham for dine-in, takeout and catering.">
<div class="light-site home-page">
    <x-site-header />
    <main id="main-content" class="home-main" data-motion-page>
        <section class="home-hero" aria-labelledby="home-heading" data-home-hero>
            <div class="home-hero-copy" data-reveal>
                <h1 id="home-heading">Come hungry.<br><em>Stay awhile.</em></h1>
                <div class="hero-bottom-row"><p>Tandoori dishes, Indian favourites and Hakka cuisine in Markham.</p><a class="button-primary home-hero-action" href="{{ route('menu') }}">Explore the menu <x-arrow /></a></div>
            </div>
            <figure class="home-hero-photo" data-image-reveal>
                <picture><source srcset="{{ asset('images/menu-category-tandoori-non-veg-640.webp') }} 640w, {{ asset('images/menu-category-tandoori-non-veg-1274.webp') }} 1274w" sizes="100vw"><img src="{{ asset('images/menu-category-tandoori-non-veg-1274.webp') }}" width="1274" height="400" alt="Tandoori dishes pictured in the Tandoori Junction printed menu" fetchpriority="high" decoding="async" data-hero-image></picture>
                <figcaption>From the Tandoori Junction menu</figcaption>
            </figure>
            <div class="hero-service-strip"><span>Dine in <b>·</b> Takeout <b>·</b> Catering</span><a href="{{ route('visit') }}">Find us in Markham <x-arrow /></a></div>
        </section>

        <section class="home-intro section-shell" aria-labelledby="intro-heading" data-reveal>
            <div class="intro-layout"><h2 id="intro-heading">There’s something<br><em>for the whole table.</em></h2><div><p>From the tandoor to street food, curries and Hakka favourites, the printed menu gives you plenty to explore.</p><a class="underlined-link" href="{{ route('menu') }}">Explore the full menu <x-arrow /></a></div></div>
        </section>

        <section class="home-feature section-shell" aria-labelledby="feature-heading">
            <div class="feature-heading" data-reveal><h2 id="feature-heading">Pick where to begin.</h2><p>Explore a few corners of the printed menu.</p></div>
            <div class="home-menu-preview" data-home-preview>
                <div class="home-menu-preview-stage" aria-hidden="true">
                    <x-food-image name="paneer-tandoor" alt="" sizes="(max-width: 700px) 100vw, 90vw" class="home-menu-preview-image is-active" data-preview-image="paneer" />
                    <x-food-image name="chicken-tandoor" alt="" sizes="(max-width: 700px) 100vw, 90vw" class="home-menu-preview-image" data-preview-image="chicken" />
                    <x-food-image name="street-table" alt="" sizes="(max-width: 700px) 100vw, 90vw" class="home-menu-preview-image" data-preview-image="street" />
                </div>
                <nav class="home-menu-preview-links" aria-label="Featured menu sections">
                    <a class="is-active" href="{{ route('menu', ['category' => 'tandoori-veg']) }}" data-preview-link="paneer"><x-food-image name="paneer-tandoor" alt="" sizes="(max-width: 700px) 100vw, 1px" class="home-menu-preview-thumb" /><span><strong>Paneer Tikka</strong><small>Tandoori veg</small></span><x-arrow /></a>
                    <a href="{{ route('menu', ['category' => 'tandoori-non-veg']) }}" data-preview-link="chicken"><x-food-image name="chicken-tandoor" alt="" sizes="(max-width: 700px) 100vw, 1px" class="home-menu-preview-thumb" /><span><strong>Tandoori Chicken</strong><small>Tandoori non-veg</small></span><x-arrow /></a>
                    <a href="{{ route('menu', ['category' => 'street-food']) }}" data-preview-link="street"><x-food-image name="street-table" alt="" sizes="(max-width: 700px) 100vw, 1px" class="home-menu-preview-thumb" /><span><strong>Street Food</strong><small>Samosa, chaat &amp; more</small></span><x-arrow /></a>
                </nav>
                <p class="home-menu-preview-note">Photographs from the Tandoori Junction printed menu</p>
            </div>
        </section>

        <section class="home-service section-shell" aria-labelledby="service-heading" data-reveal><h2 id="service-heading">Your table, your way.</h2><div class="service-rows"><a href="{{ route('visit') }}"><strong>Dine in</strong><small>Find us in Markham</small><x-arrow /></a><a href="{{ config('restaurant.telephone_uri') }}"><strong>Takeout</strong><small>Call {{ config('restaurant.phone') }}</small><x-arrow /></a><a href="{{ route('catering') }}"><strong>Catering</strong><small>Talk through your gathering</small><x-arrow /></a></div></section>

        <section class="home-endcap" aria-labelledby="endcap-heading" data-reveal><div class="section-shell endcap-inner"><h2 id="endcap-heading">Around the corner<br><em>from your next meal.</em></h2><div class="endcap-footer"><address>{{ config('restaurant.address') }}<br>{{ config('restaurant.city_postal') }}</address><div><a class="button-primary button-light" href="{{ route('visit') }}">Plan your visit <x-arrow /></a><a class="underlined-link" href="{{ config('restaurant.telephone_uri') }}">{{ config('restaurant.phone') }}</a></div></div></div></section>
    </main>
    <x-site-footer />
</div>
</x-layout>
