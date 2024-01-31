<?php
include_once("header.php");
?>
<!--<div class="container m-5"> -->
<div class="container m-5">
 
    <form class="row g-3" method="Post" action="../Controller/adicionaLivro.php">
    <div class="col-md-5">
        <label for="inputtitulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="inputtitulo"><br>
    </div>
    <div class="col-md-3">
        <label for="inputautor" class="form-label">Autor</label>
        <input type="text" class="form-control" name="autor" id="inputautor">
    </div>
   
    <div class="col-md-2">
        <label for="inputano" class="form-label">Ano do Livro</label>
        <input type="number" class="form-control" name="ano" id="inputano">
    </div>

    <div class="col-md-5">
        <label for="inputauditora" class="form-label">Auditora</label>
        <input type="text" class="form-control" name="auditora" id="inputauditora">
    </div>

    <div class="col-md-5">
        <label for="inputEdicao" class="form-label">Edição</label>
        <input type="text" class="form-control" name="Edicao" id="inputEdicao">
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Cadastrar<br></button>
        
    </div>
    </form>
    </div>
</div>
<?php
include_once("footer.php");
 
?>