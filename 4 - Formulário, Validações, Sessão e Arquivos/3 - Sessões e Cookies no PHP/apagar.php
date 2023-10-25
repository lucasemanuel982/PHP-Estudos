<?php
// Setando o cookie para apagar em seguida
setcookie('nomeDoCookie', '', time()-3600);

header('Location: index.php');
exit;