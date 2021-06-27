<!-- script para fazer o cadastro do cliente -->

<?php 
	//include para fazer conexão com o menu
	include("menu.php");
	//include para fazer conexão com o bd
	include "script_conexao_bd/conexao.php";
	
	// pega os campos preenchidos anteriormente e transforma nas variáveis
	$nome_cliente = $_POST['nome_cliente'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	//comando para fazer o cadastro de novo cliente na tabela
	$sql = "INSERT INTO `clientes` (`nome_cliente`, `cpf`, `email`, `telefone`) VALUES ('$nome_cliente','$cpf','$email','$telefone')";

	//teste para verificar se cadastro do cliente no bd deu certo

	if (mysqli_query($conn, $sql)) {
	      mensagem ("Cliente Cadastrado!", 'success');
	} else {
	      mensagem ("Erro: Cliente Não foi Cadastrado", 'danger');
	}

?>

<br><a href="clientes.php" class="btn btn-primary">Voltar para Página de Clientes</a>