<!-- Thi sinh -->
<?php
class ThiSinh
{
  private $id;
  private $username;
  private $password;
  private $email;
  private $fullname;
  private $role;

  public function __construct($id, $username, $password, $email, $fullname, $role)
  {
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
    $this->fullname = $fullname;
    $this->role = $role;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getFullname()
  {
    return $this->fullname;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function setFullname($fullname)
  {
    $this->fullname = $fullname;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }

  public static function getThiSinh($username, $password)
  {
    $conn = new Connection();
  }
}
?>