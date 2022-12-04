<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link type="text/css" rel="shortcut icon" href="img/Logo Horizontal.png"/>
	<title>Contador de visitas tienda orgánica natural</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cargando.css">
</head>
  <style>
  	span{
  		width: 100%;
  		padding: 15px 25px;
  		border-radius: 5px;
  		font-weight: 900;
  		font-size: 60px;
  		text-align: center;
  		color: #fff;
  		background-color: #064E3B;
  	}
      h3{
          font-size: 35px;
          font-weight: 900;
          color: #064E3B;
          margin-top: 150px;
      }
  </style>
<body>


<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #C6DABF !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/logo Horizontal.png" alt="Tienda Orgánica Natural" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <h5 class="navbar-brand">Bienvenidos a nuestra tienda orgánica</h5>
    </div>
</nav>


<div class="container mt-7">
<br><br>
<br><br>


<h3 class="text-center">
	Hoy tenemos este número de visitas
</h3>
<hr>


<?php
if (file_exists('sumandoVista.html'))   
$variableArchivo = fopen('sumandoVista.html','r+');  

//$var1 = fopen('sumandoVista.txt','r+'); 
//$var2 = fopen('sumandoVista.html','r+'); 

else $variableArchivo = fopen('sumandoVista.html','w+');  
$leerArchivo = fgets($variableArchivo,20);  
if ($leerArchivo == '')   
$leerArchivo = "0";   
rewind($variableArchivo);  
fputs($variableArchivo,++$leerArchivo);  
fclose($variableArchivo);   

?>


 <div class="row text-center">
    <div class="col-12 col-md-12">
    	<span>
			<?php echo $leerArchivo; ?>
		</span>
    </div>
  </div>


</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

	
</body>
</html>