<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
   <link href="img/fd.png" rel="shortcut icon" type="image/x-icon">
            <link href="estilo/estilo.css" rel="stylesheet" type="text/css"/>
         <link href="estilo/style.css" rel="stylesheet" type="text/css"/> 
         <link href="estilo/css.css" rel="stylesheet" type="text/css"/> 
         

    <title>Página Administrativa ::SGO</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-theme.min.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	
    </head>

  <body role="document">
  	<?php
  		include_once("menu_admin2.php");
  	?>

    
    <div class="container theme-showcase" role="main">

    	<?php
  		include_once("painel_admin.php");
  		?>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      
<div class="page-header">    

<main class="container-medio">
    <div class="cartoes-home">
      <section class="sombra">     
        <hr><CENTER><h2><strong>Área Administrativa</strong> </h2></CENTER> 
       
      </section>

       <div class="page-header">
        <h1>Informativo</h1>
      </div>

      <div class="alert alert-danger" role="alert">
        <strong>Atenção</strong> Sistema em fase de desenvolvimento.<br>



        
      </div>
      <?php
      include_once("rodape.php");
      ?>
     
    </div>
  </main>




<!--
      <div class="page-header">
        <h1>Carousel</h1>
      </div>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
          </div>
          <div class="item">
            <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
          </div>
          <div class="item">
            <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      -->

      
     <!-- 

      <?php
  		//include_once("lixo_admin.php");
  		?> 
     
  		</div>  	
        </div>  /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <div>
    <!--      
    <?php
      //include_once("roda-pe.php");
      ?>     
  -->
</html>
 </body>

