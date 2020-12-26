<?php

/**
 * 
 */
class dbClass
{
	public $conn;

	function __construct($hostname, $username, $password, $dbname)
	{
		$this->conn = new mysqli($hostname, $username, $password, $dbname);
	}

	public function getConnDetails()
	{
		return $this->conn;
	}
}