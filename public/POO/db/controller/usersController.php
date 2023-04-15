<?php
session_start();
include_once "../conexao/Conn.php";
include_once "../model/users.php";
include_once "../dao/usersDAO.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastra'])){

    $usuario->setUsuario($d['usuario']); // Obtém o nome de usuário informado no formulário
    $usuario->setPassword($d['password']); // Obtém a senha informada no formulário

    $usuariodao->create($usuario);
    print "<script>alert('Usuário cadastrado com sucesso!'); location.href = '../../';</script>";

} 
// se a requisição for editar
else if(isset($_POST['editar'])){

    $usuario->setUsuario($d['usuario']);
    $usuario->setId($d['id']);

    $usuariodao->update($usuario);
    header("Location: ../../pages/admin/admin.php");

}
// se a requisição for deletar
else if(isset($_POST['delete'])){

    $usuario->setId($_POST['id']);
    $usuario->setUsuario($_POST['usuario']);
    $usuariodao->delete($usuario);
    print "<script>alert('Usuário excluido com sucesso!'); location.href = '../../pages/admin/admin.php';</script>";

}
// se for logar
elseif(isset($_POST['login'])){

    $usuario->setUsuario($d['usuario']); // Obtém o nome de usuário informado no formulário
    $usuario->setPassword($d['password']); // Obtém a senha informada no formulário

    $usuariodao->login($usuario);

}else{
    header("Location: ../../");
}