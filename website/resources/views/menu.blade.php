<x-layout title="Our menu" description="Browse the Tandoori Junction dine-in menu by category, with original food photography and printed menu details.">
<div class="light-site menu-page">
    <x-site-header />
    <main id="main-content">
        <header class="menu-hero section-shell">
            <div>
                <p class="eyebrow">Tandoori Junction / Our Menu</p>
                <h1>Find your <em>favourite.</em></h1>
                <p class="menu-hero-intro">Choose a section, then read every dish and printed price at your own pace.</p>
            </div>
            <div class="menu-hero-aside">
                <p>About these prices</p>
                <p class="menu-source">Prices are shown as printed in the dine-in menu proof. Please call to confirm current prices and availability.</p>
                @if(app()->environment(['local', 'testing']))<a class="underlined-link" href="{{ route('menu-proof') }}" target="_blank" rel="noopener">View the printed menu <span class="sr-only">(opens in a new tab)</span><x-arrow /></a>@endif
            </div>
        </header>

        <div class="menu-workspace section-shell">
            <aside class="menu-index" aria-label="Browse menu sections">
                <div class="menu-index-inner">
                    <p class="menu-index-label">Browse sections <span>12</span></p>
                    <nav aria-label="Menu categories" data-menu-categories>
                        @foreach($groups as $group)
                            <a href="{{ route('menu', ['category' => $group['slug']]) }}" @if($group['slug'] === $selectedGroup['slug']) aria-current="page" @endif>
                                <span class="menu-index-name">{{ $group['name'] }}</span>
                                <span class="menu-index-count">{{ $groupCounts[$group['slug']] }}<span class="sr-only"> items</span></span>
                            </a>
                        @endforeach
                    </nav>
                    <p class="menu-index-footnote">One complete section at a time.</p>
                </div>
            </aside>

            <div class="menu-reading">
                <header class="menu-reading-heading">
                    <p class="eyebrow">Now viewing</p>
                    <div><h2 id="heading-{{ $selectedGroup['slug'] }}">{{ $selectedGroup['name'] }}</h2><span>{{ $items->count() }} printed entries</span></div>
                </header>
                <figure class="menu-category-photo">
                    <img src="{{ asset('images/menu-category-' . $selectedGroup['slug'] . '-1274.webp') }}"
                         srcset="{{ asset('images/menu-category-' . $selectedGroup['slug'] . '-640.webp') }} 640w, {{ asset('images/menu-category-' . $selectedGroup['slug'] . '-1274.webp') }} 1274w"
                         sizes="(max-width: 700px) 100vw, 960px"
                         alt="Food photo from the {{ $selectedGroup['name'] }} section of the Tandoori Junction menu"
                         width="1274" height="400" loading="eager" decoding="async" fetchpriority="high">
                    <figcaption>Photo from the Tandoori Junction printed menu</figcaption>
                </figure>

                @if(count($selectedGroup['leaves']) > 1)
                    <nav class="menu-leaf-nav" aria-label="Jump within {{ $selectedGroup['name'] }}">
                        <span>In this section</span>
                        @foreach($selectedGroup['leaves'] as $leaf)
                            <a href="#leaf-{{ $selectedGroup['slug'] }}-{{ $loop->index }}">{{ $leaf }} <x-arrow /></a>
                        @endforeach
                    </nav>
                @endif

                <section class="menu-content" aria-labelledby="heading-{{ $selectedGroup['slug'] }}">
                    @foreach($selectedGroup['leaves'] as $leaf)
                        @php($leafItems = $items->where('category', $leaf))
                        @if($leafItems->isNotEmpty())
                            <section class="menu-leaf" id="leaf-{{ $selectedGroup['slug'] }}-{{ $loop->index }}" aria-labelledby="leaf-heading-{{ $selectedGroup['slug'] }}-{{ $loop->index }}">
                                <div class="menu-leaf-heading"><h3 id="leaf-heading-{{ $selectedGroup['slug'] }}-{{ $loop->index }}">{{ $leaf }}</h3><span>{{ $leafItems->count() }} items</span></div>
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
                </section>
            </div>
        </div>

        <nav class="menu-pagination section-shell" aria-label="Adjacent menu sections">
            @if($previousGroup)<a class="menu-pagination-prev" href="{{ route('menu', ['category' => $previousGroup['slug']]) }}"><span><x-arrow /> Previous section</span><strong>{{ $previousGroup['name'] }}</strong></a>@else<span></span>@endif
            @if($nextGroup)<a class="menu-pagination-next" href="{{ route('menu', ['category' => $nextGroup['slug']]) }}"><span>Next section <x-arrow /></span><strong>{{ $nextGroup['name'] }}</strong></a>@else<span></span>@endif
        </nav>

        <section class="menu-close section-shell"><h2>Come enjoy a meal.</h2><p>Dine in, take out or ask us about catering.</p><div class="hero-actions"><a class="button-primary" href="{{ route('visit') }}">Visit Tandoori Junction <x-arrow /></a><a class="text-link" href="{{ config('restaurant.telephone_uri') }}">Call {{ config('restaurant.phone') }} <x-arrow /></a></div></section>
    </main>
    <x-site-footer />
</div>
</x-layout>
