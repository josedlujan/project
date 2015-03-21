<?php

class connection {
	
	private $user;
	private $password;
	protected $link;
	
	public function __construct() {
		$this->user = 'root';
		$this->password = '';
	}
	
	public function connect() {
		try {
			$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true);
			$this->link = new PDO('mysql:host=localhost; dbname=test', $this->user, $this->password, $options);
		} catch(PDOException $e) {
			echo "¡Error!: ".$e->getMessage();
		}	
	}
	
	public function disconnect() {
		$this->link = null;
	}
		
}

?>