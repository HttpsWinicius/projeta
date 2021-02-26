<?php
                            $servidor = "localhost";
                            $usuario = "root";
                            $senha = "";
                            $dbname = "projeta";
                            //Criar a conexao
                            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
                         ?>

                         
<!DOCTYPE html>
<html lang="pt-br">

<head>

<style>
    /*  botao painel */
.btc {
  background-color: #A9A9A9; /* Blue background */
  border: none; /* Remove borders */
  color: whitesmoke; /* White text */
  padding: 5px 10px; /* Some padding */
  font-size: 14px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
  text-align: center;
  text-align-last: center;
}

/* Darker background on mouse-over */
.btc:hover {
  background-color:	#000000;
}
</style>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Cadastrar Funcionario</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Deletar Projeto</h2>
                </div>
                <div class="card-body">
                <form name="formularioPessoa" method="post" action="\1\Projetos\DeletarProjeto\deletaProjeto.php">    
                    <div class="form-row">
                        <div class="name">Codigo Projeto</div>
                        <div class="value">
                        <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                        <select name="select_depto">
                        <option>Selecione o codigo</option>
                        <?php
                        $result_cod = "SELECT * FROM projeto";
                        $resultado_cod = mysqli_query($conn, $result_cod);
                        while ($row_cod = mysqli_fetch_assoc($resultado_cod)) {?> 
                        <option value= "<?php echo $row_cod  ['cod_proj']; ?>"><?php echo $row_cod  ['cod_proj'];?>
                        </option> <?php
                        }
                    ?>              
                        </select>  
                        <div class="select-dropdown"></div>           
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Descrição</div>
                            <div class="value">
                                <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="select_empregado">
                                <option>Selecione a descrição</option>
                                <?php
                        $result_cod = "SELECT * FROM projeto";
                        $resultado_cod = mysqli_query($conn, $result_cod);
                        while ($row_cod = mysqli_fetch_assoc($resultado_cod)) {?> 
                        <option value= "<?php echo $row_cod  ['cod_proj']; ?>"><?php echo $row_cod  ['descricao'];?>
                        </option> <?php
                        }
                    ?> 
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                            </div>
                            </div>
                        <div class="form-row">
                        <div class="name">Departamento</div>
                        <div class="value">
                        <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                        <select name="select_depto" type="text" id="depto" label="codigo depto">
                        <option>Selecione o departamento</option>
                        <?php
                        $result_depto = "SELECT * FROM depto";
                        $resultado_depto = mysqli_query($conn, $result_depto);
                        while ($row_depto = mysqli_fetch_assoc($resultado_depto)) {?> 
                        <option value= "<?php echo $row_depto  ['cod_depto']; ?>"><?php echo $row_depto  ['cod_depto'];?>
                        </option> <?php
                        }
                        
?>
                        </select>  
                        <div class="select-dropdown"></div>
                  
</div>
</div>
</div>
</div>
                        <div>
                            <button  class="btn btn--radius-2 btn--red" type="button" value="deleta" name="deleta"onclick="submit()">Deletar</button>
                            <a href="/1/Principal.php"><button class="btn btn--radius-2 btn--red" type="button" value="cancelar" name="cancelar" onclick="cancela()">Cancelar</button></a>

                        </div>
                </div>
            </div>
        </div>
                    </form>
        <a href="/1/Principal.php"><button class ="btc" type="button" name="home">Home</button></a>
    </div>
    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->