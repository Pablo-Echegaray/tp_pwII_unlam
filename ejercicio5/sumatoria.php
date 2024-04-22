<?PHP
function sumatoria_a($array) {
    $sum = 0;
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        $sum += $array[$i];
    }
    return $sum;
}
function sumatoria_b($array) {
    $sum = 0;
    foreach ($array as $valor) {
        $sum += $valor;
    }
    return $sum;
}
function sumatoria_c($array) {
    $sum = 0;
    $length = count($array);
    $i = 0;
    while ($i < $length) {
        $sum += $array[$i];
        $i++;
    }
    return $sum;
}

?>