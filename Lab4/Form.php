<?php
	
	$name1="";
	$err_name1="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conPass="";
	$err_conPass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$birthdate="";
	$err_birthdate="";
	$gender="";
	$err_gender="";
	$hear="";
	$err_hear="";
	$bio="";
	$err_bio=""; 
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		//username validation
		if(empty($_POST["uname"]))
		 {
			 $err_uname="[ USERNAME REQUIRED ]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[ USERNAME SHOULD CONTAIN ATLEAST 6 CHARACTERS ]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[ USERNAME SHOULD NOT CONTAIN SPACE ]";
		 }
		 elseif(htmlspecialchars($_POST["uname"]))
		 {
			 $err_uname=["HTML KeyWords Used"];
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 
		 //name validation
		if(empty($_POST["name1"]))
		 {
			 $err_uname="[ NAME REQUIRED ]";
		 }
		 elseif(htmlspecialchars($_POST["name1"]))
		 {
			 $err_name1=["HTML KeyWords Used"];
		 }
		 else
		 {
			 $uname=$_POST["name1"];
		 }
		 //password validation
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(htmlspecialchars($_POST["pass"]))
		 {
			 $err_pass=["HTML KeyWords Used"];
		 }
		 elseif (strlen($_POST["uname"])<8) {
		 	$err_pass=["[Password must be 8 charachters long"];
		 }
		 elseif(!strpos($_POST["pass"],"#"))
		 {
			 $err_pass="[Password should contain special character]";
		 }
		 elseif(!is_numeric($_POST["pass"]))
		 {
			 $err_pass="[Password should contain Numeric values]";
		 }
		 elseif(!ctype_upper($_POST["pass"]))
		 {
			 $err_pass="[Password should contain UpperCase values]";
		 }
		 elseif(!ctype_lower($_POST["pass"]))
		 {
			 $err_pass="[Password should contain LowerCase values]";
		 }

		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 //conpass validation
		 if(empty($_POST["conpass"]))
		 {
			 $err_uname="[ PASSWORD REQUIRED ]";
		 }
		 elseif(conpass!=pass)
		 {
			 $err_name1=["PASSWORDS DO NOT MATCH"];
		 }
		 else
		 {
			 $conpass=$_POST["conpass"];
		 }
		 //email validation
		 if(empty($_POST["email"]))
		 {
			 $err_email="[ EMAIL REQUIRED ]";
		 }
		 elseif(!strpos($_POST["email"],"@"))
		 {
			 $err_email="[ EMAIL SHOULD CONTAIN @ ]";
		 }
		 else
		 {
			 $email=$_POST["email"];
		 }
		 

	} 
		?>
<html>
	<head></head>
	<body>
		
			<fieldset>
			<legend><h1>Club Member Registration</h1></legend>
			<form action="" method="">
			<table>
			    <tr>
					<td><span><b>Name:</b></span></td>
					<td><input type="text" name="name1" value="<?php echo $name1;?>">
					<span><?php echo $err_name1;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password:</b></span></td>
					<td><input type="password" name="conPass" value="<?php echo $conPass;?>">
					<span><?php echo $err_conPass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="email" name="email" value="<?php echo $email;?>"></td>
					<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="tel" name="phone_no" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
				<td><span><b>Birth Date:</b></span></td>
				
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1900;$k<=2021;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr>
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Where did you hear about us:</b></span></td>
					<td>
						<ul>        
							<li>
								<input type="checkbox" value="FC" name="FC[]"><span>A Friend or Colleague</span>
							</li>
							<li>
								<input type="checkbox" value="Google" name="Google"><span>Google</span>
							</li>
							<li>
								<input type="checkbox" value="BP" name="BP"><span>Blog Post</span>
							</li>
							<li>
								<input type="checkbox" value="NA" name="NA"><span>News Article</span>
							</li>
						</ul>
					
					
					</td>
				</tr>
				
				<tr>
	 				<td><span><b>Bio:</b></span></td>
					 <td><textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
				
				
				
			</table>
			
			<input type="submit" name="submit" value="submit">
		  
			
		</form>
		</fieldset>






	</body>




</html>