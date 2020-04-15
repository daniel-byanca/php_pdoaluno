<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
	require 'classes/Usuario.php'; 
	require 'classes/UsuarioDAO.php';
	$usuario = new Categoria();
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$usuarioDAO = new UsuarioDAO();
		$usuario = $usuarioDAO->get($id);
	}

?>

<div class="row">
	<div class="col">
		<p>&nbsp;</p>
		<form action="controle_usuario.php?acao=<?= ( $usuario->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post">
			<div class="form-group">
				<label for="id">ID</label>
				<input type="text" class="form-control" name="id" id="id" value="<?=($usuario->getId() != '' ? $usuario->getId() : '')?>" readonly>
			</div>
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" required value="<?= ($usuario->getNome() != '' ? $usuario->getNome() : '') ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email" required value="<?= ($usuario->getNome() != '' ? $usuario->getNome() : '') ?>">
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" class="form-control" name="senha" id="senha" required value="<?= ($usuario->getNome() != '' ? $usuario->getNome() : '') ?>">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
	</div>
</div>

<?php include './layout/footer.php'; ?>