<?php

	include '../conexion.php';
	include '../funciones_generales.php';		
	$conexion = conectarse();
	date_default_timezone_set('America/Guayaquil');
    $fecha=date('Y-m-d H:i:s', time()); 
    $fecha_larga = date('His', time()); 
	$sql = "";		
	$id_user = sesion_activa();	
	$id = unique($fecha_larga);	
	$cont = 0;
	$cont2 = 0;

    // guardar formulario 101 
	$consulta = pg_query("select max(id_formualrio101) from formulario_101");
    while ($row = pg_fetch_row($consulta)) {
        $cont = $row[0];
    }
    $cont++;	
	
	$sql = "insert into formulario_101 values ('$cont','$_POST[311]','$_POST[316]','$_POST[322]','$_POST[323]','$_POST[326]','$_POST[327]','$_POST[328]','$_POST[329]','$_POST[335]','$_POST[345]'
													  ,'$_POST[353]','$_POST[354]','$_POST[356]','$_POST[357]','$_POST[359]','$_POST[360]','$_POST[379]','$_POST[382]','$_POST[389]','$_POST[445]'
													  ,'$_POST[498]','$_POST[499]','$_POST[513]','$_POST[515]','$_POST[517]','$_POST[521]','$_POST[526]','$_POST[527]','$_POST[528]','$_POST[530]'
													  ,'$_POST[534]','$_POST[539]','$_POST[545]','$_POST[551]','$_POST[569]','$_POST[601]','$_POST[621]','$_POST[641]','$_POST[651]','$_POST[652]'
													  ,'$_POST[653]','$_POST[661]','$_POST[698]','$_POST[699]')";			
	$guardar = guardarSql($conexion,$sql);
	// fin

	// guardar anexos 101
	$consulta2 = pg_query("select max(id_anexo101) from anexos_101");
    while ($row = pg_fetch_row($consulta2)) {
        $cont2 = $row[0];
    }
    $cont2++;

    $sql2 = "insert into anexos_101 values ('$cont2','$_POST[6011]','$_POST[6061]','$_POST[6071]','$_POST[6999]','$_POST[7051]','$_POST[7061]','$_POST[7071]','$_POST[7081]','$_POST[7091]','$_POST[7101]'
												    ,'$_POST[7111]','$_POST[7121]','$_POST[7131]','$_POST[7132]','$_POST[7141]','$_POST[7142]','$_POST[7143]','$_POST[7151]','$_POST[7152]','$_POST[7162]'
												    ,'$_POST[7163]','$_POST[7169]','$_POST[7192]','$_POST[7193]','$_POST[7201]','$_POST[7202]','$_POST[7203]','$_POST[7212]','$_POST[7221]','$_POST[7222]'
												    ,'$_POST[7223]','$_POST[7232]','$_POST[7233]','$_POST[7342]','$_POST[7343]','$_POST[7442]','$_POST[7462]','$_POST[7463]','$_POST[7472]','$_POST[7473]'
												    ,'$_POST[7482]','$_POST[7483]','$_POST[7511]','$_POST[7512]','$_POST[7513]','$_POST[7571]','$_POST[7572]','$_POST[7573]','$_POST[7581]','$_POST[7582]'
												    ,'$_POST[7583]','$_POST[7592]','$_POST[7593]','$_POST[7992]','$_POST[7999]','$_POST[7191]')";			
	$guardar = guardarSql($conexion,$sql2);
	// fin

	$data = 0; ////datos guardados

	echo $data;
?>