<?php

$alunos = [];

for ($i = 1; $i <= 3; $i++) {

    echo "Digite o nome do aluno $i: ";
    $nome = trim(fgets(STDIN));

    $notas = [];

    for ($j = 1; $j <= 3; $j++) {
        echo "Digite a nota $j: ";
        $notas[] = trim(fgets(STDIN));
    }

    $media = array_sum($notas) / 3;

    $alunos[$nome] = $media;
}

$maiorMedia = max($alunos);
$menorMedia = min($alunos);

$alunoMaior = array_search($maiorMedia, $alunos);
$alunoMenor = array_search($menorMedia, $alunos);

echo "\nAluno com MAIOR média: $alunoMaior ($maiorMedia)\n";
echo "Aluno com MENOR média: $alunoMenor ($menorMedia)\n";

?>