function color()
{
	
}
function clr(obj)
{
obj.innerHTML="";	
}
function chkpass()
{
	 upass=document.getElementById("upass").value;	
	if(upass.length<4)
	{
	document.getElementById("upasserr").innerHTML="weak password";
	}
	else if(upass.length>=4 && upass.length<7)
	{
	document.getElementById("upasserr").innerHTML="strong password";
	}	
	else
	{
	document.getElementById("upasserr").innerHTML="very strong password";	
	}
}

function sub_enable()
{
	chid = document.getElementById("chid").checked;
	if(chid==true)
	{
	document.getElementById("submit1").disabled=false;
	}
	else
	{
	document.getElementById("submit1").disabled=true;	
	}
}

function validation()
{
	 var unm= document.getElementById("unm").value;
	if(unm == "")
	{
	document.getElementById("unmerr").innerHTML="pls enter name";	
	return false;
	}
	var upass= document.getElementById("upass").value;
	if(upass.length == 0)
	{
	document.getElementById("upasserr").innerHTML="pls enter password";
	return false;
	}
	var rpass=document.getElementById("rpass").value;
	if(upass!=rpass)
	{
	document.getElementById("rpasserr").innerHTML="password not matched";
	return false;
	}
	
	var g1=document.getElementById("g1").checked;
	var g2=document.getElementById("g2").checked;
	if(g1==false && g2==false)
	{
	document.getElementById("generr").innerHTML="pls select a gender";	
	return false;
	}
	var email=document.getElementById("email").value;
	if(email=="")
	{
	document.getElementById("emailerr").innerHTML="pls enter email";
	return false;
	}
	var cont=document.getElementById("cont").value;
	if(cont=="")
	{
	document.getElementById("conterr").innerHTML="pls enter contact number";
	return false;
	}
	var city=document.getElementById("city").value;
	if(city==null)
	{
	document.getElementById("cityerr").innerHTML="pls select your city";
	return false;
	}
	var hbid=document.getElementById("hbid").checked;
	if(hbid==false)
	{
	document.getElementById("hberr").innerHTML="pls select a hobby";
	return false
	;
}}