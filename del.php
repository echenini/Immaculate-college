<?php
//heading
include("adminhome.php");
?>

<?php require_once('config.php'); ?>

<?php
$num = "";
$num1 = "";
$query2 = "";
@mysql_select_db($database, $New_Conn);

if(isset($_POST['Submit'])){
$regno = $_POST['regno'];

$query = "DELETE FROM tblstudent WHERE regno = '$regno' ";
$result = mysql_query($query);
$num=@mysql_numrows($result);

$query2 = "SELECT * FROM tblstudent";
$result2 = mysql_query($query2);
$num1=@mysql_numrows($result2);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete</title>
<style type="text/css">
<!--
body {
	background-color: #FFFF99;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #3300FF;
}
body {
	background-color: #dfe2e7;
	}
	 .flow-con {
      display: flex;
       width:97%;
      flex-wrap: wrap;
      justify-content: space-around;
      align-content: center;
 background-color: #cbd0d8;  
            height: auto;
            box-shadow: 3px 3px 2px gray; 
            border-radius: 10px;
            margin-top: 1.5vh;
            padding-left: 2px;
			font-family:"Courier New", Courier, monospace;
			font-size:larger;
			font-weight:bolder;
			border: px solid #000000;
     }
</style>
</head>

<body><div class="flow-con">
<div align="center" class="style1">Delete Record </div>
<form id="form1" name="form1" method="post" action="">
  <label></label>
  <div align="center">
    <label>
    <input name="regno" type="text" id="regno" />
    </label>
    <label>
    <input type="submit" name="Submit" value="Delete" />
    </label>
    <table width="1000">
      <tr>
        <td width="143"><div align="center"><strong>Reg No</strong></div></td>
        <td width="200"><div align="center"><strong>Name of Student </strong></div></td>
        <td width="100"><div align="center"><strong>Gender</strong></div></td>
        <td width="142"><div align="center"><strong>Department</strong></div></td>
        <td width="50"><div align="center"><strong>Age</strong></div></td>
        <td width="143"><div align="center"><strong>Date Admitted </strong></div></td>
        <td width="143"><div align="center"><strong>Fee</strong></div></td>
        <td width="143"><div align="center"><strong>Paid</strong></div></td>
        <td width="143"><div align="center"><strong>Balance</strong></div></td>
      </tr>
	  	<?php
	
$i = 0;
while($i < $num1){
$regno = mysql_result($result2, $i, "regno");
$name = mysql_result($result2, $i, "name");
$sex = mysql_result($result2, $i, "sex");
$dept = mysql_result($result2, $i, "dept");
$age = mysql_result($result2, $i, "age");
$date = mysql_result($result2, $i, "dateadmitted");
$fee = mysql_result($result2, $i, "fee");
$paid = mysql_result($result2, $i, "paid");
$bal = mysql_result($result2, $i, "bal");


	?>

      <tr>
       <td><div align="center"><strong><span class="style5"><?php echo $regno; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $name; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $sex; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $dept; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $age; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $date; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $fee; ?></span></strong></div></td>
	   <td><div align="center"><strong><span class="style5"><?php echo $paid; ?></span></strong></div></td>
      <td><div align="center"><strong><span class="style5"><?php echo $bal; ?></span></strong></div></td>
      </tr>
	  <?php
	  $i++;
	  }
	  ?>
    </table>
  </div>
</form>
</body>
</html>
