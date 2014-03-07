<?php
	
	$conexion = mysql_connect("localhost","root","ninguna") or die ("No se puede conectar a la base de datos");
	mysql_select_db("crm") or die ("No hay bd seleccionada");
	if($conexion){
		//echo 'Conexion exitosa<br>';
	}else{
		//echo 'Error<br>';
	}
	
	mysql_set_charset("utf8");
	
	$sql= mysql_query("select emp_id, emp_nombre from empresas where cen_id in (0101)") or die(mysql_error());
	
	
	$arr = array();
	while ($row = mysql_fetch_array($sql)) {
    $arr[] = array('emp_nombre'=> $row['emp_nombre'], 'id'=>$row['emp_id']);
	
	}
	
	//$arr = array("Honde", "BMW" , "Ferrari");
	
	print(json_encode($arr));
	
	
?>