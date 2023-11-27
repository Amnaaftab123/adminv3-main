<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
  protected $data = array();
  public $totalRecords;

  function __construct()
  {
    parent::__construct();
    $this->totalRecords = 0;
  }
  
}