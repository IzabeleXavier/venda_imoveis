<!-- script para fazer edição dos dados do cliente -->

<?php 
	//include para fazer conexão com o menu
	include("menu.php");
	//include para fazer conexão com o bd
	include "script_conexao_bd/conexao.php";

	// pega os campos preenchidos anteriormente e transforma nas variáveis
	$id = $_POST['id'];
	$nome_cliente = $_POST['nome_cliente'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	//comando para fazer edição dos dados do cliente no bd
	//WHERE cod_cliente = $id -> importante para não ocorrer o erro de alterar todos os clientes do bd ao mesmp tempo
	$sql = "UPDATE `clientes` set `nome_cliente` = '$nome_cliente', `cpf` = '$cpf', `email` = '$email', `telefone` = '$telefone' WHERE cod_cliente = $id";

	//teste para verificar se edição dos dados do cliente no bd deu certo
	if (mysqli_query($conn, $sql)) {
	      mensagem ("Dados do Cliente Alterados Com Sucesso!", 'success');
	} else {
	      mensagem ("Erro: Dados do Cliente Não Foram Alterados", 'danger');
	}

?>

<br><a href="clientes.php" class="btn btn-primary">Voltar para Página de Clientes</a>