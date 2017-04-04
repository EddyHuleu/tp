<h2>Info client</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<td>Prénom</td>
			<td>Nom </td>
			<td>Date de Naissance</td>
			<td>Adresse</td>
			<td>Code Postal</td>
			<td>Telephone</td>
			<td>Statut</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach (App::getInstance()->getTable("client")->toutSaufMarital($_POST['id']) as $client): ?>
		<tr>
			<td><?= $client->nom; ?></td>
            <td><?= $client->prenom; ?></td>
            <td><?= $client->date_de_naissance; ?></td>
            <td><?= $client->adresse; ?></td>
            <td><?= $client->code_postal; ?></td> <!-- service au lieu de services.id-->
            <td><?= $client->numero_de_telephone; ?></td>
            <td><?= $client->statut; ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<form action="index.php?p=tp2.addCredit" method="post">
<input type="hidden" name="id" value="<?= $_POST['id']; ?>">
<input type="submit" name="transfereId" value="Ajouter un crédit à cette personne">
</form>

<hr>
<h2>Crédit du Client</h2>
<?php foreach (App::getInstance()->getTable("credit")->monCredit($_POST['id']) as $infoCredit): ?>
<tr>
	Organisme:<td><?= $infoCredit->organisme ?>;</td></br>
	Montant:<td><?= $infoCredit->montant ?>;</td>€
</tr>

<?php endforeach ?>