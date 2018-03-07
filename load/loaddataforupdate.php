<?php error_reporting (E_ALL ^ E_NOTICE);@ob_start(); @session_start();
require_once '../connect/class_connectDb.php';
$connect = new management;$connect->con_db();
$sql = "select * from tb_requestfix where fixid='".$_POST['fixid']."'";
$query = mysqli_query($connect->con,$sql);
$rs = mysqli_fetch_array($query);
?>
<div class="row clearfix">
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <input type="text" class="form-control" value="<?php echo $rs['fixid']?>" id="fixid" readonly>
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <input type="text" class="form-control" id="fixnumber" readonly value="<?php echo $rs['fixnumber']?>">
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <input type="text" class="form-control" id="fixname" readonly value="<?php echo $rs['fixname']?>">
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <textarea rows="2" id="fixcomment" class="form-control no-resize" readonly><?php echo ($rs['fixcomment']=="")?"-":$rs['fixcomment']?></textarea>
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <textarea rows="2" id="fixidenti" class="form-control no-resize" readonly><?php echo ($rs['fixidenti']=="")?"-":$rs['fixidenti']?></textarea>
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <input type="text" class="form-control" id="fixque" placeholder="เพิ่มคิวงาน" value="<?php echo $rs['fixque']?>">
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <select class="form-control show-tick" id="fixclass">
                  <option value="">-- เลือกจำแนกหมวดงาน --</option>
                  <option value="1001"<?php if($rs['fixcase']==1001){echo "selected";}?>>Software</option>
                  <option value="1002"<?php if($rs['fixcase']==1002){echo "selected";}?>>Hardware</option>
                  <option value="1003"<?php if($rs['fixcase']==1003){echo "selected";}?>>อาการเบื่องต้น</option>
                  <option value="1004"<?php if($rs['fixcase']==1004){echo "selected";}?>>ส่งศูนย์</option>
              </select>
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <select class="form-control show-tick" id="fixstatus">
                  <option value="">-- เลือกสถานะ --</option>
                  <option value="0"<?php if($rs['fixstatus']==0){echo "selected";}?>>รอดำเนินการ</option>
                  <option value="2"<?php if($rs['fixstatus']==2){echo "selected";}?>>เรียบร้อยแล้วคะ</option>
              </select>
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group form-float">
          <div class="form-line">
              <textarea rows="2" id="fixrecomment" class="form-control no-resize" placeholder="เสนอคำแนะนำ"><?php echo $rs['fixrecomment']?></textarea>
          </div>
      </div>
  </div>
</div>
