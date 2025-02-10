<x-layout titulo="Editar">
    <form action= "" method="GET">
        <label >Id</label>
        <input type="number" id="number" value="" disabled required/>
        <br><br>
 
        <label >Data</label>
        <input type="date" id="dataEvento" name="dataEvento" value="" required/>
        <br><br>
 
        <label>Descrição</label>
        <input type="text" id="descricao" name="descricao" value="" required/>
        <br><br>
 
        <button type="submit">Atualizar</button><br><br>
    </form>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Excluir
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Tem certeza que deseja excluir:  ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
            <a type="button" class="btn btn-primary" href="/excluir/">Sim</a>
        </div>
        </div>
    </div>
    </div>

<a href="/"><button>Voltar</button></a>    
</x-layout>