<?php

include '../conexion.php';
$conexion = conectarse();
$page = $_GET['page'];
$limit = $_GET['rows'];
$sidx = $_GET['sidx'];
$sord = $_GET['sord'];
$search = $_GET['_search'];

if (!$sidx)
    $sidx = 1;
$result = pg_query("SELECT COUNT(*) AS count FROM pagos_venta");
$row = pg_fetch_row($result);
$count = $row[0];
if ($count > 0 && $limit > 0) {
    $total_pages = ceil($count / $limit);
} else {
    $total_pages = 0;
}
if ($page > $total_pages)
    $page = $total_pages;
$start = $limit * $page - $limit;
if ($start < 0)
    $start = 0;
if ($search == 'false') {
    $SQL = "SELECT P.id_pagos_venta, F.numero_serie, F.fecha_actual, P.monto_credito, P.saldo FROM pagos_venta P, factura_venta F, cliente C where P.id_factura_venta = F.id_factura_venta and P.estado = 'Activo' and C.id_cliente = P.id_cliente and C.id_cliente ='".$_GET['id_cliente']."' ORDER BY  $sidx $sord offset $start limit $limit";
} else {
    $campo = $_GET['searchField'];
  
    if ($_GET['searchOper'] == 'eq') {
        $SQL = "SELECT P.id_pagos_venta, F.numero_serie, F.fecha_actual, P.monto_credito, P.saldo FROM pagos_venta P, factura_venta F, cliente C where P.id_factura_venta = F.id_factura_venta and P.estado = 'Activo' and C.id_cliente = P.id_cliente and C.id_cliente ='".$_GET['id_cliente']."'  and $campo = '$_GET[searchString]' ORDER BY $sidx $sord offset $start limit $limit";
    }         
    if ($_GET['searchOper'] == 'cn') {
        $SQL = "SELECT P.id_pagos_venta, F.numero_serie, F.fecha_actual, P.monto_credito, P.saldo FROM pagos_venta P, factura_venta F, cliente C where P.id_factura_venta = F.id_factura_venta and P.estado = 'Activo' and C.id_cliente = P.id_cliente and C.id_cliente ='".$_GET['id_cliente']."'  and $campo like '%$_GET[searchString]%' ORDER BY $sidx $sord offset $start limit $limit";
    }
  
}
$result = pg_query($SQL);
header("Content-type: text/xml;charset=utf-8");
$s = "<?xml version='1.0' encoding='utf-8'?>";
$s .= "<rows>";
$s .= "<page>" . $page . "</page>";
$s .= "<total>" . $total_pages . "</total>";
$s .= "<records>" . $count . "</records>";
while ($row = pg_fetch_row($result)) {
    $s .= "<row id='" . $row[0] . "'>";
    $s .= "<cell>" . $row[0] . "</cell>";
    $s .= "<cell>" . $row[1] . "</cell>";
    $s .= "<cell>" . $row[2] . "</cell>";
    $s .= "<cell>" . $row[3] . "</cell>";
    $s .= "<cell></cell>";
    $s .= "<cell>" . $row[4] . "</cell>";
    $s .= "</row>";
}
$s .= "</rows>";
echo $s;
?>

