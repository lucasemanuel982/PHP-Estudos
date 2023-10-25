<?php
// Este código serve para iniciar uma sessão
session_start();
require('header.php');

// realizando a implementação do session
if ($_SESSION) {
    echo $_SESSION['Aviso'];

    // Zerando o aviso para na próxima vez não aparecer novamente.
    $_SESSION['Aviso'] = ' ';
}
?>


<!-- Métodos GET e POST
GET - Os dados são anexados à URL como parâmetros de consulta (query parameters).
      Os parâmetros de consulta são visíveis na barra de endereço do navegador.

POST - Os dados são enviados no corpo (body) da solicitação HTTP.
       Os parâmetros não são visíveis na barra de endereço do navegador.
-->


<a href="apagar.php"> Apagar Cookie</a>;

<!-- O atributo action é usado em formulários HTML para especificar o URL do script ou arquivo que será chamado quando o formulário for enviado. Ele define para onde os dados do formulário serão enviados para processamento.  -->
<form method="GET" action="recebedor.php">
    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br/>
    <br/>
    <label>
        E-mail:
        <br/>
        <input type="text" name="email" />
    </label>
    <br/>
    <br/>
    <label>
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/>
    <br/>

    <input type="submit" value="Enviar" />
</form>