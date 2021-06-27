<!-- página para fazer o cadastro, edição, exclusão e pesquisa dos novos clientes e para mostrar os que já existem -->

<?php 
  //conexão com o menu
	include("menu.php"); 
	

?>

<div class="container">
	<title>Cadastro</title>
	<!-- action que leva direto para o script que faz o cadastro no bd -->
	<form action="script_cad_cliente.php" method="POST">
		<div class="form-group">
    		<label for="nome_cliente">Nome</label>
    		<input type="name" class="form-control" name="nome_cliente"  placeholder="Maria" required>
  		</div>

  		<div class="form-group">
   		 	<label for="cpf">CPF</label>
    		<input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" required maxlength="14">
  		</div>

  		<div class="form-group">
    		<label for="email">E-mail</label>
    		<input type="email" class="form-control" name="email" placeholder="maria@gmail.com" required>
  		</div>

  		<div class="form-group">
   		 	<label for="telefone">Telefone</label>
    		<input type="text" class="form-control" name="telefone" placeholder="(84) 90000-0000" required maxlength="15">
  		</div>
  
  		<button type="submit" class="btn btn-success" >Cadastrar</button>
	</form>

	<br><a href="clientes.php" class="btn btn-primary">Voltar para Página de Clientes</a>

</div>

