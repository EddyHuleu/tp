<h2>Ajout de Crédits</h2>

<?php
if(isset($_POST['ajout'])){
    if(!empty($_POST['organisme']) && !empty($_POST['montant'])){

    App::getInstance()->getTable('credit')->create([
		"organisme" => $_POST['organisme'],
		"montant" => $_POST['montant'],
    	"idClients" => $_POST['id']]);
		header('Location: index.php?p=tp2');
	}
}
?>


<form action="index.php?p=tp2.addCredit" method="post">
	<input type="text" name="organisme" placeholder="organisme">
	<input type="text" name="montant" placeholder="montant">
	<input type="hidden" name="id" value="<?= $_POST['id'] ?>">
	<input type="submit" name="ajout">
</form>