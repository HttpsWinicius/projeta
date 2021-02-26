
<?php
//Criando as VariÁveis 
$cod = $_POST['cod_proj'];
$descricao = $_POST['descricao'];
$codepto = $_POST['cod_depto'];

//Conectando com o Banco de Dados 
$conn = mysqli_connect('localhost','root','','projeta');
if(!$conn){
echo "nao conectado" . mysqli_connect_error();
}

echo "<br>";

//Cadastrando no Bando de Dados
$sql = "INSERT INTO projeto (cod_proj, descricao, cod_depto)
         VALUES  ('$cod','$descricao','$codepto')";
mysqli_query($conn,$sql) or die("<p>NAO FOI POSSIVEL CADASTRAR PROJETO");
mysqli_close($conn);
echo "<p>PROJETO CADASTRADO</p>";

?>
