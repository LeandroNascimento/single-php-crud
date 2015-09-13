<?php @include('partials/_head.php'); ?>
		<h1>Cadastro de contato</h1>
		<form action='/?request=save' method="post">
			<label>Nome</label>
			<input name="first_name" class="form-control">
			<br>
			<label>Sobrenome</label>
			<input name="second_name" class="form-control">
			<br>
			<label>Endereço</label>
			<input name="address" class="form-control">
			<br>
			<label>Estado</label>
			<input name="state" class="form-control">
			<br>
			<label>Cidade</label>
			<input name="city" class="form-control">
			<br>
			<label>Telefone</label>
			<input name="phone" class="form-control">
			<br>
			<button id="btn-save">Enviar</button>
		</form>
	</div>
</div>
<?php @include('partials/_footer.php'); ?>