<?php

$heroiNome = "Hulk";
$xp = 1000;

do {
if($xp <= 1000){
    $xpNome = "Ferro";
}else if($xp > 1000 && $xp<= 2000){
     $xpNome = "Bronze";
}else if($xp > 2000 && $xp <= 5000){
     $xpNome = "Prata";
}else if($xp > 5000 && $xp <= 7000){
     $xpNome = "Ouro";
}else if($xp > 7000 && $xp <= 8000){
     $xpNome = "Platina";
}else if($xp > 8000 && $xp <= 9000){
     $xpNome = "Ascendente";
}else if($xp > 9000 && $xp <= 10000){
     $xpNome = "Imortal";
}else{
     $xpNome = "Radiante";
}
echo "O Herói de nome " .$heroiNome . " está no nível " . $xp . " - " . $xpNome . "\n";

$xp += 500;

} while ($xp <= 10500);
?>