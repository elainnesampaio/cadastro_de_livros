<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
?>
<!-- inicio de formulario -->
<form class="row g3" method="POST" action="#">
<div class="row g-3 align-items-center">
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
</form>
 
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
      <td><?=$contatos["autor"]?> </td>
      <td><?=$contatos["ano"]?> </td>
      <td><?=$contatos["auditora"]?> </td>
      <td><?=$contatos["Edicao"]?> </td>
      <td>
        <!-- Button trigger modal -->
<button type="button" id_livros="<?php echo($contatos["id_livros"]);?>" titulo="<?=$contatos["titulo"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
  Deletar
</button>
 
      </td>
    </tr>
        <?php
        endforeach;
    }
    ?>
  </tbody>
</table>
<!-- fim tabela -->
</div>
 
<!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Atenção na exclusão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     <div class="modal-body">
      ...
     </div>
      <div class="modal-footer">
        <form action="../Controller/deletarLivro.php" method="get">
        <input type="hidden" class="idlivros from-control" name="id_livros">
      <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
 
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
       
      </div>
    </div>
  </div>
</div>

    <script>
        let deletarContatoModal = document.getElementById('deletarModal');
            deletarContatoModal.addEventListener('show.bs.modal', function(event){
        let button = event.relatedTarget;
        let idlivros = button.getAttribute('id_livros');
        let titulo = button.getAttribute('titulo');
 
        let modalBody = deletarContatoModal.querySelector('.modal-body');
        modalBody.textContent = 'Deseja realmente excluir o Contato ' + titulo + idlivros + '?'
 
        let idLivro = deletarContatoModal.querySelector('.modal-footer .idlivros');
        idLivro.value = idlivros;
 
       })
    </script>
<?php
include_once("footer.php");
?>