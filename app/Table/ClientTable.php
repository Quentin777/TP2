<?php
namespace App\Table;
use Core\Table\Table;
/**
*
**/
class ClientTable extends Table 
{
	public function all(){
		return $this->query("SELECT clients.id,
							clients.lastName,
							clients.firstName,
							clients.adress,
							clients.zipCode,
							clients.birthdate,
							clients.phoneNumber,
							clients.statutMarital,
							statutMarital.statut as statutMarital
							FROM clients
							LEFT JOIN statutMarital
							ON statutMarital = statutMarital.id
							");
	}
}