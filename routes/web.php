<?php

use App\Livewire\Categoria\CategoriaEdit;
use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\CategoriaCreate;
use Illuminate\Support\Facades\Route;

Route::get('/cadastrocategoria', CategoriaCreate::class)->name('categoria.create');
Route::get('/categoriaindex', CategoriaIndex::class)->name('categoria.index');
Route::get('/categoriaedit', CategoriaEdit::class)->name('categoria.edit');
