<?php
require_once("../Model/conexao.php");
require_once("../Model/bancoContato.php");
include_once("../view/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

 buscar($conexao,$titulo,$autor,$ano,$auditora,$Edicao);
 header("Location: ../view/buscarLivro.php")
?>