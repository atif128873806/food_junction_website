<x-layout title="Our story">
<div class="light-site story-page"><x-site-header /><main id="main-content" data-motion-page>
    <header class="inner-hero section-shell" data-reveal><p class="eyebrow">About Tandoori Junction / Our story</p><h1>Food for<br><em>coming together.</em></h1><div class="inner-hero-bottom"><span>Our story</span><p>Indian favourites, tandoori cooking and Hakka dishes are all part of our Markham menu.</p></div></header>
    <figure class="inner-photo story-photo" data-image-reveal><x-food-image name="paneer-tandoor" alt="Paneer tikka pictured in the Tandoori Junction menu" :eager="true" /><figcaption>Paneer Tikka / Tandoori Veg menu</figcaption></figure>
    <section class="editorial-section section-shell" data-reveal><p class="eyebrow">At our table</p><div><h2>A menu with<br><em>room to explore.</em></h2><p>Come for dine-in, pick up takeout, or ask us about catering. Explore the printed menu and find something for the table.</p><a class="button-primary" href="{{ route('menu') }}">Explore the menu <x-arrow /></a></div></section>
</main><x-site-footer /></div>
</x-layout>
