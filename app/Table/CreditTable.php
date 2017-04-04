<?php
namespace App\Table;
use Core\Table\Table;
/**
*
**/
class CreditTable extends Table 
{
	public function all(){
		return $this->query("SELECT *FROM credits");
	}
}