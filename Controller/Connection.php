<?php
class Connection
{
  private $serverName = "localhost";
  private $userName = "root";
  private $password = "";
  private $dbName = "tntienganh";
  public $conn;

  public function __construct()
  {
    $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->userName, $this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
// <?php
// class Connection
// {
//   private $serverName = "localhost";
//   private $userName = "id22160332_nhom06php";
//   private $password = "Aa@12345678";
//   private $dbName = "id22160332_nhom06php";
//   public $conn;

//   public function __construct()
//   {
//     $this->conn = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->userName, $this->password);
//     $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   }
// }
