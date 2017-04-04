<h2>Liste des utilisateurs</h2>
<p><a href="index.php?p=tp2.add">ajouter un utilisateur</a></p>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Prénom</td>
			<td>Nom </td>
			<td>Info</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach (App::getInstance()->getTable("client")->nomPrenom() as $client): ?>
			<tr>
				<td><?= $client->nom; ?></td>
				<td><?= $client->prenom; ?></td>
				<td>
					<form action="index.php?p=tp2.info" method="post">
						<input type="text" name="id" value="<?= $client->id; ?>" style="display:none;">
						<input type="submit" name="idinfo" class="btn btn-danger">
					</form>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>