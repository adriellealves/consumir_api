<?php

header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: POST');

if($_SERVER['REQUEST_METHOD']!='POST'){
    echo "Tipo de requisição invalida";
}else{
    $conn= new mysqli('localhost','root','','apitrab');

    $dados=json_decode(file_get_contents('php://input'),true);

    $sql=$conn->prepare("insert into infos (origin,destiny,message) values (?,?,?)");

    $sql->bind_param('sss',$dados['origin'],$dados['destiny'],$dados['message']);
    $sql->execute();
}