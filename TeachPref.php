<?php
$area=$err_area=$salary=$err_salary=$board=$err_board=$class=$err_class="";
error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
ini_set('log_errors', '0'); ini_set('error_log', './');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["area"]))
		{
			$err_area="[PLEASE ENTER THE AREA YOU WANT TO TEACH IN]";
		}
    else
		{
			$area = test_input($_POST['area']);
		}
	if(!isset($_POST["salary"]))
		 {
			 $err_salary="[ PLEASE SELECT RANGE OF SALARY ]";
		 }
	else
		 {
			 $salary=$_POST["salary"];
		 }	
    if(!isset($_POST["board"]))
		 {
			 $err_board="[ PLEASE SELECT PREFERRED BOARD ]";
		 }
	else
		 {
			 $board=$_POST["board"];
		 }	
	
	if(!isset($_POST["class"]))
		 {
			 $err_class="[PLEASE SELECT CLASS]";
		 }
		 else
		 {
			 $class=$_POST["class"];
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
        <legend><h1>TEACHER'S PREFERENCE</h1></legend>
			
			<table>
			<tr>
					<td><span><b>Area to teach in</b></span></td>
					<td><input type="text" name="area" value="<?php echo $area;?>">
					<span class="error"><?php echo $err_area;?></span></td>

		    </tr>
			
			<tr>
					<td><span><b>Salary</b></span></td>
					<td>
					<select name="Range">
					<option disabled selected>Salary</option>
					<?php
						$salary= array("2k-4k","4k to 6k","6k to 8k","8k to 10k","10k+");
						for($j=0;$j<count($salary);$j++)
						{
							echo "<option>$salary[$j]</option>";
						}
				   ?>
					</select>
			</td>		
			</tr>
			
			<tr>
					<td><span><b>Board</b></span></td>
					<td>
					<select name="Preference">
					<option disabled selected>Board</option>
					<?php
						$b= array("English Medium","Bangla Medium","Either");
						for($j=0;$j<count($b);$j++)
						{
							echo "<option>$b[$j]</option>";
						}
				   ?>
					</select>
			</td>
			</tr>
			
			<tr>
					<td><span><b>Preferred Class</b></span></td>
					<td><input type="radio" name="class" id="Kindergarten" value="Kindergarten"><span>Kindergarten</span>
						   <input type="radio" name="class" id="Primary" value="Primary"><span>Primary</span>
						   <input type="radio" name="class" id="Seconday" value="Secondary"><span>Secondary</span>
						   <input type="radio" name="class" id="High School" value="High School"><span>High School</span>
						   <span class="error"><?php echo "&nbsp ".$err_board;?></span></td>
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
		echo "Area  ", $_POST['area'];
		echo "<br>";
		echo "Salary   ",$_POST['Range'];
		echo "<br>";
		echo "Preferred Board  ",$_POST['Preference'];
		echo "<br>";
		echo "Preferred Class  ", $_POST['class'];
		
	}
?>

            
            			