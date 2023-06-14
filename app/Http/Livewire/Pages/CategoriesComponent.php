<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\categories;

class CategoriesComponent extends Component
{
    public function destroy($categoriesId)
    {
        $findCategories = Categories::find($categoriesId);
        $findCategories->delete();
        session()->flash('message', 'category ' . $findCategories->name . ' successfully deleted!');
        return redirect()->back();
    }
    public function render()
    {
        $allCategories = categories::query()->latest()->get();
        return view('livewire.pages.categories-component', [
            'allCategories' => $allCategories
        ])->layout("template.app");
    }
}
