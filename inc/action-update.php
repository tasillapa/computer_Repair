<?php error_reporting (E_ALL ^ E_NOTICE);ob_start(); @session_start();
require_once '../connect/class_connectDb.php';
    if (isset($_POST["mode"]) && !empty($_POST["mode"])) {
        switch ($_POST["mode"]) {
            case "UPDATEFIX": updatefix();
            break;
            case "UPDATETASK":updatetask();
            break;
        }
    }

function updatefix(){
 $connect = new management;$connect->con_db();
 if(!empty($_POST['fixque']) && !empty($_POST['fixclass'])){
	$query = mysqli_query($connect->con,"UPDATE `tb_requestfix` set `fixque`='".$_POST["fixque"]."'
	, `fixcase`='".$_POST["fixclass"]."'
	, `fixstatus`='".$_POST["fixstatus"]."'
	where `fixid` = '".$_POST["fixid"]."'");
		if (!$query) {
			echo "no";
		} else {
			echo "ok";
		}
	}else{
		echo "empty";
	}
}

function updatetask(){
  $connect = new management;$connect->con_db();
  if(!empty($_POST['nametask']) && !empty($_POST['namemanage']) && !empty($_POST['taskstatus']) && !empty($_POST['taskprogress'])){
   $query = mysqli_query($connect->con,"UPDATE `tb_task` set `task_name`='".$_POST["nametask"]."'
   , `task_status`='".$_POST["taskstatus"]."'
   , `task_manager`='".$_POST["namemanage"]."'
   , `task_prograss`='".$_POST["taskprogress"]."'
   where `taskid` = '".$_POST["taskid"]."'");
     if (!$query) {
       echo "no";
     } else {
       echo "ok";
     }
   }else{
     echo "empty";
   }
}
?>
