<?php

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];
/*
Array_reduce - Serve para 
Primeiro Parâmetro - O nome do array 
Segundo Parâmetro - A função 
Terceiro Parâmetro - Valor inicial do primeiro parâmetro, ou seja, de onde irá começar a contar.  
*/
// Função para pegar só as pessoas do sexo Masculino
function contar_m($subtotal, $item)
{
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
};

$total_m = array_reduce($pessoas, 'contar_m');
echo "Total de homens: " . $total_m;


// Soma das notas dos Homens
function contar_m_soma($subtotal, $item)
{
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
};
echo "<br/>";
$contar_m_soma = array_reduce($pessoas, 'contar_m_soma');
echo "Soma das Notas dos homens: " . $contar_m_soma;


// Média das notas dos homens
$media = $contar_m_soma / $total_m;
echo "<br/>";
echo "Média das Notas dos homens: " . $media;









$numeros = [1, 2, 3, 4, 5];
// função de somar os número do Array
function somar($subtotal, $item){
    $subtotal += $item;
    return $subtotal;
}
// O valor da soma daria 15, mas como eu coloquei para iniciar a contagem a partir do 3 ele irá adicionar 3 juntos com a soma do array que é 15, portanto ficarará 18
$total = array_reduce($numeros, 'somar', 3);
echo "<br/>".$total;
