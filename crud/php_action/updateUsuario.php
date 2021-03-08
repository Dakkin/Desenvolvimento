<?php
require_once 'db_connect.php';

if(isset($_POST['btn-atualizar'])):
    $id  = mysqli_escape_string($connect,$_GET['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $data_nascimento = mysqli_escape_string($connect, $_POST['data_nascimento']);
    $CPF = mysqli_escape_string($connect, $_POST['CPF']);
    $Email = mysqli_escape_string($connect, $_POST['Email']);
    $Telefone = mysqli_escape_string($connect, $_POST['Telefone']);

    $sql = "UPDATE usuario SET nome = '$nome' , data_nascimento= '$data_nascimento', CPF = '$CPF', Email = '$Email',Telefone = '$Telefone' WHERE idUsuario ='$id'"
    if (mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php>erro');
    endif;
endif;
?>