<?php

//variaveis que receberam os dados para inserir na função de conexão

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "bd_sistema_chamado";

//Função de conexões com o banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

if ($conexao->connect_error) {
    die("error:".$conexao->connect_error);
}

?>