<?php



function datas($test) {
    $diaSemana = date('w', $test);
    
    if ($diaSemana == 0) {
        echo "Domingo";
    } elseif ($diaSemana == 1) {
        echo "Segunda-feira";
    } elseif ($diaSemana == 2) {
        echo "Terça-feira";
    } elseif ($diaSemana == 3) {
        echo "Quarta-feira";
    } elseif ($diaSemana == 4) {
        echo "Quinta-feira";
    } elseif ($diaSemana == 5) {
        echo "Sexta-feira";
    } elseif ($diaSemana == 6) {
        echo "Sábado";
    }
}

datas(time());



// Outra fórmula
$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);
$data = date('d/m/Y');
$data .= " - ";
$data .= $semana[date('D')];
echo $data;


// $data1 = date('Y - d - m');
$data1 = date('2023-05-10');
function DiaSemana($data1){
    $nomesemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
    $dias = date('w', strtotime($data1));
    $databr = date('d/m/Y', strtotime($data1));
    return "$databr - $nomesemana[$dias]";
}
 
echo DiaSemana($data1);