<?php

namespace Tests\Feature;

use App\Support\MenuRepository;
use Tests\TestCase;

class RestaurantPagesTest extends TestCase
{
    public function test_all_requested_pages_render_with_the_restaurant_identity(): void
    {
        foreach (['/' => 'Tandoori Junction', '/menu' => 'Our Menu', '/our-story' => 'About Tandoori Junction', '/catering' => 'Catering', '/visit-us' => 'Visit Us'] as $path => $heading) {
            $this->get($path)->assertOk()->assertSee($heading)->assertSee('Tandoori Junction')->assertSee('160 New Delhi Drive');
        }
    }

    public function test_menu_keeps_every_source_entry_and_original_taxonomy_across_category_pages(): void
    {
        $menu = app(MenuRepository::class);
        $this->assertCount(169, $menu->items());
        $this->assertCount(18, $menu->items()->pluck('category')->unique());
        $this->assertCount(12, $menu->groups());

        foreach ($menu->groups() as $group) {
            $response = $this->get('/menu?category='.$group['slug'])->assertOk()
                ->assertSee('id="heading-'.$group['slug'].'"', false)
                ->assertSee('images/menu-category-'.$group['slug'].'-1274.webp');

            $groupItems = $menu->items()->where('group', $group['slug']);
            $this->assertGreaterThan(0, $groupItems->count());
            foreach ($groupItems as $item) {
                $response->assertSee('data-source-id="'.$item['id'].'"', false)->assertSee($item['name']);
            }

            $otherGroupItem = $menu->items()->first(fn ($item) => $item['group'] !== $group['slug']);
            $response->assertDontSee('data-source-id="'.$otherGroupItem['id'].'"', false);
        }
    }

    public function test_printed_size_and_preparation_prices_are_preserved_without_guessing_soup_prices(): void
    {
        $items = app(MenuRepository::class)->items()->keyBy('id');
        $this->assertSame([['label' => 'Regular', 'amount' => '14.99'], ['label' => 'Large', 'amount' => '17.99']], $items['P07-01']['prices']);
        $this->assertSame([['label' => 'Regular', 'amount' => '15.99'], ['label' => 'Large', 'amount' => '18.99']], $items['P08-01']['prices']);
        $this->assertSame([['label' => 'Gravy', 'amount' => '15.99'], ['label' => 'Dry', 'amount' => '17.99']], $items['P09-05']['prices']);
        $this->assertSame([], $items['P09-17']['prices']);
        $this->assertSame('$11.50 at category heading', $items['P09-17']['printed_price']);
        $this->get('/menu?category=vegetarian-curries')->assertSee('Regular')->assertSee('$14.99')->assertSee('Large')->assertSee('$17.99');
        $this->get('/menu?category=non-vegetarian-curries')->assertSee('Regular')->assertSee('$15.99')->assertSee('Large')->assertSee('$18.99');
        $this->get('/menu?category=hakka-soup')->assertSee('Price to confirm')->assertSee('$11.50')->assertSee('Gravy')->assertSee('Dry');
    }

    public function test_photo_led_menu_has_simple_category_navigation_and_no_search_form(): void
    {
        $response = $this->get('/menu?category=non-vegetarian-curries')->assertOk()->assertSee('Butter Chicken')->assertSee('Regular')->assertSee('$15.99')->assertSee('Large')->assertSee('$18.99');
        $response->assertDontSee('role="search"', false)->assertDontSee('type="search"', false)->assertDontSee('Find a dish');

        foreach (app(MenuRepository::class)->groups() as $group) {
            $response->assertSee('category='.$group['slug'], false)->assertSee($group['name']);
        }

        $this->get('/menu?q=butter+chicken')->assertOk()->assertSee('Virgin Mojito')->assertDontSee('Butter Chicken');
        $this->get('/menu?category=not-a-category')->assertOk()->assertSee('Mocktails, Shakes & Lassi');
    }

    public function test_homepage_has_a_full_width_photo_hero_and_links_to_real_menu_categories(): void
    {
        $response = $this->get('/')->assertOk()
            ->assertSee('data-home-hero', false)
            ->assertSee('data-hero-image', false)
            ->assertSee('menu-category-tandoori-non-veg-1274.webp');

        $response->assertSee('category=tandoori-veg', false)
            ->assertSee('category=tandoori-non-veg', false)
            ->assertSee('category=street-food', false);
    }

    public function test_ambiguous_entries_remain_flagged_and_repeated_biryanis_retained(): void
    {
        $items = app(MenuRepository::class)->items()->keyBy('id');
        foreach (['P03-07', 'P04-14', 'P08-07', 'P08-14', 'P08-15', 'P08-18', 'P09-05', 'P09-17', 'P12-08'] as $id) {
            $this->assertNotEmpty($items[$id]['review_notes']);
        }
        $this->assertArrayHasKey('P04-16', $items->all());
        $this->assertArrayHasKey('P11-05', $items->all());
    }

    public function test_no_unconfirmed_ordering_or_booking_routes_are_exposed(): void
    {
        $this->get('/order-online')->assertNotFound();
        $this->get('/booking')->assertNotFound();
        $this->get('/preview/client-study')->assertRedirect('/');
    }
}
