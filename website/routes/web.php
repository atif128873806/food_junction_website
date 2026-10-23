<?php

use App\Support\MenuRepository;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => response()->view('home')->header('X-Robots-Tag', 'noindex, nofollow'))->name('home');
Route::get('/menu', function (MenuRepository $menu) {
    $groups = $menu->groups();
    $selectedGroup = $groups->firstWhere('slug', request()->query('category')) ?? $groups->first();
    $items = $menu->items()->where('group', $selectedGroup['slug'])->values();
    $groupCounts = $menu->items()->countBy('group');
    $selectedIndex = $groups->search(fn ($group) => $group['slug'] === $selectedGroup['slug']);
    $previousGroup = $selectedIndex > 0 ? $groups[$selectedIndex - 1] : null;
    $nextGroup = $selectedIndex < $groups->count() - 1 ? $groups[$selectedIndex + 1] : null;

    return view('menu', compact('groups', 'selectedGroup', 'items', 'groupCounts', 'previousGroup', 'nextGroup'));
})->name('menu');
Route::view('/our-story', 'story')->name('story');
Route::view('/catering', 'catering')->name('catering');
Route::view('/visit-us', 'visit')->name('visit');

// Historical preview URL now leads to the completed approved direction.
Route::get('/preview/client-study', fn () => redirect()->route('home'))->name('client-study');
Route::get('/menu-proof', function () {
    abort_unless(app()->environment(['local', 'testing']), 404);
    return response()->file(storage_path('app/private/menu-proof.pdf'), [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="Tandoori-Junction-PRINT-PROOF.pdf"',
        'X-Robots-Tag' => 'noindex, nofollow',
        'Cache-Control' => 'private, no-store',
    ]);
})->name('menu-proof');
