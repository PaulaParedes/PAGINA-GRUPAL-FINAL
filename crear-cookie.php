<?php

setcookie('pais-seleccionado',$_GET['pais'],time()+86400,'/');
header('location:sitio-web.php');

?>