<?php @include('partials/_head.php'); ?>
		<h1>Editar contato</h1>
		<form action='/?request=update' method="post">
			<input name="id" type="hidden" value="<?= $contact['id']?>">
			<label>Nome</label>
			<input name="first_name" value="<?= $contact['first_name']?>" class="form-control">
			<br>
			<label>Sobrenome</label>
			<input name="second_name"  value="<?= $contact['second_name']?>" class="form-control">
			<br>
			<label>Endereço</label>
			<input name="address"  value="<?= $contact['address']?>" class="form-control">
			<br>
			<label>Estado</label>
			<input name="state"  value="<?= $contact['state']?>" class="form-control">
			<br>
			<label>Cidade</label>
			<input name="city"  value="<?= $contact['city']?>" class="form-control">
			<br>
			<label>Telefone</label>
			<input name="phone"  value="<?= $contact['phone']?>" class="form-control">
			<br>
			<button id="btn-save" class="btn btn-success" >Enviar</button>
		</form>
	</div>
</div>
<?php @include('partials/_footer.php'); ?>