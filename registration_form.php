
<html>
<head>
<title  >registration_form</title>
<style>
.color{
color:#FF0000; 
}
h3{
color:blue;
}
table{
font-size:18px;
font-family:calibri;
background-color:grey;
color:white;
border:solid; 	
}
#submit
{
color:green;
}
#reset
{
color:red;
}
</style>
</head>
<script src="registration_form_validations.js"></script>
<body>
<form action="file:///I|/test.html" method="post">
<table align="center" width=45% >
<tr>
<td width=15%></td>
<td width=15%><h3>Registration Page<h3></td>
<td width=15%></td></tr></table>

<table  align="center" width=45% >
<tr>
<td width=15%>*USERNAME</td>
<td width=15%><input type="text" name="unm" id="unm" onKeyUp="clr(unmerr)" ></td>
<td width=15% id="unmerr" class="color"></td>
</tr>
<tr>
<td width=15%>*PASSWORD</td>
<td width=15%><input type="password" name="upass" id="upass" onKeyUp="chkpass() && clr(upaserr)"  ></td>
<td width=15% id="upasserr" class="color"></td>
</tr>
<tr>
<td width=15%>*RE-ENTER PASSWORD</td>
<td width=15%><input type="password" name="rpass" id="rpass" onKeyUp="clr(rpasserr)"></td>
<td width=15% id="rpasserr" class="color"></td>
</tr>
<td width=15%>*FIRST NAME</td>
<td width=15%><input type="text" name="fname" id="fname" onKeyUp="clr(fnameerr)" ></td>
<td width=15% id="fnameerr" class="color"></td>
</tr>
<td width=15%>*LAST NAME</td>
<td width=15%><input type="text" name="lname" id="lname" onKeyUp="clr(lnameerr)" ></td>
<td width=15% id="lnameerr" class="color"></td>
</tr>
<td>*GENDER</td>
<td>Male<input type="radio" name="gen" id="g1" onClick="clr(generr)">Female<input type="radio" name="gen" id="g2"  onClick="clr(generr)"></td>
<td id="generr" class="color"></td>
<tr>
<td> HOBBIES</td>
<td>Cricket<input type="checkbox" id="hbid" onclick="clr(hberr)">music<input type="checkbox" id="hbid" onClick="clr(hberr)">Dance<input type="checkbox"  id="hbid" onclick="clr(hberr)"></td>
<td id="hberr" ></td>
</tr>
<tr>
<tr>
<td>*CONTACT NUMBER</td>
<td> <input type="number" name="cont" id="cont" onKeyUp="clr(conterr)"></td>
<td id="conterr" class="color"> </td>
</tr>
<tr>
<td>*ADDRESS</td>
<td> <input type="text" name="address" id="address" onKeyUp="clr(addresserr)"></td>
<td id="addresserr" class="color"> </td>
</tr>
<tr>
<td>*DATE OF BIRTH</td>
<td> <input type="date" name="dob" id="dob" onKeyUp="clr(doberr)"></td>
<td id="doberr" class="color"> </td>
</tr>
<td>*EMAIL</td>
<td><input type="email" name="email" id="email" onKeyUp="clr(emailerr)"></td>
<td id="emailerr" class="color"></td>
</tr>

<tr>
<td>*COUNTRY</td>
<td><input type="text" name="country" id="country" onKeyUp="clr(countryerr)"></td>
<td id="countryerr" class="color"></td>
</tr>
<tr>
<td>*STATE</td>
<td> <input type="text" name="state" id="state" onKeyUp="clr(stateerr)"></td>
<td id="stateerr" class="color"> </td>
</tr>
<tr>
<td>*CITY</td>
<td>
<select id="city" >
<option>--select--</option>
<option>Indore</option>
<option>Ujjain</option>
<option>Bhopal</option>
</select>
<td id="cityerr" class="color"  onClick="clr(cityerr)"></td>
</tr>
<tr>
<td colspan=2><input type="checkbox" id="chid" onClick="sub_enable()">I, Accept Terms And Conditions</td>
<td></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="submit" id="submit1" disabled="disabled" onClick="return validation()"></td>
<td><input type="reset" name="reset" value="reset" id="reset"></td>
<td></td>
</tr>
</table>
</form></body>
</html>


<?php
if($POST["submit"]=="save")
{
	$uname=$_POST["unm"];
	$pwd=$_POST["upass"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phone_no=$_POST["cont"];
	$address=$_POST["address"];
	$DOB=$_POST["dob"];
	$email=$_POST["email"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	
	mysqli_connect("localhost",root","");
	mysql_select_db("partearn");
	
	$s= "insert into client_details(username, password, first_name, last_name, phone_no, address, DOB, email, country, state, city) values( '".$uname."', '".$pwd."', '".$fname."', '".$lname."', '".$phone_no."', '".$address."', '".$DOB."', '".$email."', '".$country."', '".$state."','".$city."')";
	 
	 if(mysql_query($s))
		 echo"record saved";
	 else
		 echo"mysql_error";
	
}
?>