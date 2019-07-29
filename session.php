<?php
session_start();
ob_start();
function loggedin() {
  
  if (isset($_SESSION['username1']) &&!empty($_SESSION['username1'])) {
          return true;
    
  }
  else return false;
}

?>