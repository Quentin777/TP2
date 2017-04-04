<h2>Liste des crédits</h2>
<p><a href="admin.php?p=credit.add">Ajouter un crédit</a></p>

<table class="table table-bordered text-center col-md-12">
	<thead>
		<tr>
			<td>Organisme</td>
			<td>Montant</td>
		</tr>
	</thead>
	<tbody>
		

<?php foreach (App::getInstance()->getTable("credit")->all() as $credit): ?>
	<tr>
		<td><?= $credit->organisme ?></td>
		<td><?= $credit->montant ?></td>
	</tr>

	</tbody>

<?php endforeach; ?>

</table>