<!-- página do lohin do vendedor -->
<?php 
    session_start();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/estilo.css">

<div class="container" >
	<h3 class="text-center">Login do Vendedor</h3 class="text-center">

	<p class="text-center">Olá, vendedor(a)! Para que você possa realizar novas vendas entre nos sistema preenchendo o formulário abaixo:</p>
	
  <!--action para o script que verifica o login -->
	<form action="verifica_login.php" method="POST">
  		<div class="form-group">
    		<label for="usuario_vendedor">Usuário</label>
   			<input type="name" class="form-control" id="nome_corretor"  name="nome_corretor" placeholder="Seu Usuário" required>
  		</div>

  		<div class="form-group">
    		<label for="exampleInputPassword1">Senha</label>
    		<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
  		</div>

  		<button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
	</form>



</div>

<?php 

  

 ?>