<?php
include_once("config/conexao.php");

if($_POST) {
$token_cliente = $_POST["id_client"];
$mae = $_POST["mae"];
$pai = $_POST["pai"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$tipoSangue = $_POST["tipo"];
$fatorPositivo = $_POST["positivo"];
$fatorNegativo = $_POST["negativo"];
$fatorDesconheco = $_POST["desconheco"];
$senha = $_POST["senha"];
$salt = md5($email.$senha);
$custo = "06";
$senha_segura = crypt($senha, '$2b$'. $custo .'$'. $salt .'$'); 
$telefone = $_POST["telefone"];

//CONSULTA DE DADOS PARA BLOQUEIO DE DUPLICIDADE DE EMAIL

$queryConsultarEmail = "SELECT * FROM tbl_acessos WHERE usuario = '$email'";
$resultadoEmail = mysqli_query($conexao, $queryConsultarEmail);
$dadosEmail = mysqli_fetch_all($resultadoEmail, MYSQLI_ASSOC);

if($dadosEmail){
    header("location: completar-cadastro.php?client=$token_cliente&msg=email");
    exit;
}
////////////////////////////////////////////////////////////

$queryConsultaToken = "SELECT * FROM tbl_doadores WHERE `hash` = '$token_cliente'";
$resultado = mysqli_query($conexao, $queryConsultaToken);
$dadosCliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
$id = $dadosCliente[0]["id"];

$queryPais = "INSERT INTO tbl_pais(id_usuario, nome_pai, nome_mae, id_situacao) VALUES('$id', '$pai', '$mae', 1)";
$inserirPais = mysqli_query($conexao, $queryPais);

if($inserirPais) {
$queryDocs = "INSERT INTO tbl_documentos (id_usuario, id_tipo_doc, documento, id_situacao) VALUES ('$id', 1, '$cpf', 1), ('$id', 2, '$rg', 1)";
$inserirDocs = mysqli_query($conexao, $queryDocs);

    if($inserirDocs){
    $queryEmail = "INSERT INTO tbl_contatos_email(id_usuario, email, id_situacao) VALUES ('$id', '$email', 1)";
    $inserirEmail = mysqli_query($conexao, $queryEmail);

        if($inserirEmail){
            $queryContato = "INSERT INTO tbl_contatos (id_usuario, numero_tel, id_situacao) VALUES ('$id', '$telefone', 1)";
            $inserirContato = mysqli_query($conexao, $queryContato);

                if($inserirContato){
                    $queryTipo = "INSERT INTO tbl_tipo_sangue (id_usuario, tipo, id_situacao) VALUES ('$id', '$tipoSangue', 1)";
                    $inserirTipo = mysqli_query($conexao, $queryTipo);

                    if($inserirTipo){
                        $queryFator = "INSERT INTO tbl_fator (id_usuario, positivo, negativo, desconheco, id_situacao) VALUES ('$id', '$fatorPositivo', '$fatorNegativo', '$fatorDesconheco', 1)";
                        $inserirFator = mysqli_query($conexao, $queryFator);

                        if($inserirFator){
                            $queryAcesso = "INSERT INTO tbl_acessos (id_usuario, usuario, senha, id_situacao) VALUES ('$id', '$email', '$senha_segura', 1)";
                            $inserirAcesso = mysqli_query($conexao, $queryAcesso);

                            if($inserirAcesso) {
                                session_start();
                                $_SESSION["ID_USUARIO"] = $dadosEmail[0]["id_usuario"];
                                $_SESSION["USUARIO"] = $dadosEmail[0]["usuario"];
                                $_SESSION["ID_SITUACAO"] = $dadosEmail[0]["id_situacao"];
                            
                                $queryUsuario = "SELECT * FROM tbl_doadores WHERE id = '".$id."'";
                                $consultarUsuario = mysqli_query($conexao, $queryUsuario);
                                $resultadoUsuario = mysqli_fetch_all($consultarUsuario, MYSQLI_ASSOC);
                            
                                $_SESSION["NOME_USUARIO"] = $resultadoUsuario[0]["nome"];
                                $_SESSION["SOBRENOME_USUARIO"] = $resultadoUsuario[0]["sobrenome"];

                                header("location: minhaConta.php");
                            } else {
                                header("location: completar-cadastro.php?client=".$token_cliente);
                            }
                        }else {
                            header("location: completar-cadastro.php?client=".$token_cliente);
                        }
                    }else {
                        header("location: completar-cadastro.php?client=".$token_cliente);
                    }
                } else {
                    header("location: completar-cadastro.php?client=".$token_cliente);
                }
        } else {
            header("location: completar-cadastro.php?client=".$token_cliente);
        }
    } else {
        header("location: completar-cadastro.php?client=".$token_cliente);
}
        } else {
            header("location: acesso.php");
}



}
