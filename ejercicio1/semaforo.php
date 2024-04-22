<?PHP
function semaforo_a($color){
    $stop = "Frene! (desde if else)";
    $caution = "Precaución! (desde if else)";
    $advance = "Avance! (desde if else)";

    if ($color == "rojo"){
        return $stop;
    }
    elseif ($color == "amarillo"){
        return $caution;
    }
    elseif ($color == "verde"){
        return $advance;
    }
    else{
        return "estado desconocido";
    }

}

function semaforo_b($color){
    $stop = "Frene! (desde if inline)";
    $caution = "Precaución! (desde if inline)";
    $advance = "Avance! (desde if inline)";

    return ($color == "rojo") ? $stop : (($color == "amarillo") ? $caution : (($color == "verde") ? $advance : "estado desconocido"));
}

function semaforo_c($color){
    $stop = "Frene! (desde switch)";
    $caution = "Precaución! (desde switch)";
    $advance = "Avance! (desde switch)";

    switch ($color) {
        case "rojo":
            return $stop;
            break;
        case "amarillo":
            return $caution;
            break;
        case "verde":
            return $advance;
            break;
        default:
            return "estado desconocido";
            break;
    }
}

?>