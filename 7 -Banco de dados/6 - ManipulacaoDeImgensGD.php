<!-- A manipulação de imagens com GD (Graphics Draw) no PHP permite que você crie, edite e manipule imagens usando várias funções disponíveis. O GD é uma extensão padrão do PHP, portanto, na maioria dos casos, você não precisa instalar nada adicional para usá-lo.

Aqui estão alguns exemplos básicos de manipulação de imagens com GD no PHP: -->

<?php
// Saber se o GD está instalado ou não 
// $testGD = get_extension_funcs("gd");
// if (!$testGD) {
//     echo "GD não instalado.";
//     exit;
// }
// echo"<pre>".print_r($testGD,true)."</pre>";


// 1 - Carregar uma imagem existente:
// Caminho para a imagem original
// Caminho para a imagem original
$caminhoImagem = 'php.jpg';

// Carregar a imagem original
$imagemOriginal = imagecreatefromjpeg($caminhoImagem);

// Definir as novas dimensões da imagem
$novaLargura = 200;
$novaAltura = 150;

// Criar uma nova imagem com as dimensões desejadas
$imagemRedimensionada = imagecreatetruecolor($novaLargura, $novaAltura);

// Redimensionar a imagem preservando a proporção
imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, $novaLargura, $novaAltura, imagesx($imagemOriginal), imagesy($imagemOriginal));

// Definir o cabeçalho Content-Type como imagem PNG
header('Content-Type: image/jpg');

// Exibir a imagem redimensionada no navegador
imagejpeg($imagemRedimensionada);

// Liberar a memória ocupada pelas imagens
imagedestroy($imagemOriginal);
imagedestroy($imagemRedimensionada);
