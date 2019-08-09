<?php 
session_start();

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "rented_house";
	var $con;

	function __construct(){
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->con,$this->db);
	}
	function input($nama,$alamat,$email,$password,$usia){
		mysqli_query($this->con,"INSERT into daftar values('','$nama','$usia','$alamat','$email' , '$password')");
}
}
$database = new database();
$database -> input($_POST['nama'],$_POST['alamat'],$_POST['email'],$_POST['password'],$_POST['usia']);
header ("location:../index.php");
?>