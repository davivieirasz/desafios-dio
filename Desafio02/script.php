<?php
//Calculadora de partidas Rankeadas
function rankHeroi($vitoria, $derrota)
{
        $resultado = $vitoria - $derrota;
        $nivel = "";

        if ($resultado < 10) {
            $nivel = "Ferro";
        } else if ($resultado <= 20) {
            $nivel = "Bronze";
        } else if ($resultado <= 50) {
            $nivel = "Prata";
        } else if ($resultado <= 80) {
            $nivel = "Ouro";
        } else if ($resultado <= 90) {
            $nivel = "Diamante";
        } else if ($resultado <= 100) {
            $nivel = "Lendário";
        } else {
            $nivel = "Imortal";
        }
        return "O herói tem saldo de " . $resultado . " e está no nível " . $nivel;
    }
echo rankHeroi(120,20);
?>