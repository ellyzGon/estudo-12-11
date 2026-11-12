<div class="card position-absolute top-50 start-50 translate-middle" style="max-width: 320px;">
    <div class="card-body">
      <i class="fs-4xl text-center bi bi-card-list"></i>
      <form  wire:submit='store'>
        <h4 class="card-title text-center"><strong>Cadastro Categoria</strong></h4><br>
        <label for="nome" class="form-label mb-2">nome</label>
        <input type="text" class="form-control" id="exampleFormControlInput" placeholder="..." wire:model='nome'><br>
       <button type="submit" class="btn-outline theme-accent">Cadastrar</button>
      </form>
    </div>
</div>
