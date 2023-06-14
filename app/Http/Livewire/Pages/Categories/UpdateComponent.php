<?php

namespace App\Http\Livewire\Pages\Categories;

use Livewire\Component;
use App\Models\categories;

class UpdateComponent extends Component
{
    public $name;
    public $categoriesId;
    public $findCategories;
    public function mount($categoriesId)
    {
        $this->findCategories = categories::findOrFail($categoriesId);
        $this->categoriesId = $this->findCategories->name;
        $this->name = $this->findCategories->name;

    }

    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function update()
    {
        $this->validate();
        $updatecategories = categories::find($this->findCategories);
        $updatecategories->update([
            'name' => $this->name
        ]);

        session()->flash('message', 'category successfully update!');
        return redirect()->back();
    }
    public function render()
    {
        return view('livewire.pages.categories.update-component');
    }
}
