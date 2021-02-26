<?php
header("Content-Type: text/html; charset=iso-8859-1");

// Faz o controle de cache.
$gmtDate = gmdate("D, d M Y H:i:s");
header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
?>
<?php
// Aqui criamos a conexão com o banco de dados.
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeta";
//Criar a conexao---->
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript">
function list_dados(valor)
{
    // Passando os dados para a página result.php através do método GET.
    http.open("GET", "result.php?id=" + valor, true);
    http.onreadystatechange = handleHttpResponse;  
    http.send(null);
}

function handleHttpResponse()
{
    campo_select = document.forms[0].subcategoria;
    if (http.readyState == 4) {
        campo_select.options.length = 0;
        results = http.responseText.split(",");
        for (var i = 0; i < results.length; i++) {
            string = results[i].split("|");
            campo_select.options[i] = new Option(string[0], string[1]);
        }  
    }
}
// Essa função é somente para identificar o Navegador e suporte ao XMLHttpRequest.
// Logo após fazer a verificação, é chamada a função e passada 
// o valor à variável global http.
</script>
</head>
<body>
<form name="formulario" method="post" action="cadastraprojeto.php">
<select name="categoria" onchange="javascript:list_dados(this.value);">
  <option>Selecione o departamento</option>
<?php
/* SQL que busca os artigos do banco de dados e monta o select */
                        $result_depto = "SELECT * FROM depto";
                        $resultado_depto = mysqli_query($conn, $result_depto);
                        while ($row_depto = mysqli_fetch_assoc($resultado_depto)) {?> 
                        <option value= "<?php echo $row_depto ['cod_depto']; ?>"><?php echo $row_depto  ['cod_depto'];?>
                        </option> <?php
                        }
                        
?>
                        </select>  
                        <div class="select-dropdown"></div>
</select>
</p>
<p>
  <select name="subcategoria"></select>
</p>
</form>
</body>
</html>