<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$dados = array(
    "nome" => "João da Silva",
    "idade" => 25,
    "cidade" => "São Paulo"
);


echo json_encode($dados);




?>