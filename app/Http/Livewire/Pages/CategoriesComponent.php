<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class CategoriesComponent extends Component
{
    public function render()
    {
        $allCategories = Categories::query()->lates()->get();
        return view('livewire.pages.categories-component', [
            'allCategories' => $allCategories
        ])->layout("template.app");
    }
}
