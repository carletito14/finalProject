<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FACTURA</title>
</head>
<body>
    

<?php
//session_start();
include_once "../modelo/Persona.php";
include_once "../modelo/Libros.php";


$factura = "";
$fechaMostrar=date("j-n-Y-G-i-s");

$fecha = date("d-m-Y");
$fechaDevolucion = date("d-m-Y",strtotime($fecha."+ 15 days"));
$total = 0;
    

$factura .= "FACTURA:".PHP_EOL;
$factura .= "Fecha: ".$fecha.PHP_EOL;
$factura .= "Fecha de devolución: ".$fechaDevolucion.PHP_EOL;
$factura .= "---------------------------------------------------------------------------".PHP_EOL;
$factura .= "IdCliente:\t Nombre \t Email \t\t idLibro \t Nombre libro ".PHP_EOL;
$factura .= "---------------------------------------------------------------------------".PHP_EOL;
    
        $factura .= $idUsuario."\t\t ".$nombreUsuario."\t ".$correo."\t\t ".$codigoLibro." \t\t".$nombreLibro.PHP_EOL;
        $factura .= "--------------------------------------------------------------------".PHP_EOL;
    

$factura .="                                                TOTAL IMPORTE: 1,35 euros/alquiler".PHP_EOL;
$factura .= "                                               ---------------------------".PHP_EOL;
$iva = $total*0.21;
$factura .="                                                          IVA: 0%".PHP_EOL;
$factura .= "                                               ---------------------------".PHP_EOL;
$total;
$factura .="                                                          TOTAL: 1,35 euros".PHP_EOL;

$fichero = fopen("../facturas/$fechaMostrar.txt","w");
fwrite($fichero, $factura);
fclose($fichero);

echo '<script type="text/javascript">
alert("Libro alquilado con éxito con factura generada. Acuda a la biblioteca para poder recogerlo lo antes posible antes del período de 15 días de devolución. El dinero se abonará allí por ser alquiler.");
window.location.href="..";
</script>';
?>
</body>
</html>