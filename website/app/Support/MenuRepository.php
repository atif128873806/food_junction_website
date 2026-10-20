<?php

namespace App\Support;

use Illuminate\Support\Collection;

final class MenuRepository
{
    private array $data;

    public function __construct()
    {
        $this->data = json_decode(file_get_contents(resource_path('data/menu.json')), true, flags: JSON_THROW_ON_ERROR);
    }

    public function groups(): Collection
    {
        return collect($this->data['groups']);
    }

    public function items(): Collection
    {
        return collect($this->data['items']);
    }
}
