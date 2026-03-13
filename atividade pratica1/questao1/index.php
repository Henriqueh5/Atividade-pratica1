<?php

echo "Digite o nome do aluno: ";
$nome = trim(fgets(STDIN));

$notas = [];

for ($i = 1; $i <= 3; $i++) {
    echo "Digite a nota $i: ";
    $nota = trim(fgets(STDIN));
    $notas[] = $nota;
}

$media = array_sum($notas) / 3;

echo "Aluno: $nome\n";
echo "Média: $media\n";

if ($media >= 7) {
    echo "Situação: Aprovado\n";
} elseif ($media >= 5) {
    echo "Situação: Recuperação\n";
} else {
    echo "Situação: Reprovado\n";
}

?>