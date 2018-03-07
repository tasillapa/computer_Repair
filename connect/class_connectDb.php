<?php
class management
{
		var $host = "localhost"; //ของผมใช้ localhost ครับ
		var $user = "root";//""; //username phpmyadmin
		var $pass = "1234";//""; //password phpmyadmin
		var $db = "dbo_eservice";//ชื่อฐานข้อมูล//smalldev_mat
		var $con;
		function con_db()
		{
			$this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->db)or die("Error : ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
			$charset = "SET character_set_results=UTF8";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$charset = "SET character_set_client='UTF8'";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$charset = "SET character_set_connection='UTF8'";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			/*$charset = "SET character_set_results=tis620";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$charset = "SET character_set_client='tis620'";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$charset = "SET character_set_connection='tis620'";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));*/
		}
	function close_db()
		{
			mysqli_close($this->con);
		}
	function getidaqc($fieldname,$tablename){
		$this->con_db();
		$sql="SELECT $fieldname
				  FROM $tablename
				  ORDER BY $fieldname DESC
				  LIMIT 0,1
				  ";
			$query=mysqli_query($this->con,$sql) or die("Can't read database");
			$num_rows = $this->get_countall($fieldname,$tablename);
			if($num_rows>=1) {
				$rsid = mysqli_fetch_array($query);
				$newid = ($rsid[0]*1) + 1;
			}else{
				$newid = '01';
			}
			return $newid;
	}
	function getid($fieldname,$tablename){
		$this->con_db();
		$sql="SELECT $fieldname
				  FROM $tablename
				  ORDER BY $fieldname DESC
				  LIMIT 0,1
				  ";
			$query=mysqli_query($this->con,$sql) or die("Can't read database");
			$num_rows = $this->get_countall($fieldname,$tablename);
			if($num_rows>=1) {
				$rsid = mysqli_fetch_array($query);
				$newid = date("dmyHms");
			}else{
				$newid = date("dmyHms");
			}
			return $newid;
	}
	function get_countall($field,$table)
		{
			$this->con_db();
			$count = $this->sql_cmd_select("select count(".$field.") as ttl from ".$table." order by ".$field."");
			return $count[0];
			$this->close_db();
		}

	// count send //
	function get_countsend($field,$fields,$table)
		{
			$this->con_db();
			$count = $this->sql_cmd_select("select count(".$field.") as ttl from ".$table."  where ".$field." <> '0000-00-00' and ".$fields." <> '0000-00-00'  and type_doc  not in('2') order by ".$field."");
			return $count[0];
			$this->close_db();
		}
	// count receive //
	function get_countreceive($field,$table)
		{
			$this->con_db();
			$count = $this->sql_cmd_select("select count(".$field.") as ttl from ".$table." where ".$field." ='0000-00-00'  and type_doc in('0','1') order by ".$field."");
			return $count[0];
			$this->close_db();
		}
	// count loop //
	function get_countloop($field,$table)
		{
			$this->con_db();
			$count = $this->sql_cmd_select("select count(".$field.") as ttl from ".$table." where ".$field."='2' order by ".$field."");
			return $count[0];
			$this->close_db();
		}
	// connect read //
	function get_countchat($field,$table,$idfrom,$idto)
		{
			$this->con_db();
			$sql="select count(`".$field."`) as ttl from ".$table." where from_user='".$idfrom."' and to_user='".$idto."' and `".$field."`='0' order by `".$field."`";
			$count = $this->sql_cmd_select($sql);
			return $count[0];
			$this->close_db();
		}
		// count massage all  //
	function get_countchatall($field,$table,$idto)
		{
			$this->con_db();
			$sql="select count(`".$field."`) as ttl from ".$table." where ".$field."='".$idto."' and `reads`='0' order by `".$field."`";
			$count = $this->sql_cmd_select($sql);
			return $count[0];
			$this->close_db();
		}
	// count user online //
	function get_countonline($field,$table)
		{
			$this->con_db();
			$count = $this->sql_cmd_select("select count(".$field.") as ttl from ".$table." where ".$field."='1' order by ".$field."");
			return $count[0];
			$this->close_db();
		}
	// count document group //
	function get_countdocument($field,$table,$fields,$idgroup)
		{
			$this->con_db();
			$sql="select count(".$field.") as ttl from ".$table." where ".$field."='".$idgroup."'
			 order by ".$field."";
			$count = $this->sql_cmd_select($sql);
			return $count[0];
			$this->close_db();
		}
	function get_budget($perid){
			$this->con_db();
			$sql = "select * from tb_acquisition as acq";
			$sql.= " left join tb_personal as per on per.per_id=acq.per_id";
			$sql.= " left join tb_finance as fin on fin.finance_id=per.finance_id";
			$sql.= " left join tb_branch as bra on bra.branch_id=fin.branch_id";
			$sql.= " left join tb_tmpbudget as tmp on tmp.acq_id=acq.`acquisition_id`";
			$sql.= " where per.finance_id = '".$perid."'";
			$query=mysqli_query($this->con,$sql) or die("Can't read database");
			$tmpbudget = 0;
			while($arr = mysqli_fetch_assoc($query)){
				$tmpbudget = $tmpbudget+$arr['price_total'];
			}
			return $tmpbudget;
		}
	function sql_cmd_select($sqlCmd)
		{
			//echo $sqlCmd;
			//exit();
			$charset = "SET character_set_results=UTF8";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$charset = "SET character_set_client='UTF8'";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$charset = "SET character_set_connection='UTF8'";
			mysqli_query($this->con,$charset) or die(mysqli_error($this->con));
			$result = mysqli_query($this->con,$sqlCmd) or die("Error : เกิดข้อผิดพลาด ไม่เจอข้อมูลที่ต้องการ");
			$rs = mysqli_fetch_array($result);
			return $rs;
		}
}
?>
