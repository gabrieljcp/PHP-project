<link rel="stylesheet" href="css/estilos.css">

<h1>Cadastrar Categoria</h1>

<form action="?page=salvar-categoria" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome da Categoria</label>
		<input type="text" name="nome_categoria" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>