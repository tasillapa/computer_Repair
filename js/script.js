function xmlhttp()
{
    var request = false;
    try {
		//alert('1');
        request = new ActiveXObject('Msxml2.XMLHTTP');
    }
    catch (err2) {
        try {
			//alert('2');
            request = new ActiveXObject('Microsoft.XMLHTTP');
        }
        catch (err3) {
            try {
				//alert('3');
                request = new XMLHttpRequest();
            }
            catch (err1)
            {
				//alert('4');
                request = false;
            }
        }
    }
    return request;
}

// chklogin //
function func_chklogin(mode){

  var HttPRequest = this.xmlhttp();
  var para = "mode="+mode+
  "&group="+ document.getElementById("groupdepart").value +
  "&username="+ document.getElementById("username").value +
  "&passwords="+ document.getElementById("passwords").value;
 //alert(para);
  HttPRequest.open('POST','inc/action-login.php',true);
  HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  HttPRequest.setRequestHeader("Content-length", para.length);
  HttPRequest.setRequestHeader("Connection", "close");
  HttPRequest.send(para);

  HttPRequest.onreadystatechange = function()
  {
      if(HttPRequest.readyState == 3)  // Loading Request
      {
          document.getElementById("chkststus").innerHTML = "Now Loading...";
      }
      if(HttPRequest.readyState == 4) // Return Request
      {
        if(HttPRequest.responseText=='ok'){
		alert(HttPRequest.responseText);
          window.location.href='dashboard.php';
        }else if(HttPRequest.responseText=='no'){
          window.location.href='index.php';
        }else if(HttPRequest.responseText=='empty'){
          window.location.href='index.php';
        }
      }
  }
}
// add zone //
function func_addfix(mode){
  var HttPRequest = this.xmlhttp();
  var chkBoxArray = [];
	$('.filled-in:checked').each(function() {
            chkBoxArray.push($(this).val());
        });
  var para = "mode="+mode+
  "&chkBoxArray="+chkBoxArray+
  "&fixid="+ document.getElementById("fixid").value +
  "&fixnumber="+ document.getElementById("fixnumber").value +
  "&fixname="+ document.getElementById("fixname").value +
  "&fixgroup="+ document.getElementById("fixgroup").value +
  "&fixcomment="+ document.getElementById("fixcomment").value +
  "&fixidenti="+ document.getElementById("fixidenti").value;
  //alert(para);
  HttPRequest.open('POST','inc/action-add.php',true);
  HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  HttPRequest.setRequestHeader("Content-length", para.length);
  HttPRequest.setRequestHeader("Connection", "close");
  HttPRequest.send(para);

  HttPRequest.onreadystatechange = function()
  {
      if(HttPRequest.readyState == 3)  // Loading Request
      {
        swal({
          title: "สถานะการบันทันทึกข้อมูล!",
          text: "กำลังบันทึกข้อมูลกรุณารอสักครู่คะ.",
          timer: 2000,
          showConfirmButton: false
        });
      }

      if(HttPRequest.readyState == 4) // Return Request
      {
        if(HttPRequest.responseText=='ok'){
            swal({
      				title: "สถานะการบันทันทึกข้อมูล!",
      				text: "บันทึกข้อมูลเรียบร้อยคะ.",
      				timer: 5000,
      				showConfirmButton: false
      			});
      			setTimeout(function(){window.location = 'requestfix.php';}, 2000);
        }
        if(HttPRequest.responseText=='no'){
            swal({
      				title: "สถานะการบันทันทึกข้อมูล!",
      				text: "ไม่สามารถบันทึกข้อมูลได้คะ.",
      				timer: 5000,
      				showConfirmButton: false
      			});
      			setTimeout(function(){window.location = 'requestfix.php';}, 2000);
        }
        if(HttPRequest.responseText=='empty'){
            swal({
      				title: "สถานะการบันทันทึกข้อมูล!",
      				text: "กรอกข้อมูลให้ครบคะ.",
      				timer: 5000,
      				showConfirmButton: false
      			});
        }
      }
  }
}

