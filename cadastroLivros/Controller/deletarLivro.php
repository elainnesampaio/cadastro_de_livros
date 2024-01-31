<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../view/header.php");
 
extract($_REQUEST,EXTR_OVERWRITE);
 
if (deletar($conexao,$id_livros)) {
    echo("As informações do livro foram excluidas com sucesso.");
}else{
echo("Alerta!!! As informações do livro Não foram salvas");
}
?>