<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(cadastro($conexao,$titulo,$autor,$ano,$auditora,$Edicao)){
    echo("Livro cadastrado com sucesso!!");
}else{
    echo("Livro não cadastrado!!");
}
?>