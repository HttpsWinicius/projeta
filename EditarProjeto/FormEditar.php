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
                    <h2 class="title">Editar Projeto</h2>
                </div>
                <div class="card-body">
                <form name="formularioProjeto" method="post" action="/1/Projetos/EditarProjeto/editarProjeto.php">    
                    <form method="POST" action="cadastra.php">
                        <div class="form-row m-b-55">
                            <div class="name">Codigo Projeto</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="cod_proj">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Descrição</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="descricao">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Departamento</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select action = "/1/Projetos/EditarProjeto/editarProjeto.php" name="cod_depto">
                                            <option disabled="disabled" selected="selected">Selecione o departamento</option>
                                            <option>123</option>
                                            <option>125</option>
                                            <option>221</option>
                                            <option>232</option>
                                            <option>257</option>
                                            <option>854</option>
                                            <option>589</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="button" value="cadastra" name="cadastra" onclick="submit()">Editar</button>
                            <a href="/1/Principal.php"><button class="btn btn--radius-2 btn--red" type="button" value="cancelar" name="cancelar" onclick="cancela()">Cancelar</button></a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
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