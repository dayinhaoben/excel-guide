<?php
	
	class MysqlHelper {
		private $conn;
		private $host="localhost";
		private $user="root";
		private $password ="root";
		private $db ="excelguide";

		function MysqlHelper() {
			$this->conn=mysql_connect($this->host, $this->user, $this->password);
			if (!$this->conn) {
				die("Database connect wrong!".mysql_error());
			}
			mysql_select_db($this->db);
			mysql_query("set names utf8");
		}

		function execute_dql($sql) {
			$res=mysql_query($sql,$this->conn);
			return $res;
		}


		function execute_dml($sql) {
			$b_res=mysql_query($sql,$this->conn);

			if(!$b_res) {
				return 0; //wrong
			} else {
				if(mysql_affected_rows($this->conn)>0) {
					return 1; //success
				}else {
					return 2;//no effection
				}
			}
		}
	}

	
?>
