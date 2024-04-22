<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pablo Echegaray</title>
    <link rel="stylesheet" href="../static/css/style7.css">
    <?PHP
    /*Ejercicio 1 : Semáforo*/
    require_once("../ejercicio1/semaforo.php");
    require_once("../ejercicio2/binomio.php");
    require_once("../ejercicio3/concatenar.php");
    require_once("../ejercicio4/incrementar.php");
    require_once("../ejercicio5/sumatoria.php");
    require_once("../ejercicio6/nombreCompleto.php");
    ?>
</head>
<body>
<h1>Pablo Echegaray</h1>
<?PHP
/*Ejercicio 1 : Semáforo*/
$ejercicio1 = "Ejercicio 1";
$enunciado1 = "Semáforo";
echo "<section>" . "<h2>" . $ejercicio1 . "</h2>" . "<h3>" . $enunciado1 . "</h3>" . "<article>" . "<p>Ejecuto el ejercicio con valores de parámetros: rojo, amarillo y verde. Y el resultado es: <br>Output: </p>" . semaforo_a("rojo") . "<br>" . semaforo_b("amarillo") . "<br>" . semaforo_c("verde") . "<br>" . "</article>" ."</section>";

/*Ejercicio 2 : Binomio cuadrado perfecto*/
$ejercicio2 = "Ejercicio 2";
$enunciado2 = "Binomio cuadrado perfecto";
echo "<section>" . "<h2>" . $ejercicio2 . "</h2>" . "<h3>" . $enunciado2 . "</h3>" . "<article>" . "<p>Ejecuto el ejercicio con valores de parámetros: 2 y 3. Y el resultado es: <br>Output: </p>" . binomioCuadradoPerfecto_a(2,3) . "<br>" . binomioCuadradoPerfecto_b(2,3) . "<br>" . "</article>" ."</section>";

/*Ejercicio 3 : Concatenar textos*/
$ejercicio3 = "Ejercicio 3";
$enunciado3 = "Concatenar textos";
echo "<section>" . "<h2>" . $ejercicio3 . "</h2>" . "<h3>" . $enunciado3 . "</h3>" . "<article>" . "<p>Ejecuto el ejercicio con valores de parámetros: Hola y Mundo. Y el resultado es: <br>Output: </p>" . concatenar("Hola", "Mundo") . "<br>" . "</article>" ."</section>";

/*Ejercicio 4 : Incrementar*/
$ejercicio4 = "Ejercicio 4";
$enunciado4 = "Incrementar";
$numero = 5;
incrementar($numero);
echo "<section>" . "<h2>" . $ejercicio4 . "</h2>" . "<h3>" . $enunciado4 . "</h3>" . "<article>" . "<p>Ejecuto el ejercicio con valores de parámetros: 5. Y el resultado es: <br>Output: </p>" . $numero . "<br>" . "</article>" ."</section>";

/*Ejercicio 5 :  Sumatoria*/
$ejercicio5 = "Ejercicio 5";
$enunciado5 = "Sumatoria";
$array = [1, 2, 3, 4, 5];
echo "<section>" . "<h2>" . $ejercicio5 . "</h2>" . "<h3>" . $enunciado5 . "</h3>" . "<article>" . "<p>Ejecuto el ejercicio con valores de parámetros: [1, 2, 3, 4, 5]. Y el resultado es: <br>Output: </p>" . sumatoria_a($array) . "<br>" . sumatoria_b($array) . "<br>" . sumatoria_c($array) . "<br>" . "</article>" ."</section>";

/*Ejercicio 6 : Nombre completo*/
$ejercicio6 = "Ejercicio 6";
$enunciado6 = "Nombre completo";
$persona = new Saludar("Ezequiel", "Perez");
echo "<section>" . "<h2>" . $ejercicio6 . "</h2>" . "<h3>" . $enunciado6 . "</h3>" . "<article>" . "<p>Ejecuto el ejercicio con valores de parámetros: nombre=Ezequiel, apellido=Perez, horario=9. Y el resultado es: <br>Output: </p>" . $persona->saludoFormal(9) . "<br>" . $persona->saludoInformal(9) . "<br>" . "</article>" ."</section>";

?>
</body>
</html>