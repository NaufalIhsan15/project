<?php
class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "malasngoding";
	var $con;

	function __construct(){
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->con,$this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->con,"SELECT * from user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}
}
?>