<?php
    include_once 'includes/header.php';
    include_once 'php_action/db_connect.php';
    if(isset($_GET['id'])):
		$id = mysqli_escape_string($connect,$_GET['id']);
		$sql = "SELECT * FROM usuario WHERE idUsuario = '$id'";
		$result = mysqli_query($connect,$sql);
		$dados = mysqli_fetch_array($result);
	endif;
?>
    <div class = "row";>
        <div class = "col s12 m6 push-m3">
            <h3 class = "light"> Editar Usuario </h3>
            <form action= "php_action/updateUsuario.php" method="POST">
            <input type = "hidden" name= "id" value="<?php echo $dados['idUsuario']?>">
                <div class = "input-field col s12">
                    <input type = "text" name ="nome" id = 'nome' value="<?php echo $dados['nome']?>">
                    <label for = 'nome'>Nome</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='data_nascimento' id = 'data_nascimento'value="<?php echo $dados['data_nascimento']?>" > 
                    <label for = 'data_nascimento'>Data de Nascimento</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='CPF' id = 'CPF' value="<?php echo $dados['CPF']?>">
                    <label for = 'CPF'>CPF</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='Email' id = 'Email' value="<?php echo $dados['Email']?>">
                    <label for = 'Email'>Email</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='Telefone' id = 'Telefone' value="<?php echo $dados['Telefone']?>">
                    <label for = 'Telefone'>Telefone</label>
                </div>
                <button type = 'submit' name = 'btn-atualizar' class='btn'> Atualizar</button>
                <a href = 'index.php' class = 'btn green'> Voltar para Lista </a>
            </form>
        </div>
    </div>

    <?php
        include_once 'includes/footer.php';
    ?>