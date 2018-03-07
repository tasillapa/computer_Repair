<?php error_reporting (E_ALL ^ E_NOTICE);@ob_start(); @session_start();
require_once '../connect/class_connectDb.php';
    if (isset($_POST["mode"]) && !empty($_POST["mode"])) {
        switch ($_POST["mode"]) {
            case "CHKLOGIN":chklogin();
            break;
        }
    }

function chklogin(){
	if(!empty($_POST["group"]) && !empty($_POST["username"]) && !empty($_POST["passwords"])){
	  $connect = new management;$connect->con_db();
	  $query = mysqli_query($connect->con,"select * from tb_department where departid='".$_POST["group"]."' and departuser='".$_POST["username"]."' and departpass='".$_POST["passwords"]."'");
		if(mysqli_num_rows($query)>=1){
			while($rs = mysqli_fetch_array($query)){
			  $_SESSION['departid']=$rs['departid'];
			  $_SESSION['departname']=$rs['departname'];
			  $_SESSION['departuser']=$rs['departuser'];
			  $_SESSION['departpass']=$rs['departpass'];
			  echo "ok";
			}
		} else {
			echo "no";
		}
	}else{
		echo "empty";
	}
}

?>
