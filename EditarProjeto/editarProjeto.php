<?php
//Criando as VariÁveis 
$codigoP = $_POST['cod_proj'];
$descricaoP = $_POST['descricao'];
$codigo = $_POST['cod_depto'];


//Conectando com o Banco de Dados 
$conn = mysqli_connect('localhost','root','','projeta');
if(!$conn){
echo "nao conectado" . mysqli_connect_error();
}

echo "<br>";

//Cadastrando no Bando de Dados


$sql = "UPDATE empregado SET cod_proj = '$codigoP' AND descricao = '$descricaoP' AND cod_depto = '$codigo'";
mysqli_query($conn,$sql) or die("<p>DEPARTAMENTO INVÁLIDO");
echo "<p>EDITADO COM SUCESSO</p>";

?>