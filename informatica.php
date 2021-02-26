<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Informatica</title>		
	</head>
	<body>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
        }
        $result_usuario = "SELECT nome_emp, descricao FROM empregado INNER join projeto ON(empregado.cod_depto = projeto.cod_depto) WHERE descricao = 'INFORMATICA' GROUP BY nome_emp, descricao;";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario))
                echo "Nome do funcionario:" . $row_usuario ['nome_emp'] . "<br>";
        ?>
				
	</body>
</html>