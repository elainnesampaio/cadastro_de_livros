<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
 
extract($_REQUEST, EXTR_OVERWRITE);
 
$id_livros = isset($id_livros)?$id_livros : "";
if ($id_livros){
    $livros = buscarporID($conexao, $id_livros);
 
?>
<!--<div class="container m-5"> -->
<div class="container m-5">
 
    <form class="row g-3" method="Post" action="../Controller/alterarLivro.php">
    <input type="hidden" value="<?php echo($livros["id_livros"]);?>" name="id_livros">
    <div class="col-md-5">
        <label for="inputtitulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" value="<?php echo($livros["titulo"]);?>" name="titulo" id="inputtitulo">
    </div>
    <div class="col-md-3">
        <label for="inputautor" class="form-label">Autor</label>
        <input type="text" class="form-control" value="<?php echo($livros["autor"]);?>" name="autor" id="inputautor">
    </div>

    <div class="col-md-3">
        <label for="inputano" class="form-label">Ano</label>
        <input type="number" class="form-control" value="<?php echo($contatlivrosos["ano"]);?>" name="ano" id="inputano">
    </div>

    <div class="col-md-3">
        <label for="inputauditora" class="form-label">Auditora</label>
        <input type="text" class="form-control" value="<?php echo($livros["auditora"]);?>" name="auditora" id="inputauditora">
    </div>

    <div class="col-md-3">
        <label for="inputEdicao" class="form-label">Edição</label>
        <input type="text" class="form-control" value="<?php echo($livros["Edicao"]);?>" name="Edicao" id="inputEdicao">
    </div>
   
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
    </form>
    </div>
</div>
<?php
}else {
    echo ("Dados não encontrados");
}
include_once("footer.php");
 
?>