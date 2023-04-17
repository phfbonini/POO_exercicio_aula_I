<?Php


class Lampada {
    private $potencia;
    private $estado;
    private $intensidade;

    public function __construct($potencia){
        $this->potencia = $potencia;
        $this->estado = false;
        $this->intensidade = 100;
    }

    public function ligar() {
        $this->estado = true;
    }

    public function desligar() {
        $this->estado = false;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getPotencia() {
        return $this->potencia;
    }

    public function setIntensidade($intensidade) {
        $this->intensidade = $intensidade;
    }

    public function getIntensidade() {
        return $this->intensidade;
    }

}

class DispositivoDimmer {

    public function aumentarIntensidade($lampada) {
        $intensidade = $lampada->getIntensidade() + 10;
        if ($intensidade > 100) {
            $intensidade = 100;
        }
        $lampada->setIntensidade($intensidade);
    }

    public function diminuirIntensidade($lampada) {
        $intensidade = $lampada->getIntensidade() - 10;
        if ($intensidade < 0) {
            $intensidade = 0;
        }
        $lampada->setIntensidade($intensidade);
    } 

    public function getIntensidade($lampada){
        return $lampada->getIntensidade();
    }
}

$lampada = new Lampada(60); //cria a classe lampada com 60w
$dimer = new DispositivoDimmer(); //cria a classe Dispositivo dimmer

$dimer->aumentarIntensidade($lampada); //aumenta a intensidade em 10%
$intensidade = $dimer->getIntensidade($lampada); //obtem a itensidade atual da lampada
echo "Intensidade da lâmpada: " . $intensidade . "<br>"; //Exibe a intensidade atual da lâmpada
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$intensidade = $dimer->getIntensidade($lampada); //obtem a itensidade atual da lampada

echo "Intensidade da lâmpada: " . $intensidade . "<br>"; //Exibe a intensidade atual da lâmpada

$dimer->aumentarIntensidade($lampada);

$intensidade = $dimer->getIntensidade($lampada); //obtem a itensidade atual da lampada

echo "Intensidade da lâmpada: " . $intensidade . "<br>"; //Exibe a intensidade atual da lâmpada

$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$intensidade = $dimer->getIntensidade($lampada); //obtem a itensidade atual da lampada
echo "Intensidade da lâmpada: " . $intensidade . "<br>"; //Exibe a intensidade atual da lâmpada

$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$intensidade = $dimer->getIntensidade($lampada); //obtem a itensidade atual da lampada
echo "Intensidade da lâmpada: " . $intensidade . "<br>"; //Exibe a intensidade atual da lâmpada

$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10%
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10% - aqui a lampada fica com 0 de itensidade
$dimer->diminuirIntensidade($lampada); //diminuir a itensidade em 10% - aqui por causa do if não diminui abaixo de 0
$intensidade = $dimer->getIntensidade($lampada); //obtem a itensidade atual da lampada
echo "Intensidade da lâmpada: " . $intensidade . "<br>"; //Exibe a intensidade atual da lâmpada
?>