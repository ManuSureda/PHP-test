<?php  namespace daosession;

/**
 *
 */
class RepoUser
{

	function __construct() {
	}

	public function create($obj) {

		if(!isset($_SESSION))
		{
			session_start();
		}


		$add = true;
		if(isset($_SESSION['users']))
		{
			$userArray = $_SESSION['users'];
			foreach ($userArray as $key => $value) {
				if($value->getUser() == $obj->getUser())
				{
					$add=false;
				}
			}
		}

		if($add)
		{
			$userArray[] = $obj;

			$_SESSION['users'] = $userArray;
		}




	}

	public function read($name) {
		if(!isset($_SESSION))
		{
			session_start();
		}

		if(isset($_SESSION['users']))
		{
			$userArray = $_SESSION['users'];

			foreach ($userArray as $key => $value) {
					if($value->getUser()==$name)
					{
						return $value;
					}
				}
		}
		else {
			return false;
		}



	}

	public function update() {

	}

	public function delete() {

	}
}
