<?php 
//recebendo os dados do formulario
$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$senha = $_POST ['senha'];


// Chamando o arquivo de conexão com o banco de dados
    include 'conexao.php';

$insert = "INSERT INTO tb_user VALUE (null, 'jose', 
'ze@gmail.com', 'secretaria', '123456')";

$query = $conexao->query($insert);

if ($conexao->query($insert)) {
    echo "<script>alert('usuario cadastrado com sucesso!') location.href = '../cadastro.html'</
    script>";
}

?>
