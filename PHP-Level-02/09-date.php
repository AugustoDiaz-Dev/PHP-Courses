<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para fecha y hora</title>
</head>
<body>
    <h1>Funcion date()</h1>

<?php
$prueba = date("Y/m/d");
Echo "Hoy es: ".date("d/m/Y");
echo "<br/>";
if ($prueba < "2020/11/01")
{
echo "Sitio web en mantenimiento hasta el 01/11/2020";
}
else
{
echo "Bienvenido a nuestro sitio!";
}
?>

<h2>Funcion time()</h2>
    
<?php
$hora = time();
echo ($hora);
// mostraría en el horario en que se ejecute mostraría algo como: "1306124335"
?>

<h2>get date()</h2>

<?php
$hora = getdate(time());
echo( $hora['hours'] . ":" . $hora['minutes'] . ":" . $hora['seconds'] );
?>

<?php
$fecha = getdate();
echo ("Día: " . $fecha["mday"]."<br/>");
echo ("Mes: " . $fecha["mon"]."<br/>");
echo ("Año: " . $fecha["year"]."<br/>");
echo ("Hora: " . $fecha["hours"]."<br/>");
echo ("Minutos: " . $fecha["minutes"]."<br/>");
echo ("Segundos: " . $fecha["seconds"]."<br/>");
?>

<h2>funcion date_default_timezone_set()</h2>

<?php
date_default_timezone_set(“America/Argentina/Buenos_Aires”);
echo "<p>".date('h:m:i')."</p>";
?>

<h2>funcion strftime()</h2>

<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
setlocale(LC_TIME, 'spanish');
echo "<h1>".strftime("Ejemplo 1: %A, %d de %B de %Y")."</h1>";
?>

<h2>Calcular fechas con PHP</h2>

<?php
echo $date=date("d-m-Y H:i:s", strtotime ("-12hours")); echo "<br/>";
echo $date2=date("d-m-Y H:i:s", strtotime ("-2days")); echo "<br/>";
echo $date3=date("d-m-Y H:i:s", strtotime ("-1years"));
echo "<br/>";
echo $date4=date("d-m-Y H:i:s", strtotime ("next Thursday")); echo "<br/>";
echo $date5=date("d-m-Y H:i:s", strtotime ("last Monday"));
?>

<h2>funcion strtotime() </h2>

<?php
echo strtotime ("now"), "\n";
echo strtotime ("10 September 2000"), "\n"; echo strtotime ("+1 day"), "\n";
echo strtotime ("+1 week"), "\n";
echo strtotime ("+1 week 2 days 4 hours 2 seconds"), "\n"; echo strtotime ("next
Thursday"), "\n";
echo strtotime ("last Monday"), "\n";
?>

<h2>Diferencia entre dos fechas</h2>

<?php
function dias_restantes($fecha_final) {
$fecha_actual = date("Y-m-d");
$s = strtotime($fecha_final)-strtotime($fecha_actual);
$d = intval($s/86400);
echo "Días restantes hasta la fecha $fecha_final: $d";
}
//para usarlo: dias_restantes("2020-11-01");
?>

<h2>funcion localtime()</h2>
<?php
$fecha_actual = localtime(time(),1);
$anio_actual = $fecha_actual['tm_year'] + 1900;
$mes_actual = $fecha_actual['tm_mon'] + 1;
$dia_actual = $fecha_actual['tm_mday'];
echo "<p>Hoy es el $dia_actual/$mes_actual/$anio_actual.</p>";
?>

<?php
$fecha_actual = localtime(time(),1);
$anio_actual = $fecha_actual['tm_year'] + 1900;
$mes_actual = $fecha_actual['tm_mon'] + 1;
$dia_actual = $fecha_actual['tm_mday'];
echo "<p>Hoy es el $dia_actual/$mes_actual/$anio_actual.</p>";
?>

<h2>Fecha en español</h2>

<?php
function fecha_actual()
{
$week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
$months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$year_now = date ("Y");
$month_now = date ("n");
$day_now = date ("j");
$week_day_now = date ("w");
$date = $week_days[$week_day_now] . ", " . $day_now . " de " .
$months[$month_now] . " de " . $year_now;
echo $date;
}
fecha_actual();
?>

<h2>Funcion checkdate()</h2>

<?php
$dia = 29;
$mes = 10;
$anio = 2020;
if (checkdate($mes, $dia, $anio)) {
    echo "<p>El día $dia/$mes/$anio existe.</p>";
    } else {
    echo "<p>El día $dia/$mes/$anio no existe.</p>";
    }
    $dia = 29;
    $mes = 10;
    $anio = 2019;
    if (checkdate($mes, $dia, $anio)) {
    echo "<p>El día $dia/$mes/$anio existe.</p>";
    } else {
    echo "<p>El día $dia/$mes/$anio no existe.</p>";
    }
    ?>

</body>
</html>