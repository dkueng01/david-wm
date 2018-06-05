<?php

/**
 * User Class
*/


class User {

  private $uuid,
          $uname,
          $auth,
          $name,
          $lastname,
          $balance;

  public function __construct(object $info) {
    $this->uuid = $info->uuid;
    $this->uname = $info->uname;
    $this->auth = $info->auth;
    $this->name = $info->name;
    $this->lastname = $info->lastname;
    $this->balance = $info->balance;
    session_start();
    $_SESSION['']
  }

  public static function Login($uuid, $pass) {
    // TODO: Check with DB, for now just true

    $uname = 'gabenizhere';
    $name = 'Gabriel';
    $lastname = 'Selinschek';
    $balance = 420;

    $info = (object) array(
      'uuid' => $uuid,
      'uname' => $uname,
      'auth' => 5,
      'name' => $name,
      'lastname' => $lastname,
      'balance' => $balance
    )

    $user = new User($info);
  }

}
