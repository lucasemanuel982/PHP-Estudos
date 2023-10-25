<!-- A encriptação de senhas em PHP pode ser feita usando vários algoritmos, mas é altamente recomendado usar funções de hash seguras, como o bcrypt ou Argon2, em vez de algoritmos mais antigos e menos seguros, como MD5 ou SHA1. -->

<?php


// Senha a ser encriptada
$senha = 'minha_senha';


// Ao gerar o Hash a senha será armazenada encriptada e não conseguirá ver a senha.

// Gerar o hash da senha usando o bcrypt, ou seja, colocando o Default terá o bcrypt.
$hash = password_hash($senha, PASSWORD_DEFAULT);

// Armazenar o hash no banco de dados ou onde for necessário

// Verificar se uma senha fornecida corresponde ao hash armazenado
$senha_fornecida = $senha;
if (password_verify($senha_fornecida, $hash)) {
    echo "Senha Correta!";
} else {
    echo "Senha Incorreta!";
}


// A partir do PHP 5.5.0, o algoritmo de hash padrão é o bcrypt. No entanto, é importante mencionar que o algoritmo padrão pode variar em diferentes versões do PHP ou em diferentes plataformas. Portanto, ao usar PASSWORD_DEFAULT, você se beneficia das configurações padrão seguras da versão do PHP em execução.

// É possível também especificar manualmente um algoritmo específico ao invés de utilizar PASSWORD_DEFAULT. O PHP oferece alguns algoritmos de hash disponíveis para uso com a função password_hash(). Alguns exemplos são:

// PASSWORD_BCRYPT: Utiliza o algoritmo bcrypt para encriptação. É amplamente recomendado devido à sua segurança e resistência a ataques de força bruta.
// PASSWORD_ARGON2I: Utiliza o algoritmo Argon2i para encriptação. É um algoritmo de hash moderno e altamente seguro.
// PASSWORD_ARGON2ID: Utiliza o algoritmo Argon2id para encriptação. É uma variação do Argon2 que combina características do Argon2i e Argon2d, oferecendo maior resistência a ataques de tempo e memória.