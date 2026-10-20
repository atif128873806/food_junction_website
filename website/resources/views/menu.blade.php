<x-layout title="Our menu" description="Browse the Tandoori Junction dine-in menu by category, with original food photography and printed menu details.">
<div class="light-site menu-page">
    <x-site-header />
    <main id="main-content" data-motion-page>
        <header class="menu-hero section-shell" data-reveal>
            <p class="eyebrow">Tandoori Junction / Our Menu</p>
            <h1>A little of <em>everything.</em></h1>
            <div class="menu-hero-bottom"><p>Choose a section to see its food photo and every printed dish.</p><span>12 sections / 169 printed entries</span></div>
            <p class="menu-source">Prices are shown as printed in the dine-in menu proof. Please call to confirm current prices and availability.</p>
            @if(app()->environment(['local', 'testing']))<a class="text-link" href="{{ route('menu-proof') }}" target="_blank" rel="noopener">View the printed menu <span class="sr-only">(opens in a new tab)</span><x-arrow /></a>@endif
        </header>

        <details class="menu-category-picker section-shell" data-reveal>
            <summary>
                <span class="menu-picker-label">Browse menu sections</span>
                <span class="menu-picker-current">{{ $selectedGroup['name'] }}</span>
            </summary>
            <nav class="menu-category-nav" aria-label="Menu categories">
                @foreach($groups as $group)
                    <a href="{{ route('menu', ['category' => $group['slug']]) }}" @if($group['slug'] === $selectedGroup['slug']) aria-current="page" @endif>
                        <span>{{ $group['name'] }}</span>
                        @if($group['slug'] === $selectedGroup['slug'])<span class="menu-category-selected">Selected</span>@endif
                    </a>
                @endforeach
            </nav>
        </details>

        <section class="menu-content section-shell" data-reveal aria-labelledby="heading-{{ $selectedGroup['slug'] }}">
            <header class="menu-group-heading">
                <h2 id="heading-{{ $selectedGroup['slug'] }}">{{ $selectedGroup['name'] }}</h2>
                <p>{{ $items->count() }} menu items</p>
            </header>
            <figure class="menu-category-photo">
                <img src="{{ asset('images/menu-category-' . $selectedGroup['slug'] . '-1274.webp') }}"
                     srcset="{{ asset('images/menu-category-' . $selectedGroup['slug'] . '-640.webp') }} 640w, {{ asset('images/menu-category-' . $selectedGroup['slug'] . '-1274.webp') }} 1274w"
                     sizes="(max-width: 700px) 100vw, 1200px"
                     alt="Food photo from the {{ $selectedGroup['name'] }} section of the Tandoori Junction menu"
                     width="1274" height="400" loading="eager" decoding="async" fetchpriority="high">
                <figcaption>Photo from the Tandoori Junction printed menu</figcaption>
            </figure>

            <div class="menu-group-items">
                @foreach($selectedGroup['leaves'] as $leaf)
                    @php($leafItems = $items->where('category', $leaf))
                    @if($leafItems->isNotEmpty())
                        <section class="menu-leaf" aria-labelledby="leaf-{{ $selectedGroup['slug'] }}-{{ $loop->index }}">
                            <h3 id="leaf-{{ $selectedGroup['slug'] }}-{{ $loop->index }}">{{ $leaf }}</h3>
                            @if($leaf === 'Soup')<p class="category-note">The printed Soup heading shows $11.50. Please call to confirm the price for each soup.</p>@endif
                            <div class="menu-leaf-items">
                                @foreach($leafItems as $item)
                                    <article class="menu-item" data-source-id="{{ $item['id'] }}">
                                        <div class="menu-item-copy">
                                            <h4>{{ $item['name'] }}</h4>
                                            @if($item['description'] !== '')<p>{{ $item['description'] }}</p>@endif
                                            @if(count($item['review_notes']))
                                                <details class="menu-review">
                                                    <summary>Menu note — please confirm</summary>
                                                    <p>@if(in_array($item['id'], ['P08-07','P08-14','P08-15','P08-18']))The printed name and description list different protein options. Please call to confirm the available choices.@elseif($item['id'] === 'P03-07')The printed description refers to fish; please confirm the chicken option.@elseif($item['id'] === 'P04-14')The printed description mentions chicken or vegetables; please confirm your choice. Also listed in the Biryani section.@elseif(in_array($item['id'], ['P04-13','P04-15','P04-16']))Also printed in the Biryani section. Please confirm whether the portion is the same.@elseif($item['category'] === 'Soup')The $11.50 amount is printed at category level, rather than beside each soup.@elseif($item['id'] === 'P09-05')The printed description mentions sauce for both preparations. Please confirm your preferred dry or gravy version.@else Please call to confirm the contents and available options.@endif</p>
                                                </details>
                                            @endif
                                        </div>
                                        <div class="menu-prices">
                                            @forelse($item['prices'] as $price)
                                                <div>@if($price['label'])<span>{{ $price['label'] }}</span>@endif<strong>${{ $price['amount'] }}</strong></div>
                                            @empty<span class="price-unconfirmed">Price to confirm</span>@endforelse
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </section>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="menu-close section-shell" data-reveal><h2>Come enjoy a meal.</h2><p>Dine in, take out or ask us about catering.</p><div class="hero-actions"><a class="button-primary" href="{{ route('visit') }}">Visit Tandoori Junction <x-arrow /></a><a class="text-link" href="{{ config('restaurant.telephone_uri') }}">Call {{ config('restaurant.phone') }} <x-arrow /></a></div></section>
    </main>
    <x-site-footer />
</div>
</x-layout>
