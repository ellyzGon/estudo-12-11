<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaCreate extends Component
{
    public $nome;

    public function store(){
        //validar os dados(não vai agora)
        //salvar os dados
        //exibir mensagens de sucesso
        //redirecionar

        Categoria::create([
            'nome' => $this->nome
        ]);

        session()->flash('success','cadastrado');
        return redirect()->route('categoria.index');

    }

    public function render()
    {
        return view('livewire.categoria.categoria-create');
    }
}
