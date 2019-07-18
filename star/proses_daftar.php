<?php 

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
		mysqli_query($this->con,"INSERT into daftar values('','$nama','$alamat','$email' , '$password', '$usia')");
		

		$date= date('His');
	if(isset($_POST['save'])){
	$cek  = mysqli_query($this->con,"select * from daftar where nama = '".$_POST['nama']."' ");

	if(mysqli_num_rows($cek)>0){
	    ?>
	    
	       <script type="text/javascript">
	   	       alert('Username yang diinputkan telah terdaftar Sebelumnya...!!!');
	   	       window.location='daftar.php';
	        </script>
	<?php 		
	}else{
		$ins=mysqli_query("INSERT INTO `daftar`(`id_user`, `nama`, `usia`, `alamat`, `email`, `password`) values ('$_POST[nama]','$_POST[alamat]','$_POST[email]','$_POST[password]','$_POST[usia]')");
 		if($ins){
	 			?>
	 	<script type="text/javascript">
	   			alert('Creat Account Berhasil...!!!');
	   			window.location='index.php';
			 </script>
			<?php 				
		}else{
		     ?>
		     <script type="text/javascript">
		     	alert('Gagal Input Data...!!!');
		     	window.location='daftar.php';
		     </script>
		     <?php
		}
	}
}
}
}
$database = new database();
$database -> input($_POST['nama'],$_POST['alamat'],$_POST['email'],$_POST['password'],$_POST['usia']);


?>
