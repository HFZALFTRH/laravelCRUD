<?php

namespace App\Http\Livewire\Pages\Categories;

use Livewire\Component;
use App\Models\categories;

class CreateComponent extends Component
{
    public $name;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();

    categories::create([
            'name' => $this->name
        ]);
        session()->flash('message', 'category successfully created!');
        return redirect(back());

    }
    public function render()
    {
        return view('livewire.pages.categories.create-component')->layout("template.app");
    }
}
