<?php
?>
<!DOCTYPE.html>

<html>
	<head>
	<title> Form Attribute </title>
	<meta charset= "utf-8">
	</head>
	
<body>

<form name="Employmnet"  action="send.php" method="post">
<table align ="Center" width="75%" border="2" cellspacing="2" cellpadding="2">
	<tr>
		<td>Employmnet Application</td>
		<td></td>
	</tr>
	
	<tr>
		<td>First name</td>
		<td><input type="Text" name="fname" maxlength="50" /></td>
	</tr>
	
	<tr>
		<td>Last name</td>
		<td><input type ="Text" name="lname" maxlength="50"/></td>
	</tr>
	
	<tr>
		<td>Position </td>
		<td>
		<select name="Position">
			<option value="AC">Accountant</option>
			<option value="RE">Receptionist</option>
			<option value="AD">Administrator</option>
			<option value="SU">Supervisor</option>
		</select>
		
		</td>
	</tr>
	
	<tr>
		<td>Experience level</td>
		<td>
			<select name ="Experience">
				<option value="EL"  >Entry level</option>
				<option value="SE">Some Experience</option>
				<option value="VE">Very Experience</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>Job Type</td>
		<td>
		<input type="Checkbox" name="ft"/> Full-Time
		<input type ="Checkbox" name= "pt"/> Part-Time
		<input type= "Checkbox" name= "ct"/> Checkbox
		</td>
	</tr>
	
	<tr>
		<td>Employmnet Status </td>
		<td>
			<input type="radio" name="estatus" value="employmed"/> Employed
			<input type="radio" name="estatus" value="unemploymed"/>Un-Employed
			<input type="Radio" name="estatus" value="student"/> Student 
		</td>
	</tr>
	
	<tr>
		<td>Additional Comment </td>
		<td>
		<textarea name ="comments" cols="45" rows="5"></textarea>
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td>
		<input type="submit" name="submit" value="submit"/>
		<input type="reset" name ="reset" value="reset"/> 
		</td>
	</tr>

</table>
</form>




</body>
</html>