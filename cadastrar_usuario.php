<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Usuário');

use \App\Entity\Usuario;
$obUsuario = new Usuario;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['sobrenome'],$_POST['email'],$_POST['senha'])){

  $obUsuario->nome      = $_POST['nome'];
  $obUsuario->sobrenome = $_POST['sobrenome'];
  $obUsuario->email     = $_POST['email'];
  $obUsuario->senha     = md5($_POST['senha']);
  $obUsuario->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/novo_usuario.php';
include __DIR__.'/includes/footer.php';