<!-- script para verificar login do corretor -->

<?php
  session_start();
  //incluindo conexão com o menu
  include("menu.php");
  //incluindo conexão com o bd
  include "script_conexao_bd/conexao.php";

  //verifica se variável existe
  if ((isset($_POST['nome_corretor'])) && (isset($_POST['senha']))) {

    $nome_corretor = mysqli_real_escape_string($conn,$_POST['nome_corretor']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);


    //seleciona e verifica se senha e usuário estão corretos na tabela corretor do bd
    $sql = "SELECT * FROM `corretor` WHERE `nome_corretor` = '$nome_corretor' AND `senha` = '$senha' ";

    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);

    //login não funciona, não está verificando os parametros e entra mesmo com usuário ou senha errado
    if ($resultado = false) {
      echo "User ou senha inválidos. <a href='login.php'>Se quiser tentar novamente clique aqui.</a>";

    } else{
      header("Location: tabela_imoveis.php");
    } 

  } else{
    echo "Usuário ou senha inválidos";
  }

  
?>