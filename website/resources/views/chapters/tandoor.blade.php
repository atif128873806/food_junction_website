<section class="chapter tandoor-study" aria-labelledby="tandoor-heading">
    <div class="section-heading"><h2 id="tandoor-heading">At the heart of it,<br>the <em>tandoor.</em></h2><p>Yogurt, spices and the heat of the clay oven. Explore both sides of our tandoori menu.</p></div>
    <div class="tandoor-grid">
        <figure class="food-study"><x-food-image name="chicken-tandoor" alt="Tandoori chicken with chutneys, from the restaurant menu" /><figcaption>Tandoori Chicken <span>From the tandoori non-veg menu</span></figcaption></figure>
        <div class="dish-ledger">
            <a href="{{ route('menu', ['category' => 'tandoori-veg']) }}#menu-results"><h3>Paneer Tikka</h3><p>Cottage cheese, yogurt and Indian spices, roasted in a clay tandoor.</p><span>Explore tandoori veg <x-arrow /></span></a>
            <a href="{{ route('menu', ['category' => 'tandoori-non-veg']) }}#menu-results"><h3>Chicken Tikka</h3><p>Chicken marinated in spices and yogurt, then roasted in the tandoor.</p><span>Explore tandoori non-veg <x-arrow /></span></a>
            <a href="{{ route('menu', ['category' => 'tandoori-non-veg', 'q' => 'Lamb Chops']) }}#menu-results"><h3>Lamb Chops</h3><p>Five pieces, marinated with Indian spices and cooked in the tandoor.</p><span>Find it on the menu <x-arrow /></span></a>
        </div>
    </div>
</section>
