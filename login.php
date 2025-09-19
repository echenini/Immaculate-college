<?php
//heading
include("heading.php");
?>
<?php require_once('config.php'); ?>

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
$MM_redirectloginSuccess = "welcome.html";
$MM_redirectloginFailed = "fail.html";

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login </title>
<style>
 body {
       background-color: #dfe2e7;
    }
    .log { 
  background-color: #dfe2e7;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
    }
    .register-right{
        justify-content: center;
      color:#18171d;
      background-color: #dfe2e7;
      border:0; 
      box-shadow: 5px 5px 5px 5px #888888;
      border-radius:20px;
      padding: 40px;
      max-width: 400px;
      margin: 100px;
      height: 70vh;
    }
   input[type="text"], input[type="password"] {
  width: 90%;
  padding: 10px;
  margin-top: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

    input[type="submit"] {
      background-color:#2664a1; 
      border:solid #345ca5;
      border-radius: 20px;
      color: white;
      padding: 10px 20px;
      cursor: pointer;
    }
    label {
      color:#18171d;
      font-family: 'Courier New', Courier, monospace;
    }
    .how {
      text-transform: uppercase;
      text-decoration:underline;
      font-size: xx-large;
      text-align: center;
    }
    a {
      color:#000000;
    }
</style>
</head>
<body>
 <div class="log">
    <div class="register-right">
      <h2 class="how" style="color:#18171d">Login</h2>
      <div class="register-form">
        <form id="form1" name="form1" method="post" action="">
          <div class="">
            <input name="username" type="text" id="username" placeholder="Enter your Username" required />
            <label>USERNAME</label>
          </div>
          <div class="">
           <input name="password" type="password"  id="password" placeholder="Enter your Password" required />
            <label>PASSWORD</label>
          </div>
          <input type="submit" value="Login" />
        </form>
        <p class="lin">Don't have an Account? <a href="signin.php">Create Account</a></p>
      </div>
    </div>
  </div>
</body>
</html>
