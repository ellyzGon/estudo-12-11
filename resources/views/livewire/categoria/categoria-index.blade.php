<div>
    <p class ="text-center fs-4xl"><strong>Categorias cadastradas</strong></p>
    <div class="card position-absolute top-50 start-50 translate-middle" style="max-width: 320px;">
    <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $c)
            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->nome}}</td>
                <td>
                    <a href="{{ route('categoria.edit', ['id' => $c->id])}}"
                        class="btn-outline theme-success">Editar</a>

                    <button wire:click='delete({{$c->id}})'
                        class="btn-outline theme-danger">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
</div>
