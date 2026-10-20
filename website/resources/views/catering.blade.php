<x-layout title="Catering in Markham" description="Tandoori Junction offers catering in Markham. Call the restaurant to discuss your gathering.">
<div class="light-site catering-page"><x-site-header /><main id="main-content" data-motion-page>
    <header class="inner-hero section-shell" data-reveal><p class="eyebrow">Tandoori Junction / Catering</p><h1>Good food for<br><em>the gathering.</em></h1><div class="inner-hero-bottom"><span>Catering</span><p>Bring Tandoori Junction to your gathering. Call us to talk through the menu and arrangements.</p></div></header>
    <figure class="inner-photo catering-photo" data-image-reveal><x-food-image name="menu-category-tandoori-non-veg" alt="Tandoori dishes pictured in the Tandoori Junction menu" :eager="true" /><figcaption>Tandoori dishes / Printed menu</figcaption></figure>
    <section class="editorial-section section-shell" data-reveal><p class="eyebrow">Let's talk food</p><div><h2>Start with<br><em>a conversation.</em></h2><p>Take a look through the menu, then call us to discuss your catering questions and arrangements.</p><div class="editorial-actions"><a class="button-primary" href="{{ config('restaurant.telephone_uri') }}">Call {{ config('restaurant.phone') }} <x-arrow /></a><a class="underlined-link" href="{{ route('menu') }}">Explore the menu <x-arrow /></a></div></div></section>
</main><x-site-footer /></div>
</x-layout>
