<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Products extends Component
{
    protected array $selected = [
        'prices'        => [],
        'categories'    => [],
        'manufacturers' => []
    ];

    #[On('updatedSidebar')]
    public function setSelected($selected): void
    {
        $this->selected = $selected;
    }

    public function render(): View
    {
        $products = Product::withFilters(
            $this->selected['prices'],
            $this->selected['categories'],
            $this->selected['manufacturers']
        )->get();

        return view('livewire.products', compact('products'));
    }
}
