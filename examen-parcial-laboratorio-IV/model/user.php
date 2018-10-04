<?php namespace model;


/**
 *
 */
class User
{
  private $user;
  private $pass;

  function __construct($u,$p)
  {
    $this->user=$u;
    $this->pass=$p;
  }

  public function getUser(){return $this->user;}
  public function getPass(){return $this->pass;}

}
