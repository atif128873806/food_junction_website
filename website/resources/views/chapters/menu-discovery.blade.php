<section class="chapter menu-discovery" aria-labelledby="discover-heading">
    <div class="section-heading"><h2 id="discover-heading">Find your<br><em>next favourite.</em></h2><div><p>From a quick bite to a table full of flavours.<br>Take your time. Explore the menu.</p><a class="text-link" href="{{ route('menu') }}">View the complete menu <x-arrow /></a></div></div>
    <nav class="category-index" aria-label="Discover menu categories">
        @foreach (app(\App\Support\MenuRepository::class)->groups() as $group)
            <a href="{{ route('menu', ['category' => $group['slug']]) }}#menu-results"><span>{{ $group['name'] }}</span><x-arrow /></a>
        @endforeach
    </nav>
</section>
