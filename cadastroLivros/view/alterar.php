<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
 
?>
<div class="container m-5">
 
<!-- inicio de formulario -->
<div class="row g-3 align-items-center">
<form class="row g3" method="POST" action="#">
  <div class="col-auto">
    <label for="inputcodigo" class="col-form-label">Digite o Nome</label>
  </div>
  <div class="col-auto">
    <input type="text" id="inputcodigo" name="titulo" class="form-control" aria-describedby="passwordHelpInline">
  </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
 
<!-- fim de formulario -->
 
 
<!-- Inicio tabela -->
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Ano</th>
      <th scope="col">Auditora</th>
      <th scope="col">Edição</th>
      <th scope="col">Alterar</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
        extract($_REQUEST,EXTR_OVERWRITE);
 
        $titulo = isset($titulo)?$titulo : "";
        if($titulo){
 
            $dados = buscar($conexao,$titulo);
 
            foreach($dados as $contatos):
       
            ?>
     
    <tr>
      <th scope="row"> <?php echo($contatos["id_livros"]);?></th>
      <td><?=$contatos["titulo"]?> </td>
      <td><?$contatos["autor"]?> </td>
      <td><?=$contatos["ano"]?> </td>
      <td><?=$contatos["auditora"]?> </td>
      <td><?=$contatos["Edicao"]?> </td>
      <td> 
      <a class="btn btn-primary" href="alterarFormulario.php?id_livros=<?=$contatos["id_livros"]?>">Alterar</a>
    </td>
    </tr>
        <?php
        endforeach;
    }
    ?>
  </tbody>
</table>
 
<?php
include_once("footer.php");
?>