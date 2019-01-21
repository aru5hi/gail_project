<?php
/*
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
$s=mysqli_select_db($conn,'test');

if(!$conn)
{
die("failed".mysqli_error());
}
$q = $_GET['q'];
$sql="SELECT VENDOR_NAME 
      FROM vendor_master
      WHERE VENDOR_CODE= '$q' ;";
$sql1="SELECT BUSINESS_AREA
        from vendor_account_req_info
        where VENDOR_CODE= '$q';";
$check=mysqli_query($conn,$sql);
if(!$check){
	die(mysqli_error($conn)."failed");
}
$x=mysqli_fetch_assoc($check);
$check1=mysqli_query($conn,$sql1);
if(!$check1){
	die(mysqli_error($conn)."failed");
}
$y=mysqli_fetch_assoc($check1);*/
//using dummy values
$dummy['VENDOR_NAME']="Vedansh Enterprise";
$dummy['BUSINESS_AREA']="NOIDA";
$myobj = array('vname'=> $dummy['VENDOR_NAME'] , 'barea'=> $dummy['BUSINESS_AREA']);

$myobj=json_encode($myobj);

echo $myobj;

?>