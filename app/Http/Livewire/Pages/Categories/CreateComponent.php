<?php

namespace App\Http\Livewire\Pages\Categories;

use Livewire\Component;

class CreateComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.categories.create-component')->layout("template.app");
    }
}
