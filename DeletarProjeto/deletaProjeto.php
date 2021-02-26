
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
$sql = "DELETE FROM projeto WHERE cod_proj = '$codigoP' AND descricao = '$descricaoP' AND cod_depto = '$codigo'";
if(mysqli_query($conn,$sql)) {
    if($conn->affected_rows==0){
        echo"<p>PROJETO NÃO ENCONTRADO";
    }
    else {echo "<p>PROJETO DELETADO</p>";
    }
} else {die("<p>ERRO QUERY.");}

mysqli_close($conn);


?>