<?php
require_once('inc/cabecalho.php');
?>

<div class="text-center mb-4">
<form action="logar.php" method="post">
	<label class="text-center mb-1">E-mail</label><br>
	<input type="email" name="email" id="email"><br><br>
	<label class="text-center mb-1">Senha</label><br>
	<input type="password" name="senha" id="senha"><br>
	<a href="cadastro.php">Ainda não tem um cadastro?</a><br><br>
	<button type="submit" class="btn-success">Entrer</button><br><br>
	<a href="index.php">Voltar</a>
</form>
</div>

<?php
require_once('inc/rodape.php');
?>