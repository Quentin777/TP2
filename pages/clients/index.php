<h2>Liste des clients</h2>

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
	</tr>


<?php endforeach; ?>

</table>