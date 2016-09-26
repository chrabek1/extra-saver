<?php


namespace ES;


class Db {

	private $pdo;

	public function __construct()
	{
		$this->pdo = new \PDO("mysql:dbname=es;host=localhost",'es','es');
	}
	
	public function get_targets(){

		$query = "SELECT * FROM target";

		$statement = $this->pdo->query($query);

		$data = $statement->fetchAll(\PDO::FETCH_ASSOC);
		
		return $data;
		
	}
}
