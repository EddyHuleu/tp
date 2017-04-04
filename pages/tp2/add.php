<p>HELLO TA MERE</p>

<?php
if(isset($_POST['ajout'])){
    if(!empty($_POST['nom']) && !empty($_POST['prénom']) && !empty($_POST['statut']) && !empty($_POST['anniversaire']) && !empty($_POST['adresse']) && !empty($_POST['codePostal']) && !empty($_POST['numeroDeTelephone'])){

    App::getInstance()->getTable('client')->create([
		"nom" => $_POST['nom'],
		"prenom" => $_POST['prénom'],
		"date_de_naissance" => $_POST['anniversaire'],
		"adresse" => $_POST['adresse'],
		"code_postal" => $_POST['codePostal'],
		"numero_de_telephone" => $_POST['numeroDeTelephone'],
		"statut_marital" => $_POST['statut']]);
	header('Location: index.php?p=tp2');
	}
}
?>


<form action="index.php?p=tp2.add" method="post">
	<input type="text" name="nom" placeholder="Nom">
	<input type="text" name="prénom" placeholder="Prénom">
	<input type="date" name="anniversaire">
	<input type="text" name="adresse" placeholder="Adresse">
	<input type="text" name="codePostal" placeholder="Code Postal">
	<input type="text" name="numeroDeTelephone" placeholder="Numero de téléphone">
	<input type="text" name="statut" placeholder= "Statut Marital">
	<input type="submit" name="ajout">
</form>