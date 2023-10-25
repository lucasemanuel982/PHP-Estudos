<h1> Cabeçalho </h1>
<?php
// Realizando a leitura do Cookie

if (isset($_COOKIE['nomeDoCookie'])) {
    $nome = $_COOKIE['nomeDoCookie'];
    echo '<h2>' .$nome. '</h2>';
}
?>
<hr/>