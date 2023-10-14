<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


class User extends Database
{
  private $id;
  private $fname;
  private $mname;
  private $lname;
  private $username;
  private $pass;
  private $type;

  /**
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param mixed $id 
   * @return self
   */
  public function setId($id): self
  {
    $this->id = $id;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getFname()
  {
    return $this->fname;
  }

  /**
   * @param mixed $fname 
   * @return self
   */
  public function setFname($fname): self
  {
    $this->fname = $fname;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getMname()
  {
    return $this->mname;
  }

  /**
   * @param mixed $mname 
   * @return self
   */
  public function setMname($mname): self
  {
    $this->mname = $mname;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLname()
  {
    return $this->lname;
  }

  /**
   * @param mixed $lname 
   * @return self
   */
  public function setLname($lname): self
  {
    $this->lname = $lname;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getPass()
  {
    return $this->pass;
  }

  /**
   * @param mixed $pass 
   * @return self
   */
  public function setPass($pass): self
  {
    $this->pass = $pass;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getType()
  {
    return $this->type;
  }

  /**
   * @param mixed $type 
   * @return self
   */
  public function setType($type): self
  {
    $this->type = $type;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getUsername()
  {
    return $this->username;
  }

  /**
   * @param mixed $username 
   * @return self
   */
  public function setUsername($username): self
  {
    $this->username = $username;
    return $this;
  }


  public function createUser(
    $fname,
    $mname,
    $lname,
    $username,
    $pass,
    $type
  ) {

    try {

      $this->fname = $this->checkInputs($fname);
      $this->mname = $this->checkInputs($mname);
      $this->lname = $this->checkInputs($lname);
      $this->username = $this->checkInputs($username);
      $this->pass = $this->checkInputs($pass);
      $this->type = $this->checkInputs($type);

      // check if username exist
      $stmt = $this->connect()->prepare("SELECT * FROM accounts WHERE username=:username");
      $stmt->bindParam(':username', $username);
      if (!$stmt->execute()) {
        throw new ErrorException("Failed");
      }
      if ($stmt->rowCount() > 0) {
        throw new ErrorException("Username already exist");
      }

      // password hashing
      $pass = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 8]);
      // insert new account
      $stmt = $this->connect()->prepare("INSERT INTO accounts(fname ,mname ,lname ,username ,password ,type) VALUES (:fname, :mname, :lname, :username, :pass, :type)");
      //binding parameters
      $stmt->bindParam(':fname', $fname);
      $stmt->bindParam(':mname', $mname);
      $stmt->bindParam(':lname', $lname);
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':pass', $pass);
      $stmt->bindParam(':type', $type);

      if (!$stmt->execute()) {
        throw new ErrorException("Failed");
      }

      $_SESSION['key'] = $username;
      $_SESSION['type'] = $type;

      header("location: /applicants");
      exit();
      
    } catch (Exception $ex) {
      echo $ex->getMessage();
    }
  }

  public function login(
    $username,
    $pass
  ) {

    try {

      $this->username = $this->checkInputs($username);
      $this->pass = $this->checkInputs($pass);

      // $this->loginUser($this->username, $this->pass);

    } catch (Exception $ex) {
      echo $ex->getMessage();
    }
  }

  private function checkInputs($inputs)
  {
    if (empty($inputs)) {
      throw new Exception("All fields are required");
    }
    return trim(htmlspecialchars($inputs));
  }
}
