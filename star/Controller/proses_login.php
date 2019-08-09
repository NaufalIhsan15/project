<?php
session_start();

class DbCon{
 
    var $host = 'localhost';
    var $uname = 'root';
    var $pass = '';
    var $db = 'rented_house';
    var $con;
 
 
    function __construct(){
 
        if (!isset($this->con)) {
 
            $this->con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
 
            if (!$this->con) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->con;
    }
}
 
class User extends DbCon{
 
    function __construct(){
 
        parent::__construct();
    }
 
    function check_login($email, $password){
 
        $sql = "SELECT * FROM daftar WHERE email = '$email' AND password = '$password'";
        $query = $this->con->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id_user'];
        }
        else{
            return false;
        }
    }
 
    function details($sql){
 
        $query = $this->con->query($sql);
 
        $row = $query->fetch_array();
 
        return $row;       
    }
 
    function escape_string($value){
 
        return $this->con->real_escape_string($value);
    }
}
$user = new User();
 
if(isset($_POST['login'])){
	$username = $user->escape_string($_POST['email']);
	$password = $user->escape_string($_POST['password']);
 
	$auth = $user->check_login($email, $password);
 
	if(!$auth){
		$_SESSION['message'] = 'Invalid username or password';
    	header('location:../index.php');
	}
	else{
		$_SESSION['user'] = $auth;
		header('location:../View/login.php');
	}
}
else{
	$_SESSION['message'] = 'You need to login first';
	header('location:../index.php');
}

?>