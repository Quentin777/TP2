<?php 
if(isset($_POST['lastName'],$_POST['firstName'],$_POST['birthdate'],$_POST['adress'],$_POST['zipCode'],$_POST['phoneNumber'])){
	App::getInstance()->getTable('Client')->create([
		"lastName" => $_POST['lastName'],
		"firstName" => $_POST['firstName'],
		"birthdate" => $_POST['birthdate'],
		"adress" => $_POST['adress'],
		"zipCode" => $_POST['zipCode'],
		"phoneNumber" => $_POST['phoneNumber']]);
	header('Location: admin.php?p=clients');
}
?>
<h2>Ajouter un client</h2>

<form action="admin.php?p=clients.add" method="post">
	<input type="text" name="lastName" placeholder="nom">
	<input type="text" name="firstName" placeholder="prenom">
	<input type="date" name="birthdate" placeholder="date de naissance">
	<input type="text" name="adress" placeholder="adress">
	<input type="text" name="zipCode" placeholder="code postal">
	<input type="text" name="phoneNumber" placeholder="telephone">
	<select name="statutMarital_id" class="form form-control">
	<?php foreach (App::getInstance()->getTable('Client')->all() as $client): ?>
		<option value="<?= $client->id; ?>">
			<?= $client->statutMarital; ?>
		</option>
	<?php endforeach ?>
</select>
<input class="btn btn-success" type="submit" >
</form>
