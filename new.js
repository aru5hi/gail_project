var v;
$(document).ready(function(){
 $("#vcode").change(function(){
 

	var str=$("#vcode").val();
 

  
      xmlhttp=new XMLHttpRequest();
  if(window.XMLHttpRequest){ 


  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    var obj=JSON.parse(xmlhttp.responseText);
    v=obj.vname;
    if(v==null){alert("The Vendor code doesn't exist. Please enter a valid Vendor code.");
     $("#vcode").html("");
     return;
  }
      $('.kk').html(obj.vname);
$('#barea').html(obj.barea);
       }}
  xmlhttp.open("GET","vend.php?q="+str,true);
  xmlhttp.send();
 }
});
});

$(document).ready(function(){
   $("#AV_code").blur(function(){
 

  var str=$("#AV_code").val();
 
  if (str==="") {
    $("#AV_code").html("bleh");
    return;
  } 

  
      
  if(window.XMLHttpRequest){ 
    xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
    var obj=JSON.parse(xmlhttp.responseText);
    if(obj.avn==null){alert("The Vendor code doesn't exist. Please enter a valid Vendor code."); 
    $('#AV_name').html("");
$('#ifsc').val("");
$('#neft').val("");
$('#bn').html(obj.b_name);
$('#ac_no').val(obj.a_no);
$('#emp').html(obj.site);
    
  }
      else if(obj.avn==v){alert("ENTER A DIFFERENT VENDOR CODE."); return;}
      else{
      $('#AV_name').html(obj.avn);
$('#ifsc').val(obj.ifsc);
$('#neft').val(obj.neft);
$('#bn').html(obj.b_name);
$('#at').val(obj.a_type);
$('#ac_no').val(obj.a_no);
$('#emp').html(obj.site);
    }}
  }}
  xmlhttp.open("GET","alt_vend.php?acode="+str,true);
  xmlhttp.send();
 }
);
 });