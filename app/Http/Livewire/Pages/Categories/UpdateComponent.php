<?php

namespace App\Http\Livewire\Pages\Categories;

use Livewire\Component;

class UpdateComponent extends Component
{
    public $name;
    public function mount($categoriesId)
    {
        $findCategories = Categories::findOrFail($categoriesId);
        $this->name = $findCategories->name;
    }
    public function render()
    {
        return view('livewire.pages.categories.update-component');
    }
}
