

<?php


// Criar um objeto DateTime representando a data e hora atual
$dataAtual = new DateTime();

// Obter a data atual formatada
$dataFormatada = $dataAtual->format('Y-m-d');

// Exibir a data formatada
echo "Data atual: " . $dataFormatada . "<br>";

// Definir uma data específica usando uma string
$dataEspecifica = new DateTime('2023-06-19');

// Obter o dia da semana da data específica
$diaDaSemana = $dataEspecifica->format('l');

// Exibir o dia da semana
echo "Dia da semana: " . $diaDaSemana . "<br>";

// Adicionar 1 mês à data específica
$dataEspecifica->modify('+1 month');

// Obter a nova data formatada
$novaDataFormatada = $dataEspecifica->format('Y-m-d');

// Exibir a nova data formatada
echo "Nova data: " . $novaDataFormatada . "<br>";
