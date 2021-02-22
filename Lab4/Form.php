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
	

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
	 {
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[ USERNAME REQUIRED ]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[ USERNAME SHOULD CONTAIN ATLEAST 6 CHARACTERS OR MORE ]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[ USERNAME SHOULD NOT CONTAIN SPACE ]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[ PASSWORD REQUIRED ]";
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[ PASSWORD SHOULD NOT CONTAIN SPACE ]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[PLEASE SELECT GENDER]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["Hobbies"]))
		 {
			 $err_Hobbies="[ CHOOSE AT LEAST TWO OPTION ]";
		 }
		 elseif(count($_POST["Hobbies"])<2)
		 {
			 $err_Hobbies="[ CHOOSE AT LEAST TWO HOBBIES ]";
		 }
		 else
		 {
			
			 $Hobbies=$_POST["Hobbies"];
		 }
		 if(!isset($_POST["profession"]))
		 {
			 $err_profession="[ PLEASE SELECT PROFESSION ]";
		 }
		 else
		 {
			 $profession=$_POST["profession"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[ PLEASE PROVIDE YOUR BIO ]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
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
					<td><span><b>Name</b></span></td>
					<td>:<input type="text" name="name1" value="<?php echo $name1;?>">
					<span><?php echo $err_name1;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:<input type="password" name="conPass" value="<?php echo $conPass;?>">
					<span><?php echo $err_conPass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:<input type="email" name="email"></td>
				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td>:<input type="tel" name="phone_no"></td>
				</tr>
				<tr>
					
					
					<td>:<select name="birthYear" >
					<option value="0000"<?php echo $birthdayYear == '0000' ? 'selected="selected"' : ''; ?>>Year:</option>
                    <?php
					for($i=date('Y'); $i>1899; $i--) {
					$selected = '';
					if ($birthdayYear == $i) $selected = ' selected="selected"';
					print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
					}
					?>

					</select></td>
					
				</tr>
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Where did you hear about us</b></span></td>
					<td>:<input type="checkbox" name="F/C[]" value="F/C"><span>A Friend or Colleague</span>
					    <input type="checkbox" name="Google[]" value="Google"><span>Google</span>
						<input type="checkbox" name="BlogSpot[]" value="BlogSpot"><span>Blog Spot</span>
						<input type="checkbox" name="NewsArticle[]" value="NewsArticle"><span>News Article</span>
						<span><?php echo "&nbsp  ".$err_hear;?></span></td>
				</tr>
				
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
				
				
				
			</table>
			
			<input type="submit" name="submit" value="submit">
		  
			
		</form>
		</fieldset>






	</body>




</html>