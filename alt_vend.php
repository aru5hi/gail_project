<?php

$q = $_GET['acode'];
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


$sql1="SELECT VENDOR_NAME
       FROM vendor_master
       where vendor_code='$q'; ";
$check1=mysqli_query($conn,$sql1);
$x=mysqli_fetch_assoc($check1);
$sql2="SELECT *
       FROM vendor_account_req_info
       WHERE vendor_code='$q';";
$check2=mysqli_query($conn,$sql2);
$y=mysqli_fetch_assoc($check2);
$e=$y['SITE_CO_EMP_NO'] ;
$sql3="SELECT *
       FROM emp_master
       where emp_no ='$e'; ";
$check3=mysqli_query($conn,$sql3);
$z=mysqli_fetch_assoc($check3);*/


//using dummy values
$dummy['BANK_NAME']="ICICI Bank";
$dummy['VENDOR_AREA']="Mumbai";
$dummy['IFSC_CODE']='9258';
$dummy['NEFT_CODE']="1234";
$dummy['ACCOUNT_TYPE']="savings";
$dummy['ACCOUNT_NO']="2006739574325";
$dummy['emp_name']="Vishal Gaur";
$dummy['VENDOR_NAME']='Gaur Business';
$object = array('avn'=> $dummy['VENDOR_NAME'] , 'ifsc'=> $dummy['IFSC_CODE'] , 'neft'=>$dummy['NEFT_CODE'] , 'b_name'=>$dummy['BANK_NAME'] ,
	'a_type'=>$dummy['ACCOUNT_TYPE'], 'a_no'=>$dummy['ACCOUNT_NO'] , 'site'=>$dummy['emp_name']);
$object = json_encode($object);
echo $object; 
?>