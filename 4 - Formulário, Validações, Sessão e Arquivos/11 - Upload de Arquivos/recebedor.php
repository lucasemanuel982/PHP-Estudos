<?php
echo '<pre>';

// Mostra as informações do arquivo. 
// print_r($_FILES);

// Aqui está sendo requisitado através do nome. Porém, pode ter arquivos já salvo com o mesmo nome do novo arquivo e dará conflito.
// $nome = $_FILES['arquivo']['name'];

// Movendo o upload para o local desejado
// move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

// Para não dá conflito de nomes é aconselhável a gerar um nome aleatório.
// $nome = md5(time().rand(0,1000)).'.jpg';

// Fazendo a validação dos arquivos se tem a determinada extensão. Que nesse caso é só com jpeg,jpg e png 
if (in_array($_FILES['arquivo']['type'], array('image/jpeg','image/jpg', 'image/png'))) {
    $nome = md5(time().rand(0,1000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
    
    echo 'Arquivo Adicionado com Sucesso!';
}else{
    echo 'Arquivo não permitido!';
};


/*Também pode ser feito da seguinte forma

$permitidos = ['image/jpeg','image/jpg', 'image/png']

if (in_array($_FILES['arquivo']['type'], $permitidos)) {
    $nome = md5(time().rand(0,1000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);
    
    echo 'Arquivo Adicionado com Sucesso!';
}else{
    echo 'Arquivo não permitido!';
};



*/