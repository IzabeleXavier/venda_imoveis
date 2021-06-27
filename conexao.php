<?php 
	//script para fazer a conexão com o bd
	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "vendaimoveis";

	//teste pra ver se a conexão com o bd deu certo
	//conn é variável para conexão
	if ( $conn = mysqli_connect($server, $user, $pass, $bd) ){
		//echo "Conectado!";
	} else
		echo "Erro!";

	function mensagem($texto, $tipo) {
		echo "<div class='alert alert-$tipo' role='alert'>
				$texto
			  </div>";
	}


	

?>