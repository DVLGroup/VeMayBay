<?php
/**
 * 
 */
class Database extends PDO {
	
	function __construct() {
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}

	/**
	 * select
	 * @param string $sql An SQL string
	 * @param array $array Paramters to bind
	 * @param constant $fetchMode A PDO Fetch mode
	 * @return mixed
	 */
	public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
	{
		$sth = $this->prepare($sql);
		foreach ($array as $key => $value) {
			$sth->bindValue("$key", $value);
		}
		
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}


}
