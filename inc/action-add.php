<?php error_reporting (E_ALL ^ E_NOTICE);ob_start(); @session_start();date_default_timezone_set('Asia/Bangkok');
require_once '../connect/class_connectDb.php';
    if (isset($_POST["mode"]) && !empty($_POST["mode"])) {
        switch ($_POST["mode"]) {
            case "ADDFIX": addFix();
            break;
			case "ADDTASK":addTask();
			break;
        }
    }
exit();
function addFix(){
 $connect = new management;$connect->con_db();
 if(!empty($_POST['fixid']) && !empty($_POST['fixnumber']) && !empty($_POST['fixname']) && !empty($_POST['fixgroup'])){
	$query = mysqli_query($connect->con,"INSERT INTO `tb_requestfix` (`fixid`, `fixnumber`, `fixname`, `fixcomment`, `fixidenti`, `fixque`, `fixcase`, `fixstatus`, `fixrecomment`, `reportdate`, `reportby`, `departid`) VALUES ('".$_POST["fixid"]."','".$_POST['fixnumber']."','".$_POST['fixname']."','".$_POST['fixcomment']."','".$_POST['fixidenti']."', '', '', '0', '', '".date("Y-m-d H:i:s")."', '".$_POST['fixname']."','".$_POST['fixgroup']."')");
		$dataarray = explode(",", $_POST['chkBoxArray']);
		if(!empty($_POST['chkBoxArray'])){
			for($i=0;$i<count($dataarray);$i++){
				mysqli_query($connect->con,"INSERT INTO `tb_requestfixdetail` (`fixdetailnumber`,`fixid`) VALUES ('".$dataarray[$i]."', '".$_POST["fixid"]."')");
			}
		}
		if (!$query) {
			echo "no";
		} else {
			echo "ok";
		}
	}else{
		echo "empty";
	}
}
function addTask(){
 $connect = new management;$connect->con_db();
 if(!empty($_POST['nametask']) && !empty($_POST['namemanage']) && !empty($_POST['taskstatus']) && !empty($_POST['taskprogress'])){
	$query = mysqli_query($connect->con,"INSERT INTO `tb_task` (`task_name`, `task_status`, `task_manager`, `task_prograss`) VALUES ('".$_POST["nametask"]."','".$_POST['taskstatus']."','".$_POST['namemanage']."','".$_POST['taskprogress']."')");
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
