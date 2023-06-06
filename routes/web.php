<?php

use App\Http\Livewire\Pages\CategoriesComponent;
use App\Http\Livewire\Pages\Categories\CreateComponent;
use App\Http\Livewire\Pages\BooksComponent;
use App\Http\Livewire\Pages\HomeComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get("/", HomeComponent::class)->name("dashboard");
route::get("/categories", CategoriesComponent::class)->name("categories");
route::get("/books", BooksComponent::class)->name("books");
route::get("/categories/create", createComponent::class)->name("categories.create");
route::get("/categories/{categoriesId}/update", UpdateComponent::class)->name("categories.update");
