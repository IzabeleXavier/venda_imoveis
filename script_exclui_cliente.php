<!-- script para fazer exclusão do cliente -->

<?php 
	//include para fazer conexão com o menu
	include("menu.php");
	//include para fazer conexão com o bd
	include "script_conexao_bd/conexao.php";
	
	// pega os id para saber qual cliente vai excluir
	$id = $_POST['id'];


	//comando para fazer excluir cliente da tabela
	$sql = "DELETE FROM `clientes` WHERE cod_cliente = $id";

	//teste para verificar se exclusão do cliente no bd deu certo

	if (mysqli_query($conn, $sql)) {
	      mensagem ("Cliente Excluído Com Sucesso!", 'success');
	} else {
	      mensagem ("Erro: Cliente Não Foi Excluído!", 'danger');
	}

?>

<br><a href="clientes.php" class="btn btn-primary">Voltar para Página de Clientes</a>