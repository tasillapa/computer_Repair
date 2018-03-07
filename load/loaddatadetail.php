<?php error_reporting (E_ALL ^ E_NOTICE);@ob_start(); @session_start();
require_once '../connect/class_connectDb.php';
?>
<div class="body">
    <div class="table-responsive">
        <table class="table dataTable js-exportable">
            <thead style="font-size:11px;">
                <tr>
                    <!--<th>#</th>-->
                    <th>#</th>
                    <th>อาการเสียเบื้องต้น</th>
                </tr>
            </thead>
            <tbody style="font-size:12px;">
                <?php 	$connect = new management;$connect->con_db();
                  $sql = "select * from tb_requestfixdetail  where fixid='".$_POST['fixid']."'";
                  $query = mysqli_query($connect->con,$sql);
                  $intcount = 1;
                  while($rs = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $intcount;?></td>
                    <td>
                   <?php if($rs['fixdetailnumber']==01){
                      echo "ติดตั้งแก้ปัญหาฮาร์ดแวร์";
                    }elseif ($rs['fixdetailnumber']==02) {
                      # code...
                      echo "เดินสายแลน";
                    }elseif ($rs['fixdetailnumber']==03) {
                      # code...
                      echo "การใช้งานระบบ Internet";
                    }elseif ($rs['fixdetailnumber']==04) {
                      # code...
                      echo "ลงโปรแกรม";
                    }elseif ($rs['fixdetailnumber']==05) {
                      # code...
                      echo "แก้ไขไวรัสคอมพิวเตอร์";
                    }elseif ($rs['fixdetailnumber']==06) {
                      # code...
                      echo "ย้ายหรือติดตั้งคอมฯลฯ";
                    }elseif ($rs['fixdetailnumber']==07) {
                      # code...
                      echo "แก้ไขปัญหา Software";
                    }elseif ($rs['fixdetailnumber']==08) {
                      # code...
                      echo "-";
                    }elseif ($rs['fixdetailnumber']==09) {
                      # code...
                      echo "-";
                    } ?></td>
                </tr>
            <?php $intcount++; } ?>
            </tbody>
        </table>
    </div>
</div>
