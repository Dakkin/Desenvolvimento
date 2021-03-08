<?php
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $data_nascimento = mysqli_escape_string($connect, $_POST['data_nascimento']);
    $CPF = mysqli_escape_string($connect, $_POST['CPF']);
    $Email = mysqli_escape_string($connect, $_POST['Email']);
    $Telefone = mysqli_escape_string($connect, $_POST['Telefone']);

    $sql = "INSERT INTO usuario(nome, data_nascimento, CPF, Email, Telefone) VALUES ('$nome','$data_nascimento','$CPF', '$Email', '$Telefone')";
    if (mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php>erro');
    endif;
    endif;
?>