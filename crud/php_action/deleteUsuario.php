<?php
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id  = mysqli_escape_string($connect,$_GET['id']);
   

    $sql = "DELETE from usuario WHERE idUsuario = '$id'";
    if (mysqli_query($connect, $sql)):
        header('Location: ../index.php?sucesso');
    else:
        header('Location: ../index.php>erro');
    endif;
    endif;
?>