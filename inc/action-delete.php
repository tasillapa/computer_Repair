<?php error_reporting (E_ALL ^ E_NOTICE);ob_start(); @session_start();
require_once '../class/config_db.php';
require_once 'class_connectDb.php';
    if (isset($_POST["mode"]) && !empty($_POST["mode"])) {
        switch ($_POST["mode"]) {
            case "ADD_REQUEST": addRequest();
            break;
            case "CHKLOGIN":chklogin();
            break;
        }
    }

function chklogin(){
  echo "Ok";
}

?>
