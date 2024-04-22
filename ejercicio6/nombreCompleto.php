<?PHP
class Saludar {
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario) {
        $saludo = '';
        if ($horario >= 5 && $horario < 13) {
            $saludo = "Buenos días";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "Buenas tardes";
        } else {
            $saludo = "Buenas noches";
        }
        return "$saludo {$this->nombre} {$this->apellido}";
    }

    public function saludoInformal($horario) {
        $saludo = '';
        if ($horario >= 5 && $horario < 13) {
            $saludo = "buen día";
        } elseif ($horario >= 13 && $horario < 21) {
            $saludo = "buena tarde";
        } else {
            $saludo = "buena noche";
        }
        return "¡Hola {$this->nombre}! Que tengas un $saludo";
    }
}

?>