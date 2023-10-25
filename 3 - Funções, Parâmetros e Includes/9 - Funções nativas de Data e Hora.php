<?php

// Mostra em milisegundos desde a data de 1970
echo time();

// data - Mostra da data atual
// É necessário passar o parâmetro de no mínimo o formatdo de como deseja que apareça a data.
// Pode ser acrescentado também o horário, como realizei abaixo. 
// Não só serve para data e horário,tem outrar funções como dia da semana, dia do ano,...
echo "<br/>". date('d/m/Y H:i:s');