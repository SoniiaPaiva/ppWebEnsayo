<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php 
echo "<h1>CONCIONALES EN PHP</h1>
<br> <h2>Conficional if </h2>";

$edad= 17;
if ($edad < 18) {
	echo "Es menor se edad";
}
echo "<h2>Condicional if.. else..</h2>";
$hora=12.5;
if  ($hora < 12){
	echo "Buen dia";
} else {
	echo "Buenas Tardes";
}
echo "<h2>Condicional if.. else if.. else..</h2>";

if  ($hora < 12){
	echo "La hora es menor a 12";
} else if ($hora >= 12 && $hora <= 13) {
	echo "Medio Dia";
} else { 
	echo "La hora es mayor a 13";
}
 echo "<h2>Condicional switch</h2>";

 $accion= "Guardar";
 switch ($accion) {
 	case 'Guardar':
 		echo "El usuario eligio Guardar";
 		break;

 		case 'modificar':
 		echo "El usuario eligio Modificar";
 		break;

 		case 'eliminar':
 		echo "El usuario eligio Eliminar";
 		break;
 	
 	default:
 		echo "El usuario NO realizo ninguna accion";
 		break;
 }
?>
</body>
</html>

