<?php
#LOCALIZA O PC COM BANCO
$servidor = "localhost";
#NOME DO BANCO
$banco= "gov";
#USUARIO DO BANCO 
$usario = "root";
#SENHA
$senha = "";
#LINK PARA OUTRAS PAGINAS
$link = mysqli_connect($servidor, $usario, $senha, $banco);
?>
