<?php
$listNumber1 = [1,2,5,9];
$listNumber2 = [8,0,3,4];
$lista2 = ['nome1','nome2','nome3', 'nome4'];

// count - contagem de elementos do array
echo "Total de Ítens: " .count($lista2);

// array_dif - compara 2 arrays e gera um novo que não possui em determinada lista
$listaAlunos1 = ['Joaquim','Fátima','Aline', 'Lucas', 'Carol'];
$listaAlunos2 = ['Túlio','Fátima','Aline', 'Pâmela', 'Carlos'];

$novaLista = array_diff($listaAlunos1, $listaAlunos2);

print_r($novaLista);
echo "<br/>";


// array_filter - realiza a filtragem de acordo com o parâmetro informado e retorna um novo array.
$filtrado = array_filter($listNumber2, function ($item){
    if ($item > 3) {
        return true;
    }else{
        return false;
    }
});

print_r($filtrado);
echo "<br/>";



// array_map - Percorre o array e aplica a função que foi criada.
$dobrados = array_map(function($item){
    return $item * 2; //neste exemplo aqui está pegando cada Ítem do array e multiplicando por 2. 
}, $listNumber1);
    
print_r($dobrados); 


// array_pop - Remove o último item do array
array_pop($listaAlunos1);


// array_unshift -  - Remove o primeiro ítem do array
array_unshift($listNumber1);


//  in_array - Buscar algo e retornar se tem ou não
in_array(4, $listNumber2);


// array_search - Da a localização que se encontra
$teste = array_search(8, $listNumber2);
echo $teste;

// sort - Ordenação de Array em ordem crescente
sort($listaAlunos1);


// rsort - Ordenação de Array em ordem decrescente
rsort($listNumber2);


// asort - Odernação em ordem crescente, mas com as chaves originais(Deixando o conteúdo com o seu lugar original).
asort($listNumber1);


// implode - Transforma um array em string  
$teste = implode(';  ', $listaAlunos1);
echo "<br/>". $teste;




