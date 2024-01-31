<?php
function cadastro($conexao,$titulo,$autor,$ano,$auditora,$Edicao){
    $query = "insert into cadastro(titulo,autor,ano,auditora,Edicao)values('{$titulo}','{$autor}','{$ano}','{$auditora}','{$Edicao}')";
    return mysqli_query($conexao,$query);
}
function alterar($conexao,$titulo,$autor,$ano,$auditora,$Edicao){
    $query = "update cadastro set titulo = '{$titulo}', autor = '{$autor}', ano = '{$ano}', auditora = '{$auditora}', Edicao = '{$Edicao}' where id_livros = '{$id_livros}'";
    $result = mysqli_query($conexao,$squery);
    return $result;
}

function buscar($conexao,$titulo){
    $query = "Select * from cadastro where titulo like '%{$titulo}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
function deletar($conexao,$id_livros){
   
    $query = "Delete from cadastro where id_livros = '{$id_livros}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
function buscarporID($conexao, $id_livros)
{
    $query = "Select * from cadastro where id_livros = {$id_livros}";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
}