<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ลงชื่อเอาระบบ | ระบบแจ้งซ่อมคอมพิวเตอร์</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <script src="js/script.js"></script>
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><small>ระบบแจ้งซ่อมคอมพิวเตอร์</small></a>
            <small>สำนักงานป้องกันควบคุมโรคที่ 6 ชลบุรี</small>
        </div>
        <div class="card">
            <div class="body">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">group</i>
                        </span>
                        <div class="form-line">
                          <select class="form-control show-tick" id="groupdepart">
                              <option value="">-- เลือกกลุ่มงาน --</option>
                              <option value="0000001">กลุ่มแผนงาน</option>
                              <option value="0000002">กลุ่มพัฒนาองค์กร</option>
                              <option value="0000003">กลุ่มบริหารทั่วไป</option>
                              <option value="0000004">กลุ่มระบาดวิทยา</option>
                              <option value="0000005">กลุ่มพัฒนาภาคีเครือข่าย</option>
                              <option value="0000006">กลุ่มปฏิบัติการตอบโต้ความเสี่ยงฯ</option>
                              <option value="0000007">กลุ่มสื่อสารความเสี่ยง</option>
                              <option value="0000008">กลุ่มพัฒนาวิชาการ</option>
                              <option value="0000009">กลุ่มห้องปฏิบัติการซันสุตร</option>
                              <option value="0000010">ศูนย์พัทยารักษ์</option>
                              <option value="0000012">ศตม 6.1 ศรีราชา</option>
                              <option value="0000013">ศตม 6.2 สระแก้ว</option>
                              <option value="0000014">ศตม 6.3 ระยอง</option>
                              <option value="0000015">ศตม 6.4 ตราด</option>
                              <option value="0000016">ศตม 6.5 จันทบุรี</option>
                              <option value="0000017">งานสถาปัตยกรรมข้อมูล</option>
                          </select>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="passwords" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <div id="chkststus"></div>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block" onclick="javascript:func_chklogin('CHKLOGIN')">SIGN IN</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
</body>

</html>