function addTask(mode){
  var HttPRequest = this.xmlhttp();
  var para = "mode="+mode+
  "&nametask="+ document.getElementById("nametask").value +
  "&namemanage="+ document.getElementById("namemanage").value +
  "&taskstatus="+ document.getElementById("taskstatus").value +
  "&taskprogress="+ document.getElementById("taskprogress").value;
  //alert(para);
  HttPRequest.open('POST','inc/action-add.php',true);
  HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  HttPRequest.setRequestHeader("Content-length", para.length);
  HttPRequest.setRequestHeader("Connection", "close");
  HttPRequest.send(para);

  HttPRequest.onreadystatechange = function()
  {
      if(HttPRequest.readyState == 3)  // Loading Request
      {
        swal({
          title: "สถานะการบันทันทึกข้อมูล!",
          text: "กำลังบันทึกข้อมูลกรุณารอสักครู่คะ.",
          timer: 2000,
          showConfirmButton: false
        });
      }

      if(HttPRequest.readyState == 4) // Return Request
      {
        if(HttPRequest.responseText=='ok'){
            swal({
      				title: "สถานะการบันทันทึกข้อมูล!",
      				text: "บันทึกข้อมูลเรียบร้อยคะ.",
      				timer: 5000,
      				showConfirmButton: false
      			});
      			setTimeout(function(){window.location = 'dashboard.php';}, 2000);
        }
        if(HttPRequest.responseText=='no'){
            swal({
      				title: "สถานะการบันทันทึกข้อมูล!",
      				text: "ไม่สามารถบันทึกข้อมูลได้คะ.",
      				timer: 5000,
      				showConfirmButton: false
      			});
      			setTimeout(function(){window.location = 'dashboard.php';}, 2000);
        }
        if(HttPRequest.responseText=='empty'){
            swal({
      				title: "สถานะการบันทันทึกข้อมูล!",
      				text: "กรอกข้อมูลให้ครบคะ.",
      				timer: 5000,
      				showConfirmButton: false
      			});
        }
      }
  }
}
// update zone //
function func_updatecase(mode){
  var HttPRequest = this.xmlhttp();
  var para = "mode="+mode+
  "&fixid="+ document.getElementById("fixid").value +
  "&fixque="+ document.getElementById("fixque").value +
  "&fixclass="+ document.getElementById("fixclass").value +
  "&fixstatus="+ document.getElementById("fixstatus").value +
  "&fixrecomment="+ document.getElementById("fixrecomment").value;
  //alert(para);
  HttPRequest.open('POST','inc/action-update.php',true);
  HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  HttPRequest.setRequestHeader("Content-length", para.length);
  HttPRequest.setRequestHeader("Connection", "close");
  HttPRequest.send(para);

  HttPRequest.onreadystatechange = function()
  {
      if(HttPRequest.readyState == 4) // Return Request
      {
		  if(HttPRequest.responseText=='ok'){
			  swal({
				title: "สถานะการบันทันทึกข้อมูล!",
				text: "บันทึกข้อมูลเรียบร้อยคะ.",
				timer: 3000,
				showConfirmButton: false
			});
			setTimeout(function(){window.location = 'requestfixadmin.php';}, 2000);
        }else if(HttPRequest.responseText=='no'){
          swal({
				title: "สถานะการบันทันทึกข้อมูล!",
				text: "ไม่สามารถบันทึกข้อมูลได้คะ.",
				timer: 3000,
				showConfirmButton: false
			});
        }else if(HttPRequest.responseText=='empty'){
          swal({
				title: "สถานะการบันทันทึกข้อมูล!",
				text: "กรอกข้อมูลให้ครบด้วยคะ.",
				timer: 3000,
				showConfirmButton: false
			});
        }
      }
  }
}


