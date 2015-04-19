<?php
if(!defined("HICKS_HOME")){exit;} // Sicherheitscheck

/*
 * Diese Klasse arbeitet in einer einzelnen Instanz. Sie darf nicht als neue Instanz eingelesen werden. 
 * Benutzt wird: hicks_database::getInstance(); . Die gültige Instanz wird dann zurückgegeben.
 */
class hicks_database {
	
	private static $instance = null;
	
	private $type;
	private $host;
	private $user;
	private $pass;
	private $name;
	private $prefix;
	
	private $uplink;
	
	
	/**
	 * Verhindert, dass die Klasse in mehreren Instanzen existiert
	 * @return databaseInstance
	 */
	public static function getInstance()
	{
		if ( self::$instance === null ) {
			self::$instance = new self();
			self::$instance->intinalize(); // Wenn die Instanz zum ersten mal abgerufen wird, werden die Abhängigkeiten eingelesen
		}
		return self::$instance; // Gibt die Instanz der Klasse zurück
	}
	/**
	 * Initialisiert den Controller
	 */
	public function intinalize() {
		$this->type = hicks_config::database_type(); // Lädt sich den datenbanktypen aus der config (Derzeitig unrelevant)
		$this->host = hicks_config::database_host(); 
		$this->user = hicks_config::database_user();
		$this->pass = hicks_config::database_pass();
		$this->name = hicks_config::database_name();
		$this->prefix = hicks_config::database_prefix();
		
		try{  // Fängt Fehler beim Verbindungsaufbau ab
		$this->uplink = new PDO('mysql:host='.$this->host.';dbname='.$this->name.';charset=utf8;', $this->user, $this->pass);
		}catch (PDOExeption $ex){
			// ERROR 
		}		
		
	}
	/**
	 * Datenbankabfrage | Gibt einen Array zurück 
	 * @param string $table
	 * @param string $column
	 * @param string $where
	 * @param const $arrayTyp
	 * @return array
	 */
	public function select($table, $column = "*", $where = null, $arrayTyp = PDO::FETCH_ASSOC) {
		$variables = array();
		$wherequery = "";
		if(!$where == null){
			$wherequery .= "WHERE ";
   			/*$where = array(
   					
					array("name" => "id", "value" => "1"),
					array("name" => "id", "value" => "2")
			);
			*/
   			$int = 0;
			foreach ($where as $arg){	// Erzeugt den WHERE-Teil des Querys
				$wherequery .= ":".$int."name = :".$int."value ";
				$variables[":".$int."name"] = $arg['name'];
				$variables[":".$int."value"] = $arg['value'];
				$int++;
			}
		}
		$ret = array();	
		$variables[":column"] = $column;
		$variables[":table"] = $this->prefix.$table;
		$sql = "SELECT :column FROM :table".$wherequery;
		
		try {
			$stmt = $this->uplink->prepare($sql);
			$stmt->execute();
			$result = $stm->fetchAll($arrayTyp);

			//* Die erste Zeile ([0]) enthält Status-infors */
		} catch (PDOException $ex) {
			echo 'Exception -> ';
			var_dump($ex->getMessage());
		}
		$error = $this->uplink->errorInfo();  //  Die errorInfo() wird aus dem PDO Object und nicht aus dem PDOStatement bezogen ;)
		$ret[] = array('count' => $stm->rowCount(), 'error' => $error[2], 'sql' => $sql);

		/* associative and numeric array */
		foreach ($result as $row) {
			$ret[] = $row;
		}

		/* free result set */
		$stm->closeCursor();

		return $ret;
	}
	
	/**
	 * Datenabnkabfrage | INSERT INTO
	 * @param string $table
	 * @param array $fields
	 * @param boolean $update
	 * @return unknown
	 */
	public function insert($table, $fields, $update = false) {
		/*
		$fields = array(
			array("name" => "","value" => ""),
			array("name" => "","value" => "")				
		);
		*/
		// INSERT INTO `table` (`id`, `id2`) VALUES ('1234', '123');
		$variables = array();
		$variables[':table'] = $this->prefix.$table;
		$varquery = "";
		$valuequery = ") VALUES (";
		$int = 0;
		foreach ($fields as $value){
			
			if($int == 0){ // Verhindert, dass vor der ersten Variable ein Komma steht
				$variables[":".$int."name"] = $value['name'];
				$variables[":".$int."value"] = $value['value'];				
				$varquery .= ":".$int."name";
				$valuequery .= ":".$int."value";
			}else{
				$variables[':'.$int."name"] = $value['name'];
				$variables[':'.$int."value"] = $value['value'];				
				$varquery .= ", :".$int."name";
				$valuequery .= ", :".$int."value";
			}
			$int++;
		}
		$sql = "INSERT INTO :table (".$varquery.$valuequery.");";
		
		try {
			
			//$sql = substr($sql, 0, -2) . ") VALUES (";    ??
			//$sql .= substr($values, 0, -2) . ")";			??
			$statement = $this->link->prepare($sql);
			$count = $statement->execute($variables);
			return $count;
		} catch (PDOException $ex) {
			// ERROR
		}
	}

	public function update($table, $setarray, $where) {
		try {
			$sql = "UPDATE $this->tablepraefix$table SET ";
			foreach ($setarray as $key => $value) {
				$sql .= "`$key` = :$key, ";
				$execArray[] = $key . " = " . $value;
			}
			$sql = substr($sql, 0, -2) . " WHERE $where";
			$statement = $this->link->prepare($sql);
			$count = $statement->execute($setarray);
			return $count;
		} catch (PDOException $ex) {
			// ERROR
		}
	}

	public function delete() {

	}

}

?>
