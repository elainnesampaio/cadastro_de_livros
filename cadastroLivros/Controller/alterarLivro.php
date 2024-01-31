<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterar($conexao,$id_livros,$titulo,$autor,$ano,$auditora,$Edicao)){
    echo("Livro alterado com sucesso!!");
}else{
    echo("Livro não alterado!!");
}
?>