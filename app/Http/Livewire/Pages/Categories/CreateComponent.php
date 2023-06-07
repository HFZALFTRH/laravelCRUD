<?php

namespace App\Http\Livewire\Pages\Categories;

use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.pages.categories.create-component')->layout("template.app");
    }
}
