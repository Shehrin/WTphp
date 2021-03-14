<?php
	$name=$err_name=$email=$err_email=$phone=$err_phone=$address=$err_address=$gender=$err_gender=$board=$err_board="";
	
	if(isset($_POST["Submit"]))
	 {
		 if(empty($_POST["name"]))
			{
				$err_name="[PLEASE ENTER YOUR NAME]";
			}
		 else
		    {
				$name = $_POST['name'];
			}
			
		if (empty($_POST["email"])) 
			{
             $err_email = "[PLEASE ENTER YOUR E-MAIL]";
			} 
        else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
			{
             $err_email = "[INVALID E-MAIL FORMAT]"; 
			}
		else 
			{
             $email = $_POST["email"];
			}
		 if(!empty($_POST["phone"]) && isset( $_POST['phone'] ))
         {
             $phone = $_POST["phone"];
		 }
         if (mb_strlen($_POST["phone"]) < 11 ) {
             $err_phone = "[PHONE NUMBER MUST HAVE AT LEAST 11 DIGITS]";
         }
         elseif(!preg_match("#[0-9]+#",$phone)) {
             $err_phone = "[PHONE NUMBER CAN HAVE ONLY NUMERIC CHARACTERS]";
         }	
		 
		 
		if(isset($_POST['gender']))
		{
			if($_POST['gender'] == 'male')
			{
				$gender = 'Male';
			}
			else if($_POST['gender'] == 'female')
			{
				$gender = 'Female';
			}
			else if($_POST['gender'] == 'other')
			{
			$gender = 'Other';
			}
		}
        else
		{
			$err_gender = "PLEASE SELECT A GENDER";
		}
		
		if(isset($_POST['board']))
		{
			if($_POST['board'] == 'BM')
			{
				$board = 'Bangla Medium';
			}
			else if($_POST['board'] == 'EM')
			{
				$gender = 'English Medium';
			}
			else if($_POST['board'] == 'BV')
			{
				$board = 'Bangla Version';
			}
			else if($_POST['board'] == 'IB')
			{
				$board = 'International Baccalaureate';
			}
		}
        else
		{
			$err_board = "PLEASE SELECT YOUR BOARD";
		}
	}

?>
<html>
	<head></head>
	<body>
		<form action="" method="">
		<fieldset style="width:800px">
        <legend><h1>TEACHER REGISTRATION</h1></legend>
			<table>
				<tr>
					<td><span><b>Name</b></span></td>
					<td><input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span></td>

				</tr>
				
				<tr>
				<td><span><b>Birth Date</b></span></td>
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
						for($k=1920;$k<=2021;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr>
				
				
				<tr>
					<td><span><b>Gender</b></span></td>
					<td><input type="radio" name="gender" id="male" value="male"><span>Male</span>
						   <input type="radio" name="gender" id="female" value="female"><span>Female</span>
						   <input type="radio" name="gender" id="other" value="other"><span>Other</span>
						   <span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				
				
				<tr>
				<tr>
					<td><span><b>Address</b></span></td>
					<td> <input type="text" name="address" value="<?php echo $address;?>">
					<span><?php echo $err_address;?></span></td>

				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td><input type="text" name="phone" value="<?php echo $phone;?>">
					<span><?php echo $err_phone;?></span></td>

				</tr>
				
				 <tr>
					<td><span><b>Email</b></span></td>
					<td><input type="text" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td>

				</tr>
				
				<tr>
					<td><span><b>Board Of Education</b></span></td>
					<td><input type="radio" name="board" id="EM" value="EM"><span>English Medium</span>
						   <input type="radio" name="board" id="BM" value="BM"><span>Bangla Medium</span>
						   <input type="radio" name="board" id="BV" value="BV"><span>Bangla Version</span>
						   <input type="radio" name="board" id="IB" value="IB"><span>International Baccalaureate</span>
						   <span><?php echo "&nbsp ".$err_board;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Current Employment Status</b></span></td>
					<td>
						<ul>        
							<li>
								<input type="checkbox" value="S" name="S"><span>School Student</span>
							</li>
							<li>
								<input type="checkbox" value="UG" name="Undergrad"><span>Undergraduate</span>
							</li>
							<li>
								<input type="checkbox" value="PG" name="Postgrad"><span>Post Graduate</span>
							</li>
							<li>
								<input type="checkbox" value="job" name="job"><span>Job</span>
							</li>
						</ul>
					</td>
				</tr>
				
			</table>
			<br>
			<input type="Submit" name="Submit" value="REGISTER">
		</fieldset>
		</form>
	</body>
</html>