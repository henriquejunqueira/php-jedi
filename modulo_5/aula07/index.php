<?php

  $frase = 'Meu nome é ';
  $nome = 'Henrique';
  $idade = 30;
  $nomeDaClasse = 'box';

  define('NOME', 'João');

  // echo 'Meu nome é '.$nome.' e isso é um teste';
  // echo 'Meu nome é '.NOME.' e isso é um teste';

  // echo $frase.$nome.$idade;

  // echo 'Olá, meu nome é '.$nome;
  // echo "Meu nome é $nome";

  echo "<div class=\"$nomeDaClasse\">Meu conteúdo da div</div>";
?>