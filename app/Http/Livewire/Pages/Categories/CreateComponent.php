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

    Categories::create([
            'name' => $this->name
        ]);
        return redirect(route("categories"));
    }
    public function render()
    {
        return view('livewire.pages.categories.create-component')->layout("template.app");
    }
}
