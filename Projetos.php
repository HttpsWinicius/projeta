<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt/br">
<head>
  <meta charset="utf-8">
  <title>Painel Administrador</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

        <style>
/* Style buttons */
.btn {
  background-color:#808080 ; /* Blue background */
  border: none; /* Remove borders */
  color: whitesmoke; /* White text */
  padding: 10px 12px; /* Some padding */
  font-size: 13px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
  background-color:	#000000;
}
</style>
<style>
.btc {
  background-color: #1E90FF; /* Blue background */
  border: 5px; /* Remove borders */
  color: whitesmoke; /* White text */
  padding: 5px 10px; /* Some padding */
  font-size: 14px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btc:hover {
  background-color:		#F0FFFF;
}


</style>
</head>

<body>
<a href="/1/Principal.php"><button type="button" class="btn text-center" name="home"><i class="fa fa-home"></i>Painel</button></a><br><br><br><br>
<a href="/1/Projetos/CadastrarProjeto/FormProjeto.php" class="btc">Cadastrar</a><br><br>
<a href="/1/Projetos/EditarProjeto/FormEditar.php" class="btc">Editar</a><br><br>
<a href="/1/Projetos/DeletarProjeto/FormDeletar.php" class="btc">Deletar</a><br><br>
  <section id="projetos" class="padd-section text-center wow fadeInUp">
    <div class="container">
    <div class="hero-container">
        <h2>Projetos</h2><br>
      </div>
    </div>
    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><a href="engenharia.php"><img src="img/screen/engenharia.jpg" alt="img"></a></div>
        <div><a href="urbanismo.php"><img src="img/screen/urbanismo.jpg" alt="img"></a></div>
        <div><a href="transporte.php"><img src="img/screen/transporte.jpg" alt="img"></a></div>
        <div><a href="informatica.php"><img src="img/screen/informatica.jpg" alt="img"></a></div>
        <div><a href="telemarketing.php"><img src="img/screen/telemarketing.jpg" alt="img"></a></div>
        <div><a href="redes.php"><img src="img/screen/redes.jpg" alt="img"></a></div>
   
      </div>
      
    </div>

  </section>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/modal-video/js/modal-video.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>

  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

</body>
</html>
