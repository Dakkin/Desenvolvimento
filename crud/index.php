<?php
    include_once 'includes/header.php';
    include_once 'php_action/db_connect.php';
?>


    <div class = 'row'>
        <div class = "col s12 m6 push-m3">
            <h3 class = "light"> Usuário </h3>
            <table class = "striped">
            <table>
                <thead>
                    <tr>
                        <th> Nome </th>
                        <th> Data de Nascimento </th>
                        <th> CPF </th>
                        <th> Email </th>
                        <th> Telefone </th>
                    </tr>
                </thead>

<tbody>
    <tr>
<?php
	$sql = "SELECT * FROM usuario";
	$result = mysqli_query($connect, $sql);
	while ($dados = mysqli_fetch_array($result)):
	?>
		<tr>
			<td><?php echo $dados['nome']?></td>
			<td><?php echo $dados['data_nascimento']?></td>
			<td><?php echo $dados['CPF']?></td>
			<td><?php echo $dados['Email']?></td>
			<td><?php echo $dados['Telefone']?></td>
			<td><a href ="editarUsuario.php?id=<?php echo $dados['idUsuario'] ?>" class ="btn-floating blue"><i class="material-icons">edit</i></a></td>
			<td><a href ="#modal<?php echo $dados['idUsuario']; ?>" class ="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

  <!-- Modal Structure -->
            <div id="<?php echo $dados['idUsuario']; ?>" class="modal">
                <div class="modal-content">
                    <h4>Atenção</h4>
                    <p>Tem certeza que deseja apagar esse registro?</p>
                </div>
                <div class="modal-footer">
	                <form action ="php_action/deleteUsuario.php method="POST">
		                 <input type="hidden" name="id" value=<?php echo $dados['idUsuario']; ?>">
		                <button type="submit" name="btn-deletar" class= btn red">Sim</button>
                    	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
	                </form> 
                </div>
            </div>
        </tr>
	<?php endwhile; ?>
</tbody>
</table>
<br>
<a href = "adicionarUsuario.php" class = "btn"> Adicionar Novo </a>
</div>
</div>
    
<?php
    include_once 'includes/footer.php'
?>