<?php

/**
 * Auth Class
*/

require_once dirname(__FILE__).'/User.php';

class Auth {
  // Set the needed auth level for the page
  public static function MinRequired(int $min) {
    if (!isset($_SESSION['user'])) { return 'ENOACCESS'; }
    $user = $_SESSION['user'];

    if ($user->GetAuth() < $min) {
      return 'ENOACCESS';
    }
  }

}
