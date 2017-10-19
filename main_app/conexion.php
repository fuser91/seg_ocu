<?php  
    $mysqli = new mysqli('localhost','root','','seg_clinica')
    if ($mysqli->maxdb_connect_errno):
        echo "Error al conectarse con Base de Datos debido al error".$mysqli->connect_error;
    endif;        
    
?>