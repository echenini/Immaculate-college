<?php
//header
include("adminhome.php");
?>
<?php

if(isset($_POST['Submit'])){
$regno = $_POST['regno'];

$dt = "";
$tm = "";
$newfile = "";
$filename = "";

//$file = $_FILES['file']['name'];


$upload = './passport/';
$dt = date('dmy');
$tm = strftime('%H%M%S');
$newfile = $dt.$tm.$_FILES['file']['name'];
$filename = $upload.basename($_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $filename))
{
	$imgUrl = $upload . $newfile;
	$res = @rename($filename, $imgUrl);
	
	//Database Connection
	require_once('config.php');
	
	@mysql_select_db($database, $New_conn);
	
	
$upd = "UPDATE tblstudent SET pic = '$imgUrl' WHERE regno = '$regno'";
@mysql_query($upd) or die (mysql_error());
echo "Passport uploaded Successfully";
}
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body {
    background-color: #dbdcdd;
    font-family: 'Courier New', Courier, monospace;
}

.log {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.register-right {
    background-color: #dfe2e7;
    border: 0;
    box-shadow: 5px 5px 5px 5px #888888;
    border-radius: 20px;
    padding: 40px;
    max-width: 400px;
    margin: 10px;
}

.register-right h2 {
    text-align: center;
    color: #18171d;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 10px;
    color: #18171d;
}

.form-group input[type="file"],
.form-group input[type="text"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-group input[type="submit"] {
    background-color: #2664a1;
    border: solid #345ca5;
    border-radius: 20px;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    width: 100%;
}
</style>
</head>
<body>
    <div class="log">
        <div class="register-right">
            <h2>Upload Passport</h2>
            <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="form-group">
                    <label for="file">Select File:</label>
                    <input type="file" name="file" id="file" />
                </div>
                <div class="form-group">
                    <label for="regno">Registration Number:</label>
                    <input type="text" name="regno" id="regno" />
                </div>
                <div class="form-group">
                    <input type="submit" name="Submit" value="Upload" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>