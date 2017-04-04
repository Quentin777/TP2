<?php
namespace App\Entity;
use Core\Entity\Entity;
/**
*
**/
class ClientEntity extends Entity {
	
	public function getIdentite(){
		return strtoupper($this->lastName).' '.ucfirst($this->firstName);
	} 
}