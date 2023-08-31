<?php

//instanciar as classes
$usuario = new Usuario();
$usuarioodao = new UsuarioDAO();

//passar os posts - dados

$d = filter_input_array(INPUT_POST);

//Se for gravado com sucesso
if(isset($_POST['cadastrar'])){

    $usuario->setNome($d['nome']);
    $usuario->setNome($d['sobrenome']);
    $usuario->setNome($d['idade']);
    $usuario->setNome($d['sexo']);

    $usuarioodao->create($usuario);
}
//se for deletar
else if(isset($_GET['del'])){

    $usuario->setId($_GET['del']);
    $usuarioodao->delete($usuario);
}

    


    