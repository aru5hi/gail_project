<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script language="JavaScript" src="new.js"></script>

<html>
<head>
	<style>
.new{
background: #000080;
margin:10px 10px;
color:white;

}
td
{
  width:300px;
text-align:left;
}
span{
color:red;
}
input{
width:100%;
}
</style>
</head>
<body>
<h4 class="new" align="center"> New Request </h4> 
<form action="new.php" method="get">
<table align="center" cellpadding=2px>

<tr>

<td> Vender Code <span >*</span></td>
<td> <input required type="textbox" id="vcode" name="V_code"></td>

</tr>

<tr>
<td>Vender Name 
<td class="kk" id='k'>
</tr>

<tr>
<td>Business Area<span >*</span>
<td><select name="business_area"><option id= "barea" ></option>
</select>
</tr>

<tr>
<td>Request Type<span>*</span>
<td><select required>
<option>Create alternate payee account</option>
</select>
</tr>

<tr>
<td>Alternate Vender Code <span>* </span>
<td><input required id="AV_code" type="text" name="a_name"><td id="AV_name"></td>
</tr>

<tr>
<td>Reason<span>*</span>
<td><textarea required name="reason" rows=2 cols=50></textarea>
</tr>

<tr>
<td> Bank Name <span>* </span>
<td><select required name="bank_name"><option id="bn" ></option>
</select>
</tr>

<tr>
<td>IFSC Code(For RTGS)<span>*</span>
<td><input type="text" id="ifsc" name="ifsc_code">
</tr>

<tr>
<td>NEFT Code<span>*</span>
<td><input type="text" id="neft" name="neft_code">
</tr>

<tr>
<td>Bank Address<span>*</span>
<td><textarea required  rows=4 cols=50 name="bank_addr"></textarea>
</tr>

<tr>
<td>Account Type<span>*</span>
<td><select name="acc_type">
<option id="at" ></option>

</select>
</tr>

<tr>
<td> Account No.<span>* </span>
<td><input required name="acc_no" type="text" id="ac_no">
</tr>


<tr>
<td>Repeat Account No.<span>* </span>
<td><input required name="re_acc_no" type="text"> <span id="aler">  
</span>
</tr>

<tr>
<td>E-Mail Id
<td><input required name="email" type="text">
</tr>

<tr>
<td>Upload Cancelled Cheque<span>*</span>
<td><input required name="can_cheque" type="file">
</tr>

<tr>
<td>Upload Letter From Vendor<span>* </span>
<td><input required name="letter" type="file">
</tr>

<tr>
<td>Site/CO F&A<span>*</span>
<td><select required name="site_co" style="width:100%;"><option id="emp"></option>
</tr>

<tr>
<td>
<td>All the information provided above are correct and I consciously decided to credit my salary in above account
</tr>
</table>
<br>
<button style="margin-left:600px">Submit</button>
</form>
</body>
</html>