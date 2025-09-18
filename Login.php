<?php
//heading
include("heading.php");
?>
<?php require_once('config.php'); ?>
<?php
session_start();

/*if(isset($_SESSION["loggedin"] && $_SESSION["loggedin"]=== true){
	header("location: welcome.php");
		exit;
}*/
$loginFormAction = $_SERVER['PHP_SELF'];
if(isset($_GET['accesscheck'])){
$_SESSION['prevUrl'] = $_GET['accesscheck'];
}
if(isset($_POST['username'])){
$loginUsername = $_POST['username'];
$password = $_POST['password'];
$MM_redirectloginSuccess = "welcome.php";
$MM_redirectloginFailed = "fail.php";

@mysql_select_db($database, $New_Conn);

$login_query = sprintf("SELECT username, password FROM tbluser WHERE username = '%s' AND password = '%s' ",
get_magic_quotes_gpc() ? $loginUsername  : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password));
$login = @mysql_query($login_query, $New_Conn) or die(mysql_error());
 
$LoginFoundUser = mysql_num_rows($login);

//checks for user
   if($LoginFoundUser){
   $LoginStrGroup = "";
   
   $_SESSION['MM_Username'] =$LoginUsername;
   $_SESSION['MM_UserGroup'] =$LoginStrGroup;
   
   if(isset($_SESSION['prevUrl']) && false){
   $MM_redirectloginSuccess = $_SESSION['prevUrl'];
   }
   		header("location: " . $MM_redirectloginSuccess);
		}else{
		header("location: " . $MM_redirectloginFailed);
		}
}		
?> 				