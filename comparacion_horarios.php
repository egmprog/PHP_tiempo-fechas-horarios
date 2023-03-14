<?php
//para ver la hora actual en un determinado lugar del planeta:
//para todos los husos horarios ver https://www.php.net/manual/en/timezones.php
ini_set('date.timezone','America/Argentina/Buenos_Aires');echo "la hora actual en BsAs es ", date("H:i A"); 
echo "<br/>";
echo"---------------------";echo "<br/>";
//establecidos dos horarios:
$horario1 = "17:05";
$horario2 = "17:15";
//se transforman los horarios en números, de modo que puedan comparase
$hora1 = strtotime( $horario1 );
$hora2 = strtotime( $horario2 );
echo "tomamos dos horarios como ejemplo:";echo "<br/>";
echo $horario1;echo "<br/>";
echo $horario2;echo "<br/>";
echo "Se comparan ambos horarios: ";
//a continuación se comparan los dos horarios para indicar cuál es mayor:
if( $hora1 > $hora2 ) {
    echo "$horario1 es mayor a $horario2";
} else {
    echo "$horario2 es mayor a $horario1";
};
//se calcula la diferencia de tiempo entre ambos horarios (en segundos):
$diferencia = $hora2-$hora1;
echo "<br/>";
echo "la diferencia entre los horarios es de: $diferencia segundos";
echo "<br/>";
echo"---------------------";echo "<br/>";
//para visualizar adecuadamente el tiempo se convierten el total de segundos en minutos
$min=$diferencia/60;
$minE=floor($min);   //floor : recorta la parte entera (en este caso de los minutos)
echo "Esto es: <br/>";
//antes de mostrar el resultado se verifica si la cantidad de minutos es mayor que 60, en ese caso, se calculan las horas
if ($min>60){
	$hs =$diferencia/3600;
	$hsE=floor($hs);
	$minHs=$hs-$hsE;
	$minM=$minHs*60;
	echo "$hsE horas, <br/>";     //e muestran horas y minutos
	echo "$minM minutos, <br/>";
	
	} else {
	echo "$minE minutos, <br/>";	//semuestran solamente minutos	
		};
?>
