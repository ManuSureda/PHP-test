<?php

spl_autoload_register(function($classNotFound){

  $array = explode("\\",$classNotFound);



  if(file_exists($array[0]."/".$array[1].".php"))
  {
    include($array[0]."/".$array[1].".php");
  }


});
