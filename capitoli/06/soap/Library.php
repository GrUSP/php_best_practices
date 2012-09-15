<?php 

class Library
{
	private $collection;

	private $is_logged = false;

	public function __construct()
	{
		$this->collection = array('La mille e una notte',
								  'Il vecchio e il mare',
								  'Il signore degli anelli');	
	}

	public function AuthenticationHeader($obj)
	{
		if (!$this->isValidUser($obj->username, $obj->password))
		{
			throw new SoapFault("1", "non autenticato con {$obj->username}, {$obj->password}");
		}
		
		$this->is_logged = true;		
	}

	public function getAvailableBooks()
	{
		$this->assertUserIsLogged();

		return $this->collection;
	}

	public function addBook($name)
	{
		$this->assertUserIsLogged();

		array_push($this->collection, $name);	

		return $this->collection;
	}

	public function assertUserIsLogged()
	{
		if (!$this->is_logged)
		{
			throw new SoapFault("2", "non autenticato");
		}	
	}

	private function isValidUser($username, $password)
	{
		$this->is_logged = ($username == 'utente' && $password == 'password');

		return $this->is_logged;
	}
}