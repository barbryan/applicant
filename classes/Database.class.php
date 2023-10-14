<?php

class Database
{
  private $HOST = 'localhost';
  private $USER = 'root';
  private $PASS = '';
  private $DB = 'applicant';

  protected function connect()
  {
    $dsn = 'mysql:host=' . $this->HOST . ';dbname=' . $this->DB;
    $con = new PDO($dsn, $this->USER, $this->PASS);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $con;
  }
}