<!-- página com os clientes -->

<?php 
	//include para fazer conexão com o menu
	include("menu.php"); 
	//include para fazer conexão com o bd
	include("script_conexao_bd/conexao.php");

	//expressão para verificar se o campo pesquisa tem algo ou está vazio
	$pesquisa = $_POST['busca'] ?? '';

	//não mudei aqui pois não deu erro
	$sql = "SELECT * FROM venda WHERE cod_corretor LIKE '%$pesquisa%'";

	//para verificar a conexao e sql
	$dados_vendas = mysqli_query($conn, $sql);

	
?>

<div class="container">
<title>Resumo das Vendas</title>
		
	<div class="row">

		<table class="table table-hover">
	  		<thead>
	    		<tr>
	    		<th scope="col">Número da Venda</th>
	      		<th scope="col">Imóvel</th>
	      		<th scope="col">Valor</th>
	      		<th scope="col">Código do Corretor</th>
	      		<th scope="col">Cliente</th>
	      		<th scope="col">Forma de Pagamento</th>
	    		</tr>
	  		</thead>

	  		<tbody>
	  			<?php 
	  				//percorre a tabela vendas para listar elas
	  				while ( $linha = mysqli_fetch_assoc($dados_vendas) ) {
	  					$cod_venda = $linha['cod_venda'];
	  					$imovel = $linha['imovel'];
	  					$valor = $linha['valor'];
	  					$cod_corretor = $linha['cod_corretor'];
	  					$cliente = $linha['cliente'];
	  					$forma_pagamento = $linha['forma_pagamento'];

	  					//cod para listar os vendas em forma de tabela

	  					echo "<tr>
	  							<td scope='row'>$cod_venda</td>
	  					  		<td>$imovel</td>
	  					  		<td>$valor</td>
	  					  		<td>$cod_corretor</td>
	  					  		<td>$cliente</td>
	  		 					<td>$forma_pagamento</td>
	  					  	</tr>";

	  					  
	  				}

	  			 ?>
	    		

	  		</tbody>
		</table>


	</div>
	<br><a href="tabela_imoveis.php" class="btn btn-primary">Voltar para Página Tabela de Imóveis</a>
</div>


