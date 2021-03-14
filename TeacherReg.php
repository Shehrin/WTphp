<?php
	$name=$err_name=$date=$err_date=$email=$status=$err_status=$err_email=$phone=$err_phone=$address=$err_address=$gender=$err_gender=$board=$err_board="";
	error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	ini_set('log_errors', '0'); ini_set('error_log', './');
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		 if(empty($_POST["name"]))
			{
				$err_name="[PLEASE ENTER YOUR NAME]";
			}
		 else
		    {
				$name = test_input($_POST['name']);
			}
		if(empty($_POST["email"])) 
			{
             $err_email = "[PLEASE ENTER YOUR E-MAIL]";
			} 
		else
			{
             $email = test_input($_POST['email']);
					
		
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
			{
             $err_email = "[INVALID E-MAIL FORMAT]"; 
			}
			
			}
		if(!isset($_POST["date"]))
		 {
			 $err_date="[ PLEASE SELECT DATE OF BIRTH ]";
		 }
		 else
		 {
			 $date=$_POST["date"];
		 
         }
		
		if(empty($_POST['phone']))
			{
			$err_phone= "PLEASE ENTER YOUR PHONE NUMBER";
			}
		else
			{
			$phone= test_input($_POST['phone']);
			}
		if (mb_strlen($_POST["phone"]) < 11 ) 
			{
			$err_phone = "[PHONE NUMBER MUST HAVE AT LEAST 11 DIGITS]";
			}
		else if(!preg_match("#[0-9]+#",$phone))
			{
			$err_phone = "[PHONE NUMBER CAN HAVE ONLY NUMERIC CHARACTERS]";
			}

		if(!isset($_POST["gender"]))
		 {
			 $err_gender="[PLEASE SELECT GENDER]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		
		if(!isset($_POST["board"]))
		{
             $_POST[$err_board] = "[PLEASE SELECT A BOARD]";			
        }		
		else
        {		
			$board=$_POST["board"];
		}
        
		
		
		if(empty($S)) 
		{
			$err_status = "[PLEASE SELECT A STATUS]";
		} 
		else
		{
			$status = test_input($_POST['S']);	
		}
 
	}
	
	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	

?>
<html>
	<head></head>
	<body>
		<center>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<fieldset style="width:800px">
        <legend><h1>TEACHER REGISTRATION</h1></legend>
			
			<table>
				<tr>
					<td><span><b>Name</b></span></td>
					<td><input type="text" name="name" value="<?php echo $name;?>">
					<span class="error"><?php echo $err_name;?></span></td>

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
					<span class="error"><?php echo $err_date;?></span>
				</td>
				</tr>
				
				
				<tr>
					<td><span><b>Gender</b></span></td>
					<td><input type="radio" name="gender" id="male" value="male"><span>Male</span>
						   <input type="radio" name="gender" id="female" value="female"><span>Female</span>
						   <input type="radio" name="gender" id="other" value="other"><span>Other</span>
						   <span class="error"><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				
				
				<tr>
				<tr>
					<td><span><b>Address</b></span></td>
					<td> <input type="text" name="address" value="<?php echo $address;?>">
					<span class="error"><?php echo $err_address;?></span></td>

				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td><input type="text" name="phone" value="<?php echo $phone;?>">
					<span class="error"><?php echo $err_phone;?></span></td>

				</tr>
				
				 <tr>
					<td><span><b>Email</b></span></td>
					<td><input type="text" name="email" value="<?php echo $email;?>">
					<span class="error"><?php echo $err_email;?></span></td>

				</tr>
				
				<tr>
					<td><span><b>Board Of Education</b></span></td>
					<td><input type="radio" name="board" id="EM" value="English Medium"><span>English Medium</span>
						   <input type="radio" name="board" id="BM" value="Bangla Medium"><span>Bangla Medium</span>
						   <input type="radio" name="board" id="BV" value="Bangla Version"><span>Bangla Version</span>
						   <input type="radio" name="board" id="IB" value="International Baccalaureate"><span>International Baccalaureate</span>
						   <span class="error"><?php echo "&nbsp ".$err_board;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Current Employment Status</b></span></td>
					<td>
						<ul>        
							<li>
								<input type="checkbox" value="School Student" name="Status"><span>School Student</span>
							</li>
							<li>
								<input type="checkbox" value="Under Graduate" name="Status"><span>Undergraduate</span>
							</li>
							<li>
								<input type="checkbox" value="Post Graduate" name="Status"><span>Post Graduate</span>
							</li>
							<li>
								<input type="checkbox" value="Job" name="Status"><span>Job</span>
							</li>
						</ul>
					</td>
				</tr>
				
			</table>
			<br>
			<input type="Submit" name="Submit" value="REGISTER">
		</fieldset>
		</form>
	</center>
	</body>
</html>


<?php
	
	if(isset($_POST["Submit"]))
	{
		echo "NAME  ", $_POST['name'];
		echo "<br>";
		echo "DATE OF BIRTH Date:",$_POST['day'], " Month:",$_POST['month']," Year:",$_POST['year'];
		echo "<br>";
		echo "GENDER  ", $_POST['gender'];
		echo "<br>";
		echo "ADDRESS  ", $_POST['address'];
		echo "<br>";
		echo "PHONE  ", $_POST['phone'];
		echo "<br>";
		echo "E-MAIL  ", $_POST['email'];
		echo "<br>";
		echo "BOARD OF EDUCATION  ", $_POST['board'];
		echo "<br>";
		echo "CURRENT EMPLOYMENT STATUS  ", $_POST['Status'];
		
		
		
		
	}
?>