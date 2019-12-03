<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repository
{
  function __construct()
  {
    global $api_url;
    $api_url = "localhost/shadesapi/";
  }
  public function geturl(){
    global $api_url;
    return $api_url;
  }
}
?>
