<?php
include_once("config/conexao.php");

if ($_POST) {
    $token_cliente = $_POST["id_client"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];

    $queryConsultaToken = "SELECT * FROM tbl_doadores WHERE `hash` = '$token_cliente'";
    $resultado = mysqli_query($conexao, $queryConsultaToken);
    $dadosCliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $id = $dadosCliente[0]["id"];

    $queryDocs = "INSERT INTO tbl_endereco(id_usuario, endereco, numero, cidade, cep, uf, id_situacao) VALUES('$id','$endereco', '$numero', '$cidade', '$cep', '$uf', 1)";

    $inserir = mysqli_query($conexao, $queryDocs);

    if ($inserir) {

        header("location: completar-cadastro.php?client=" . $token_cliente);
    } else {
        header("location: dados.php");
    }
} else {
    header("location: dados.php");
}
?>