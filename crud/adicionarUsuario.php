<?php
    include_once 'includes/header.php';
?>
    <div class = "row";>
        <div class = "col s12 m6 push-m3">
            <h3 class = "light"> Novo </h3>
            <form action = "php_action/createUsuario.php" method = "POST">
                <div class = "input-field col s12">
                    <input type = "text" name ="nome" id = 'nome'>
                    <label for = 'nome'>Nome</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='data_nascimento' id = 'data_nascimento'>
                    <label for = 'data_nasc'>Data de Nascimento</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='CPF' id = 'CPF'>
                    <label for = 'CPF'>CPF</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='Email' id = 'Email'>
                    <label for = 'Email'>Email</label>
                </div>
                <div class = 'input-field col s12'>
                    <input type = 'text' name ='Telefone' id = 'Telefone'>
                    <label for = 'Telefone'>Telefone</label>
                </div>
                <button type = 'submit' name = 'btn-cadastrar' class='btn'> Cadastrar</button>
                <a href = 'index.php' class = 'btn green'> Voltar para Lista </a>
            </form>
        </div>
    </div>

    <?php
        include_once 'includes/footer.php';
    ?>