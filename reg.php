<?php
//heading
include("adminhome.php");
?>
<?php require_once('config.php'); ?>
<?php

//Capturing form entries
if(isset($_POST['Submit'])){
$regno = $_POST['regno'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$dept = $_POST['dept'];
$age = $_POST['age'];
$date = $_POST['date'];
$fee = $_POST['fee'];
$MM_redirectSuccess = "reg.php";

//Selecting Database
@mysql_select_db($database, $New_Conn);

//Inserting into table in Database
$login_query = "INSERT into tblstudent (regno, name, sex, dept, age, dateadmitted, fee, paid, bal )
values ('$regno', '$name', '$sex', '$dept', '$age', '$date', '$fee', 0, $fee)";
@mysql_query($login_query, $New_Conn) or die("unable to connect to database");

   		header("location: " . $MM_redirectSuccess);
}		
?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
<style>
 body {
       background-color: #dbdcdd;
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
	  font-family:"Courier New", Courier, monospace;
      font-size: xx-large;
      text-align: center;
    }
    a {
      color:#000000;
    }
	td {
	font-family:"Courier New", Courier, monospace;
	}
</style>
</head>

<body>
<div class="log">

    <div class="register-right">
	
      <h2 class="how" style="color:#18171d">students's register form</h2>
      <div class="register-form">
	  
        <form id="form1" name="form1" method="post" action="">
		
          <div class="">
            
          <table width="400" align="center">
    <tr>
      <td width="190">Regno</td>
      <td width="198"><input name="regno" type="text" id="regno" placeholder="Enter your regno" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input name="name" type="text" id="name" placeholder="Enter your name" /></td>
    </tr>
    <tr>
      <td>Sex</td>
      <td><label>
        <select name="sex" id="sex">
          <option>Male</option>
          <option>Female</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Class</td>
      <td><select name="dept" id="dept">
        <option>J.S 1</option>
        <option>J.S 2</option>
        <option>J.S 3</option>
        <option>S.S 1</option>
        <option>S.S 2</option>
        <option>S.S 3</option>
                  </select></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" id="age" placeholder="Enter your age" /></td>
    </tr>
    <tr>
      <td>Date Admitted </td>
      <td><input name="date" type="text" id="date" placeholder="YYYY-MM-DD" /></td>
    </tr>
    <tr>
      <td>Fee</td>
      <td><input name="fee" type="text" id="fee" />
      <label></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td> <input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
          <!--
        </form>
      </div>
    </div>
  </div>
<form id="form1" name="form1" method="post" action="">
  <table width="400" align="center">
    <tr>
      <td width="190">Regno</td>
      <td width="198"><input name="regno" type="text" id="regno" placeholder="Enter your regno" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input name="name" type="text" id="name" placeholder="Enter your name" /></td>
    </tr>
    <tr>
      <td>Sex</td>
      <td><label>
        <select name="sex" id="sex">
          <option>Male</option>
          <option>Female</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Class</td>
      <td><select name="dept" id="dept">
        <option>J.S 1</option>
        <option>J.S 2</option>
        <option>J.S 3</option>
        <option>S.S 1</option>
        <option>S.S 2</option>
        <option>S.S 3</option>
                  </select></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input name="age" type="text" id="age" placeholder="Enter your age" /></td>
    </tr>
    <tr>
      <td>Date Admitted </td>
      <td><input name="date" type="text" id="date" placeholder="YYYY-MM-DD" /></td>
    </tr>
    <tr>
      <td>Fee</td>
      <td><input name="fee" type="text" id="fee" />
      <label></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>!-->
</body>
</html>
