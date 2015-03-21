<?php

include('connection.php');

class functions extends connection {
	
	public function show($sql = "SELECT * FROM clientes") {
		$this->connect();
		$res = $this->link->query($sql);
		while($row=$res->fetch(PDO::FETCH_ASSOC)) {
			$rows[]=$row;
		}
		$res->closeCursor();
		$this->disconnect();
		return $rows;
	}
	
}

?>