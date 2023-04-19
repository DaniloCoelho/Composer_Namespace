<?php
require_once('vendor/autoload.php');
//use Classes\Pessoa;
$pessoa = new \Classes\Pessoa();
$pessoa->escrever();

$cliente = new \Classes\Cliente();
$cliente->escrever();

$pessoab = new \ClassesB\Pessoa();
$pessoab->escrever();

$clienteb = new \ClassesB\Cliente();
$clienteb->escrever();