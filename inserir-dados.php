<?php

include_once("config/conexao.php");

if($_POST){

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nasc = $_POST["dataNasc"];
    $genero = $_POST["genero"];
 
    //CRIAÇÃO DA HASH
    $token_cliente = sha1(md5(date('d/m/Y').$nome.$sobrenome));

    $query="INSERT INTO tbl_doadores(nome, sobrenome, data_nasc, id_genero, id_situacao, `hash`) VALUES('$nome', '$sobrenome', '$data_nasc', '$genero', 1, '$token_cliente')";
 
    $inserir = mysqli_query($conexao, $query);
   
    if($inserir){
        //$id_client = mysqli_insert_id($conexao); FOI ADICIONADO O "TOKEN" PARA O ID NÃO IR NA URL DO SISTEMA

        header("location: endereco.php?client=".$token_cliente);
    } else {
        header("location: dados.php");
    }
} else {
    header("location: dados.php");
}


?>