<?php

class Applicant extends Database
{
  private $id;
  private $fname;
  private $mname;
  private $lname;
  private $username;
  private $password;
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

  /**
   * @return mixed
   */
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * @param mixed $password 
   * @return self
   */
  public function setPassword($password): self
  {
    $this->password = $password;
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

  public function setUser(
    $fname,
    $mname,
    $lname,
    $username,
    $password,
    $type
  ) {

    try {

      $this->fname = $this->checkInputs($fname);
      $this->mname = $this->checkInputs($mname);
      $this->lname = $this->checkInputs($lname);
      $this->username = $this->checkInputs($username);
      $this->password = $this->checkInputs($password);
      $this->type = $this->checkInputs($type);

    } catch (Exception $ex) {
      echo $ex->getMessage();
    }
  }

  public function getUserWithId(
    $id
  ) {
  }

  private function checkInputs($inputs)
  {
    if (empty($inputs)) {
      throw new Exception("Invalid input");
    }
    return trim(htmlspecialchars($inputs));
  }
}