function updateTask(mode){
  var HttPRequest = this.xmlhttp();
  var para = "mode="+mode+
  "&taskid="+ document.getElementById("taskidH").value +
  "&nametask="+ document.getElementById("nametasks").value +
  "&namemanage="+ document.getElementById("namemanages").value +
  "&taskstatus="+ document.getElementById("taskstatuss").value +
  "&taskprogress="+ document.getElementById("taskprogresss").value;
  //alert(para);
  HttPRequest.open('POST','inc/action-update.php',true);
  HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  HttPRequest.setRequestHeader("Content-length", para.length);
  HttPRequest.setRequestHeader("Connection", "close");
  HttPRequest.send(para);

  HttPRequest.onreadystatechange = function()
  {
      if(HttPRequest.readyState == 3)  // Loading Request
      {
        swal({
          title: "สถานะการบันทันทึกข้อมูล!",
          text: "กำลังบันทึกข้อมูลกรุณารอสักครู่คะ.",
          timer: 2000,
          showConfirmButton: false
        });
      }

      if(HttPRequest.readyState == 4) // Return Request
      {
        if(HttPRequest.responseText=='ok'){
            swal({
              title: "สถานะการบันทันทึกข้อมูล!",
              text: "บันทึกข้อมูลเรียบร้อยคะ.",
              timer: 5000,
              showConfirmButton: false
            });
            setTimeout(function(){window.location = 'dashboard.php';}, 2000);
        }
        if(HttPRequest.responseText=='no'){
            swal({
              title: "สถานะการบันทันทึกข้อมูล!",
              text: "ไม่สามารถบันทึกข้อมูลได้คะ.",
              timer: 5000,
              showConfirmButton: false
            });
            setTimeout(function(){window.location = 'dashboard.php';}, 2000);
        }
        if(HttPRequest.responseText=='empty'){
            swal({
              title: "สถานะการบันทันทึกข้อมูล!",
              text: "กรอกข้อมูลให้ครบคะ.",
              timer: 5000,
              showConfirmButton: false
            });
        }
      }
  }
}

function func_updatefix(mode){

}
// detele zone //
function func_deletefix(mode){

}
// loaddata zone //
function func_loaddataforupdate(mode,fixid){
	var HttPRequest = this.xmlhttp();
	var para = "mode="+mode+
	"&fixid="+ fixid;
    HttPRequest.open('POST','load/loaddataforupdate.php',true);
    HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	HttPRequest.setRequestHeader("Content-length", para.length);
  	HttPRequest.setRequestHeader("Connection", "close");
  	HttPRequest.send(para);

    HttPRequest.onreadystatechange = function()
    {
        if(HttPRequest.readyState == 3)  // Loading Request
        {
            document.getElementById("loaddataforupdate").innerHTML = " Loading...";
        }

        if(HttPRequest.readyState == 4) // Return Request
        {
            document.getElementById("loaddataforupdate").innerHTML = HttPRequest.responseText;
        }
    }
}

function func_loaddatadetail(mode,fixdetail){
  var HttPRequest = this.xmlhttp();
	var para = "mode="+mode+
	"&fixid="+ fixdetail;
    HttPRequest.open('POST','load/loaddatadetail.php',true);
    HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	HttPRequest.setRequestHeader("Content-length", para.length);
  	HttPRequest.setRequestHeader("Connection", "close");
  	HttPRequest.send(para);

    HttPRequest.onreadystatechange = function()
    {
        if(HttPRequest.readyState == 3)  // Loading Request
        {
            document.getElementById("loaddatadetail").innerHTML = " Loading...";
        }

        if(HttPRequest.readyState == 4) // Return Request
        {
            document.getElementById("loaddatadetail").innerHTML = HttPRequest.responseText;
        }
    }
}
function func_loaddatatask(mode,taskid){
  var HttPRequest = this.xmlhttp();
	var para = "mode="+mode+
	"&taskid="+ taskid;
    HttPRequest.open('POST','load/loaddatatask.php',true);
    HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  	HttPRequest.setRequestHeader("Content-length", para.length);
  	HttPRequest.setRequestHeader("Connection", "close");
  	HttPRequest.send(para);

    HttPRequest.onreadystatechange = function()
    {
        if(HttPRequest.readyState == 3)  // Loading Request
        {
            document.getElementById("loaddatatask").innerHTML = " Loading...";
        }

        if(HttPRequest.readyState == 4) // Return Request
        {
            document.getElementById("loaddatatask").innerHTML = HttPRequest.responseText;
        }
    }
}
