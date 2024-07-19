<?php

  // echo $_SERVER['SERVER_NAME']; // * nome host do servidor onde o script atual é executado
  // echo $_SERVER['DOCUMENT_ROOT']; // * diretório raiz sob onde o script atual é executado

  echo '<pre>'; // * formata pra que a saída do print_r não fique desorganizada
  print_r($_SERVER); // * exibe informações sobre uma variável de uma forma legível
  echo '<pre>'; // * fecha a tag de formatação

?>