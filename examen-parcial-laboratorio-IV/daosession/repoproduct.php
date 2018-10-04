<?php
 namespace daosession;

/**
 *
 */
class RepoProduct
{

  function __construct() {
  }

  public function create($obj) {

		if(!isset($_SESSION))
		{
			session_start();
		}


		$add = true;
		if(isset($_SESSION['products']))
		{
			$productArray = $_SESSION['products'];
			foreach ($productArray as $key => $value) {
				if($value->getProductCode() == $obj->getProductCode())
				{
					$add=false;
				}
			}
		}

		if($add)
		{
			$productArray[] = $obj;

			$_SESSION['products'] = $productArray;
		}




	}

  public function read($code)
  {
		if(!isset($_SESSION))
		{
			session_start();
		}

		if(isset($_SESSION['products']))
		  {
  			$productArray = $_SESSION['products'];

  			foreach ($productArray as $key => $value) {
  					if($value->getUser()==$code)
  					{
  						return $value;
  					}
  				}
  		}
  		else {
  			return false;
		}



	}

  public function readAll()
  {
      if(!isset($_SESSION))
      {
          session_start();
      }
      if (isset($_SESSION['products']))
      {
          return $_SESSION['products'];
      }else{
        return false;
      }
  }

  /*public function update() {

  }

  public funciton delete() {

  }*/
}
