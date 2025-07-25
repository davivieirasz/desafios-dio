<?php

class heroi
{

    public $nome;
    public $idade;
    public $tipo;

    public function atacar($tipo, $nome, $idade)
    {
        if ($tipo === "guerreiro") {
            $ataque = "espada";
        } else if ($tipo === "mago") {
            $ataque = "magia";
        } else if ($tipo === "monge") {
            $ataque = "artes marciais";
        } else if ($tipo === "ninja") {
            $ataque = "shuriken";
        } else {
            echo "Informe uma opção válida.";
        }
        echo "O " . $tipo . " chamado " . $nome . " tem " . $idade . " anos e atacou usando " . $ataque;
    }
}
$meuHeroi = new heroi();
$meuHeroi->atacar('mago', 'Patolino', 1000);