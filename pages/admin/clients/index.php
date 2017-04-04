<h2>Liste des clients</h2>
<p><a href="admin.php?p=clients.add">Ajouter un client</a></p>

<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Nom</td>
			<td>Prenom</td>
			<td>âge</td>
			<td>adresse</td>
			<td>code postal</td>
			<td>numero de téléphone</td>
			<td>statut marital</td>
			<td>Supprimer</td>
		</tr>
	</thead>
	<tbody>
		
	</tbody>

<?php foreach (App::getInstance()->getTable("Client")->all() as $client): ?>
	<tr>
		<td><?= $client->lastName ?></td>
		<td><?= $client->firstName ?></td>
		<td><?= $client->birthdate ?></td>
		<td><?= $client->adress ?></td>
		<td><?= $client->zipCode ?></td>
		<td><?= $client->phoneNumber ?></td>
		<td><?= $client->statutMarital ?></td>

		<td><form action="admin.php?p=clients.delete" method="post">
				<input type="hidden" name="id" value="<?= $client->id; ?>">
				<input class="btn btn-danger" type="submit" name="delete">
			</form>
	</tr>


<?php endforeach; ?>

</table>