<!-- página para fazer alteração de um cliente -->

<?php 
  //include para fazer conexão com o menu
	include("menu.php"); 
	//include para fazer conexão com o bd
  include("script_conexao_bd/conexao.php");

    //variável para verificar o cod_cliente e ver se está vazio
    $id = $_GET['id'] ?? '';

    //conexão com a tabela clientes e verificação do cod_cliente
    $sql = "SELECT * FROM clientes WHERE cod_cliente = '$id'";

    //conexão com o bd
    $dados = mysqli_query($conn, $sql);

    $linha_dados_edit = mysqli_fetch_assoc($dados);
?>

<div class="container">

	<title>Alteração de Cadastro</title>
	<!-- action que leva direto para o script que edita no bd -->
	<form action="script_edit_cliente.php" method="POST">
		<div class="form-group">
    		<label for="nome_cliente">Nome</label>
    		<input type="name" class="form-control" name="nome_cliente"  placeholder="Maria" required value="<?php  echo $linha_dados_edit['nome_cliente']; ?>">
  		</div>

  		<div class="form-group">
   		 	<label for="cpf">CPF</label>
    		<input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" required value="<?php  echo $linha_dados_edit['cpf']; ?>">
  		</div>

  		<div class="form-group">
    		<label for="email">E-mail</label>
    		<input type="email" class="form-control" name="email" placeholder="maria@gmail.com" required value="<?php  echo $linha_dados_edit['email']; ?>">
  		</div>

  		<div class="form-group">
   		 	<label for="telefone">Telefone</label>
    		<input type="text" class="form-control" name="telefone" placeholder="(84) 90000-0000" required value="<?php  echo $linha_dados_edit['telefone']; ?>">
  		</div>
  
  		<button type="submit" class="btn btn-success" >Salvar Alterações</button>
      <input type="hidden" name="id" value="<?php  echo $linha_dados_edit['cod_cliente']; ?>">
	</form>

	<br><a href="clientes.php" class="btn btn-primary">Voltar para Página de Clientes</a>

</div>

