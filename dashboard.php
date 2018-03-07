<?php @session_start();include_once("connect/class_connectDb.php");?>
﻿<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>ระบบแจ้งซ่อมคอมพิวเตอร์ | สำนักงานป้องกันควบคุมโรคที่ 6 ชลบุรี</title>
    <!-- InstanceEndEditable -->
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
 <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />
    <!-- InstanceBeginEditable name="head" -->
	  <script src="js/script.js"></script>
    <!-- InstanceEndEditable -->
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php">ระบบแจ้งซ่อมคอมพิวเตอร์</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo (isset($_SESSION['departname'])?$_SESSION['departname']:"Null");?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->

            <div class="menu">
                <!-- InstanceBeginEditable name="EditRegion5" -->
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="material-icons">home</i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>
                    <li>
                        <a href="requestformat.php">
                            <i class="material-icons">assignment</i>
                            <span>รูปแบบการปฏิบัติงาน</span>
                        </a>
                    </li>
                    <li>
                        <?php if($_SESSION['departid']=='0000017'){?>
							<a href="requestfixadmin.php">
                                <i class="material-icons">text_fields</i>
                                <span>แจ้งการซ่อม</span>
                            </a>
						<?php }else{?>
                            <a href="requestfix.php">
                                <i class="material-icons">text_fields</i>
                                <span>แจ้งการซ่อม</span>
                            </a>
                      	<?php }?>
                    </li>
                    <li>
                        <a href="requestfixque.php">
                            <i class="material-icons">alarm</i>
                            <span>รายการคิวซ่อมทั้งหมด</span>
                        </a>
                    </li>
                    <li>
                        <a href="requestwindows.php">
                            <i class="material-icons">layers</i>
                            <span>รายการลง Windows</span>
                        </a>
                    </li>
                    <li>
                        <a href="requesthardware.php">
                            <i class="material-icons">widgets</i>
                            <span>รายการซ่อมฮาร์ดแวร์</span>
                        </a>
                    </li>
                    <li>
                        <a href="requestmanual.php">
                            <i class="material-icons">info</i>
                            <span> รายการซ่อมอาการเบื่องต้น</span>
                        </a>
                    </li>
                    <li>
                        <a href="requestout.php">
                            <i class="material-icons">swap_calls</i>
                            <span>รายการส่งศูนย์</span>
                        </a>
                    </li>
                </ul>
			          <!-- InstanceEndEditable -->
            </div>

            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">DPC6 - Material Design</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><!-- InstanceBeginEditable name="EditRegion4" -->
                    <div class="align-right">
                        <div class="switch panel-switch-btn">
                            <a href="javascript:void(0);" class="btn btn-warning" data-toggle="modal" data-target="#defaultModalfix">
                            	แจ้งซ่อม
                            </a>
                        </div>
                    </div>
								<!-- InstanceEndEditable --></h2>
            </div>
            <!-- InstanceBeginEditable name="EditRegion3" -->
            <div class="row clearfix">
              <!-- Latest Social Trends -->
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="card">
                      <div class="body bg-cyan">
                          <div class="m-b--35 font-bold">แนวโน้มอาการเสียของ Windows</div>
                          <ul class="dashboard-stat-list">
                              <li>
                                  #ระบบ Virus
                                  <span class="pull-right">
                                      <i class="material-icons">trending_up</i>
                                  </span>
                              </li>
                              <li>
                                  #ระบบ Microsoft Office
                                  <span class="pull-right">
                                      <i class="material-icons">trending_up</i>
                                  </span>
                              </li>
                              <li>#ระบบ Network</li>
                              <li>#ระบบ Monitor </li>
                              <li>#ระบบ Windows
                              	  <span class="pull-right">
                                      <i class="material-icons">trending_up</i>
                                  </span>
                              </li>
                              <li>
                                  #ระบบ Hardware
                                  <span class="pull-right">
                                      <i class="material-icons">trending_up</i>
                                  </span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- #END# Latest Social Trends -->
              <!-- Answered Tickets -->
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="card">
                      <div class="body bg-teal">
                          <div class="font-bold m-b--35">รายการลง Windows</div>
                          <ul class="dashboard-stat-list">
                              <li>
                                  วันนี้
                                  <span class="pull-right"><b>5</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  เมื่อวาน
                                  <span class="pull-right"><b>15</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  สัปดาห์ที่แล้ว
                                  <span class="pull-right"><b>20</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  เดือนที่แล้ว
                                  <span class="pull-right"><b>40</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  ปีที่แล้ว
                                  <span class="pull-right"><b>80</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  ทั้งหมด
                                  <span class="pull-right"><b>120</b> <small>เครื่อง</small></span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- #END# Answered Tickets -->
              <!-- Answered Tickets -->
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="card">
                      <div class="body bg-pink">
                          <div class="font-bold m-b--35">รายการแจ้งซ่อม</div>
                          <ul class="dashboard-stat-list">
                              <li>
                                  วันนี้
                                  <span class="pull-right"><b>9</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  เมื่อวาน
                                  <span class="pull-right"><b>10</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  สัปดาห์ที่แล้ว
                                  <span class="pull-right"><b>19</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  เดือนที่แล้ว
                                  <span class="pull-right"><b>29</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  ปีที่แล้ว
                                  <span class="pull-right"><b>48</b> <small>เครื่อง</small></span>
                              </li>
                              <li>
                                  ทั้งหมด
                                  <span class="pull-right"><b>77</b> <small>เครื่อง</small></span>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- #END# Answered Tickets -->
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>ตารางการดำเนินงาน</h2>
                                </div>
                                <?php if($_SESSION['departid']=='0000017'){?>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#defaultModal"><span class="label bg-green">เพิ่มงาน</span></a>
                                    </div>
                                </div>
                               <?php }?>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>งาน</th>
                                            <th>สถานะ</th>
                                            <th>ผู้รับผิดชอบ</th>
                                            <th>ความคืบหน้า</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $connect = new management;$connect->con_db();
                                            $sql="select * from tb_task";
                                            $query = mysqli_query($connect->con,$sql);
											$introws = 1;
							
											while($rs = mysqli_fetch_array($query)){
                                      ?>
                                        <tr>
                                            <td><?php echo $introws?></td>
                                            <td><?php echo $rs['task_name']?></td>
                                            <td><?php echo $rs['task_status']?></td>
                                            <td><?php echo $rs['task_manager']?></td>
                                            <td>
                                              <?php if($rs['task_prograss']<=20){?>
                                              <div class="progress">
                                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="<?php echo $rs['task_prograss']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rs['task_prograss']?>%"><span style="font-size:5%"><?php echo $rs['task_prograss']?>%</span></div>
                                              </div>
                                              <?php }elseif ($rs['task_prograss']<=40) {?>
                                              <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $rs['task_prograss']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rs['task_prograss']?>%"><span><?php echo $rs['task_prograss']?>%</span></div>
                                              </div>
                                              <?php }elseif ($rs['task_prograss']<=60) {?>
                                              <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="<?php echo $rs['task_prograss']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rs['task_prograss']?>%"><span><?php echo $rs['task_prograss']?>%</span></div>
                                              </div>
                                              <?php }elseif ($rs['task_prograss']<=80) {?>
                                              <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo $rs['task_prograss']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rs['task_prograss']?>%"><span><?php echo $rs['task_prograss']?>%</span></div>
                                              </div>
                                              <?php }elseif ($rs['task_prograss']<=100) {?>
                                              <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?php echo $rs['task_prograss']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rs['task_prograss']?>%"><span><?php echo $rs['task_prograss']?>%</span></div>
                                              </div>
                                              <?php }?>

                                            </td>
                                            <?php if($_SESSION['departid']=='0000017'){?>
                                            <td>
                                            <i class="material-icons" data-toggle="modal" data-target="#defaultModaltask" onClick="Javascript:func_loaddatatask('LOADDATATASK','<?php echo $rs['taskid']?>')" style="cursor:pointer;">settings_applications</i>
                                            </td>
                                            <?php }?>
                                        </tr>
                                      <?php $introws++;} ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
            <!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">เพิ่มรายการงานที่รับผิดชอบ</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row clearfix">
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" id="nametask" class="form-control">
                                          <label class="form-label">ชื่องานที่ได้รับมอบหมาย</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" id="namemanage" class="form-control">
                                          <label class="form-label">ผู้รับผิดชอบ</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <select id="taskstatus" class="form-control show-tick">
                                            <option value="">-- Please select Status --</option>
                                            <option value="Doing">Doing</option>
                                            <option value="ToDo">To Do</option>
                                            <option value="OnHold">On Hold</option>
                                            <option value="WaitApprovel">Wait Approvel</option>
                                            <option value="Suspended">Suspended</option>
                                            <option value="Success">Success</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <select id="taskprogress" class="form-control show-tick">
                                            <option value="">-- Please select Progress --</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="70">70</option>
                                            <option value="80">80</option>
                                            <option value="90">90</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect" onClick="Javascript:addTask('ADDTASK');">
                                <i class="material-icons">save</i>
                                <span>บันทึกข้อมูล</span>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                              <i class="material-icons">clear</i>
                              <span>ปิด</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Default Size -->
            <div class="modal fade" id="defaultModalfix" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">เพิ่มรายการแจ้งซ่อม</h4>
                        </div>
                        <div class="modal-body">
                          <div class="row clearfix">
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" value="<?php $db=new management;$db->con_db();$getid = $db->getid('fixid','tb_requestfix');echo $getid;?>" id="fixid" readonly>
                                          <label class="form-label">รหัสการแจ้งซ่อม</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" id="fixnumber">
                                          <label class="form-label">เลขครุภัณฑ์</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" id="fixname">
                                          <label class="form-label">ชื่อผู้แจ้งซ่อม</label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                      <select class="form-control show-tick" id="fixgroup">
                                          <option value="">-- เลือกกลุ่มงาน --</option>
                                          <option value="0000001"<?php if($_SESSION['departid']=='0000001'){echo "selected";}?>>กลุ่มแผนงาน</option>
                                          <option value="0000002"<?php if($_SESSION['departid']=='0000002'){echo "selected";}?>>กลุ่มพัฒนาองค์กร</option>
                                          <option value="0000003"<?php if($_SESSION['departid']=='0000003'){echo "selected";}?>>กลุ่มบริหารทั่วไป</option>
                                          <option value="0000004"<?php if($_SESSION['departid']=='0000004'){echo "selected";}?>>กลุ่มระบาดวิทยา</option>
                                          <option value="0000005"<?php if($_SESSION['departid']=='0000005'){echo "selected";}?>>กลุ่มพัฒนาภาคีเครือข่าย</option>
                                          <option value="0000006"<?php if($_SESSION['departid']=='0000006'){echo "selected";}?>>กลุ่มปฏิบัติการตอบโต้ความเสี่ยงฯ</option>
                                          <option value="0000007"<?php if($_SESSION['departid']=='0000007'){echo "selected";}?>>กลุ่มสื่อสารความเสี่ยง</option>
                                          <option value="0000008"<?php if($_SESSION['departid']=='0000008'){echo "selected";}?>>กลุ่มพัฒนาวิชาการ</option>
                                          <option value="0000009"<?php if($_SESSION['departid']=='0000009'){echo "selected";}?>>กลุ่มห้องปฏิบัติการซันสุตร</option>
                                          <option value="0000010"<?php if($_SESSION['departid']=='0000010'){echo "selected";}?>>ศูนย์พัทยารักษ์</option>
                                          <option value="0000012"<?php if($_SESSION['departid']=='0000012'){echo "selected";}?>>ศตม 6.1 ศรีราชา</option>
                                          <option value="0000013"<?php if($_SESSION['departid']=='0000013'){echo "selected";}?>>ศตม 6.2 สระแก้ว</option>
                                          <option value="0000014"<?php if($_SESSION['departid']=='0000014'){echo "selected";}?>>ศตม 6.3 ระยอง</option>
                                          <option value="0000015"<?php if($_SESSION['departid']=='0000015'){echo "selected";}?>>ศตม 6.4 ตราด</option>
                                          <option value="0000016"<?php if($_SESSION['departid']=='0000016'){echo "selected";}?>>ศตม 6.5 จันทบุรี</option>
                                          <option value="0000017"<?php if($_SESSION['departid']=='0000017'){echo "selected";}?>>งานสถาปัตยกรรมข้อมูล</option>
                                      </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="demo-checkbox"><h4>เลือกกลุ่มอาการเสีย</h4><br/>
                                      <input type="checkbox" id="md_checkbox_30" class="filled-in" value="01" />
                                      <label for="md_checkbox_30">ติดตั้งแก้ปัญหาฮาร์ดแวร์</label><br/>
                                      <input type="checkbox" id="md_checkbox_31" class="filled-in" value="02" />
                                      <label for="md_checkbox_31">เดินสายแลน</label><br/>
                                      <input type="checkbox" id="md_checkbox_32" class="filled-in" value="03" />
                                      <label for="md_checkbox_32">การใช้งานระบบ Internet</label><br/>
                                      <input type="checkbox" id="md_checkbox_33" class="filled-in" value="04" />
                                      <label for="md_checkbox_33">ลงโปรแกรม</label><br/>
                                      <input type="checkbox" id="md_checkbox_34" class="filled-in" value="05" />
                                      <label for="md_checkbox_34">แก้ไขไวรัสคอมพิวเตอร์</label><br/>
                                      <input type="checkbox" id="md_checkbox_35" class="filled-in" value="06" />
                                      <label for="md_checkbox_35">ย้ายหรือติดตั้งคอมฯลฯ</label><br/>
                                      <input type="checkbox" id="md_checkbox_36" class="filled-in" value="07" />
                                      <label for="md_checkbox_36">แก้ไขปัญหา Software</label><br/>
                                    </div>
                                </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <textarea rows="2" id="fixcomment" class="form-control no-resize" placeholder="หมายเหตุการแจ้งซ่อม"></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-12">
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <textarea rows="2" id="fixidenti" class="form-control no-resize" placeholder="กรุณาระบุอาการเสีย"></textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect" onClick="javascript:func_addfix('ADDFIX');">								<div id="chkadd"></div>
                                <i class="material-icons">save</i>
                                <span>บันทึกข้อมูล</span>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                              <i class="material-icons">clear</i>
                              <span>ปิด</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Size -->
            
            <!-- Default Size -->
            <div class="modal fade" id="defaultModaltask" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">แก้ไขรายการงานที่รับผิดชอบ</h4>
                        </div>
                        <div class="modal-body">
                          <div id="loaddatatask">

                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect" onClick="Javascript:updateTask('UPDATETASK');">
                                <i class="material-icons">save</i>
                                <span>บันทึกข้อมูล</span>
                            </button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                              <i class="material-icons">clear</i>
                              <span>ปิด</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- InstanceEndEditable -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

	<!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/index.js"></script>
    <script src="js/pages/ui/modals.js"></script>
	<script src="js/pages/forms/basic-form-elements.js"></script>
    <script src="js/pages/ui/dialogs.js"></script>
    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

<!-- InstanceEnd --></html>
