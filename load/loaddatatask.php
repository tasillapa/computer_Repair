<?php error_reporting (E_ALL ^ E_NOTICE);@ob_start(); @session_start();
require_once '../connect/class_connectDb.php';
$connect = new management;$connect->con_db();
$sql = "select * from tb_task where taskid='".$_POST['taskid']."'";
$query = mysqli_query($connect->con,$sql);
$rs = mysqli_fetch_array($query);
?>
<div class="row clearfix">
    <div class="col-sm-12">
        <div class="form-group form-float">
            <div class="form-line">
              <input type="hidden" id="taskidH" class="form-control" value="<?php echo $rs['taskid']?>">
                <input type="text" id="nametasks" class="form-control" value="<?php echo $rs['task_name']?>">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" id="namemanages" class="form-control" value="<?php echo $rs['task_manager']?>">
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group form-float">
            <div class="form-line">
              <select id="taskstatuss" class="form-control show-tick">
                  <option value="">-- Please select Status --</option>
                  <option value="Doing"<?php if($rs['task_status']=="Doing"){echo "selected";}?>>Doing</option>
                  <option value="ToDo"<?php if($rs['task_status']=="ToDo"){echo "selected";}?>>To Do</option>
                  <option value="OnHold"<?php if($rs['task_status']=="OnHold"){echo "selected";}?>>On Hold</option>
                  <option value="WaitApprovel"<?php if($rs['task_status']=="WaitApprovel"){echo "selected";}?>>Wait Approvel</option>
                  <option value="Suspended"<?php if($rs['task_status']=="Suspended"){echo "selected";}?>>Suspended</option>
                  <option value="Success"<?php if($rs['task_status']=="Success"){echo "selected";}?>>Success</option>
              </select>
          </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
              <select id="taskprogresss" class="form-control show-tick">
                  <option value="">-- Please select Progress --</option>
                  <option value="10"<?php if($rs['task_prograss']==10){echo "selected";}?>>10</option>
                  <option value="20"<?php if($rs['task_prograss']==20){echo "selected";}?>>20</option>
                  <option value="30"<?php if($rs['task_prograss']==30){echo "selected";}?>>30</option>
                  <option value="40"<?php if($rs['task_prograss']==40){echo "selected";}?>>40</option>
                  <option value="50"<?php if($rs['task_prograss']==50){echo "selected";}?>>50</option>
                  <option value="60"<?php if($rs['task_prograss']==60){echo "selected";}?>>60</option>
                  <option value="70"<?php if($rs['task_prograss']==70){echo "selected";}?>>70</option>
                  <option value="80"<?php if($rs['task_prograss']==80){echo "selected";}?>>80</option>
                  <option value="90"<?php if($rs['task_prograss']==90){echo "selected";}?>>90</option>
                  <option value="100"<?php if($rs['task_prograss']==100){echo "selected";}?>>100</option>
              </select>
          </div>
        </div>
    </div>
</div>
