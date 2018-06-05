<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once dirname(__FILE__).'/php/classes/Auth.php';

if (Auth::MinRequired(4) == 'ENOACCESS') {
  http_response_code(403);
  die('403 - Forbidden');
}

?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <meta charset="utf-8">
  <title>Davids WM kack</title>
  <body>
    <br>
    <h1>Mongos</h1>
  </body>
</html>
