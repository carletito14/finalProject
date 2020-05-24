<!DOCTYPE html>
<html lang="en">
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
$fecha = date("j-n-Y-G-i-s");
$fechaEmilio = date("j-n-Y-G-i-s");
$total = 0;
    

$factura .= "FACTURA:".PHP_EOL;
$factura .= "Fecha: ".$fecha.PHP_EOL;
$factura .= "---------------------------------------------------------------------------".PHP_EOL;
$factura .= "IdCliente:\t Nombre \t Email \t\t idLibro \t Nombre libro ".PHP_EOL;
$factura .= "---------------------------------------------------------------------------".PHP_EOL;
    
        $factura .= $idUsuario."\t\t ".$nombreUsuario."\t ".$correo."\t\t ".$codigoLibro." \t\t".$nombreLibro.PHP_EOL;
        $factura .= "--------------------------------------------------------------------".PHP_EOL;
    

$factura .="                                                TOTAL IMPORTE: 11,85 euros".PHP_EOL;
$factura .= "                                               ---------------------------".PHP_EOL;
$iva = $total*0.21;
$factura .="                                                          IVA: 0%".PHP_EOL;
$factura .= "                                               ---------------------------".PHP_EOL;
$total;
$factura .="                                                          TOTAL: 11,85 euros".PHP_EOL;

$fichero = fopen("../facturas/$fecha.txt","w");
fwrite($fichero, $factura);
fclose($fichero);

echo '<script type="text/javascript">
alert("Libro comprado con éxito con factura generada.");
window.location.href="..";
</script>';
?>
</body>
</html>