<?php
class Torcedor
{

    public $nome;
    public $time;
    public $idade;

    public function __construct($nome, $time, $ideade)
    {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $ideade;

    }

    public function exibir()
    {
        echo "Informações do Torcedor: {$this->nome} {$this->time} {$this->idade}";
    }

}

$torcedor1 = new Torcedor("Gabriela", "Vasco da Gama", "28");

$torcedor1->exibir();


?>