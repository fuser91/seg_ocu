<?php  
	require 'conexion.php';

	$usuarios = $mysaqli->query("select nombre_usu,tipo_usu 
		from usuarios 
		where  usuario_usu ='".$_POST['usuariolg']."'
        and    clave_usu = '".$_POST['passlg']."'");
	);

if ($usuarios->num_rows==1):
	$datos = $usuarios-> fetch_assoc();
	echo json_decode(array('error'=> false, 'tipo' =>$datos['tipo_usu']));
else:
	json_decode(array('error'=> true));

endif

$mysaqli-> close();

?>