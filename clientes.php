<!-- página com os clientes -->
<?php 
	//include para fazer conexão com o menu
	include("menu.php"); 
	//include para fazer conexão com o bd
	include("script_conexao_bd/conexao.php");

	//expressão para verificar se o campo pesquisa tem algo ou está vazio
	$pesquisa = $_POST['busca'] ?? '';

	//conexão com a tabela clientes e comparação da pesquisa com o nome do cliente
	$sql = "SELECT * FROM clientes WHERE nome_cliente LIKE '%$pesquisa%'";

	//para verificar a conexao e sql
	$dados = mysqli_query($conn, $sql);

	
?>

<div class="container">
<title>Clientes</title>

	<div class="row">

		<table class="table">
	  		<thead>
	    		<tr>
	      		<td scope="col"><b><h4>Gerenciar Clientes</h4></b></td>

	      		<td scope="col"> 
	      			<form class="form-inline my-2 my-lg-0" action="clientes.php" method="POST">
	     				<input class="form-control mr-sm-2" type="search" placeholder="Nome do Cliente" aria-label="Pesquisar" name="busca" autofocus>
	     				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
	    			</form>
				</td>

	      		<form class="form-inline my-2 my-lg-0">	      				
	      			<td scope="col" class="dropdown">
	        			<a class="form-control mr-sm-2 nav-link dropdown-toggle" href="#" id="tbDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenar Por</a>

	        			<div class="dropdown-menu" aria-labelledby="tbDropdown">
	          				<a class="dropdown-item" href="#">Ordenar Por Mais Recentes</a>
	          				<a class="dropdown-item" href="#">Ordenar Por Mais Antigos</a>
	          				<div class="dropdown-divider"></div>
	        			</div>
	     			</td>

	    		</form>

	      		<td scope="col">
	      			<form class="form-inline my-2 my-lg-0">
	      				<a href="cadastro_cliente.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Cadastrar Cliente +</button></a>
	    			</form>
	      		</td>
	    		</tr>
	  		</thead>
	  	</table>

		
	</div>
		
	<div class="row">
		
		<table class="table table-hover">
	  		<thead>
	    		<tr>
	      		<td scope="col">Cliente</td>
	      		<td scope="col">E-mail</td>
	      		<td scope="col">Telefone</td>
	      		<td scope="col"></td>
	    		</tr>
	  		</thead>

	  		<tbody>
	  			<?php 
	  				//percorre a tabela clientes para listar eles
	  				while ( $linha = mysqli_fetch_assoc($dados) ) {
	  					$cod_cliente = $linha['cod_cliente'];
	  					$nome_cliente = $linha['nome_cliente'];
	  					$email = $linha['email'];
	  					$telefone = $linha['telefone'];

	  					//cod para listar os clientes em forma de tabela
	  					//?id=$cod_cliente usando para pegar as informações do cliente que vai ter os dados alterados para levar para a pag de alterações

	  					echo "<tr>
	  					  		<th scope='row'>$nome_cliente</th>
	  					  		<th>$email</th>
	  					  		<th>$telefone</th>
	  					  		<th><a href='cadastro_cliente_edita.php?id=$cod_cliente' ><button class='btn btn-primary 'type='button'>Editar</button></a></th>
	  					  		<th><a href='#' ><button class='btn btn-danger' data-toggle='modal' data-target='#confirma' 'type='button'>Excluir</button><a></th>		  		 		
	  					  	</tr>";

	  					  	//excluir não ta dando certo, não mostra erro mas tbm não exclui
	  				}

	  			 ?>
	    		
	    		<!-- Modal -->
	    		<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-hidden="true">
	    		  <div class="modal-dialog" role="document">
	    		    <div class="modal-content">
	    		      <div class="modal-header">
	    		        <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão de Cliente</h5>
	    		        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	    		          <span aria-hidden="true">&times;</span>
	    		        </button>
	    		      </div>
	    		      <div class="modal-body">
	    		      	<form action="script_exclui_cliente.php" method="POST">
	    		        	<p>Deseja realmente excluir o cliente?</p>
	    		        	<input type="hidden" name="id" id="cod_cliente" value="">
	    		      	</div>
	    		      	<div class="modal-footer">
	    		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
	    		        	<button type="submit" class="btn btn-danger" >Sim</button>
	    		        </form>
	    		      </div>
	    		    </div>
	    		  </div>
	    		</div>

	  		</tbody>
		</table>


	</div>

</div>


