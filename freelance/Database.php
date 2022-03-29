<?php

namespace app;

use PDO;

class Database
{

  private $host = '192.168.64.2';
  private $user = 'freelance';
  private $password = 'freelance';
  private $dbName = 'freelance';


  protected function connectToDb()
  {

    // update variables in deploy environment
    $dbUrl = getenv("CLEARDB_DATABASE_URL");
    if ($dbUrl) {
      $dbDetails = parse_url($dbUrl);
      $this->host = $dbDetails["host"];
      $this->user =  $dbDetails["user"];
      $this->password =  $dbDetails["pass"];
      $this->dbName = substr($dbDetails["path"], 1);
    }

    // https://www.phptutorial.net/php-pdo/
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
}