<?php

/*
*Escopo  = Especificação do limit, dentro do qual os recursos de sistema podem
*ser utilizados. - fonte: wikipedia
*
* locais - criadas dentro das funções
* globais - criadas fora das funcões
*
*/

$nome = "Adriano Carvalho";

function exibeNome($nome){
  // global $nome;
  // echo $nome;
  global $mensagem;

  if ($nome == 'Adriano Carvalho') {
    $mensagem = "Meu nome e Adriano Carvalho";
  } else {
    $mensagem = "Meu nome não e Adriano Carvalho";
  }

}

exibeNome("Adriano
echo $mensagem;
