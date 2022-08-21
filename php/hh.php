<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<h3>^^^^^^^^^^^my sql connection status^^^^^^^^^^^</h3>

	<form method = "post" action="<?php $_PHP_SELF ?>">
	<h3>
	<table>
		<tr>
			<td>
				Firstname : 
			</td>
			<td>
				<input type="text" name="fn">
			</td>
		</tr>
		<tr>
			<td>
				Lastname : 
			</td>
			<td>
				<input type="text" name="ln">
			</td>
		</tr>
		<tr>
			<td>
				Email : 
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				<input name = "Add" type = "submit" id = "add" value = "Add Employee">
				<input name = "Show" type = "submit" id = "show" value = "Show Employees">
				
			</td>		
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				<input name = "Delete" type = "submit" id = "delete" value = "Delete">
				<input name = "Update" type = "submit" id = "update" value = "Update">
				<input type="reset" value="Reset">
			</td>
		</tr>
	</table>
	</h3>
</form>

	<?php 
		if(isset($_POST['Add'])) 
		{
			if(!empty($_POST["fn"]) && !empty($_POST["ln"]) && !empty($_POST["email"]))
			{
				$emp_fn = $_POST['fn']; 		//taking the firstname from the html form
				$emp_ln = $_POST['ln']; 		//taking the lastname from the html form
				$emp_email = $_POST['email'];   //taking the email from the html form
				$sql = "INSERT INTO Employee (firstname, lastname, email)
				VALUES ('$emp_fn','$emp_ln','$emp_email')";

				$result = mysqli_query($conn, $sql);
				if(!$result) 
				{
					die("Could not enter data : " . mysqli_error($conn));
				}
				else
				{
					echo "Entered data successfully </br>";
				}
			}
			else
			{
				if(empty($_POST["fn"]))
				{
					echo $fn_chk;
				}

				if(empty($_POST["ln"]))
				{
					echo $ln_chk;
				}

				if(empty($_POST["email"]))
				{
					echo $email_chk;
				}
			}
		mysqli_close($conn);
		}
		

		if (isset($_POST['Show'])) 
		{
			$sql = "SELECT * FROM employee";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result)) 
					{
						echo "id : " . $row["id"]. " - Name : " . $row["firstname"]. " "
						. $row["lastname"]. " - Email :  " .$row["email"] . " " ."<br>";
					}
			} 
			else 
			{
				echo "0 results";
			}
		}

		if(isset($_POST['Delete']))
		{
			$sql = "DELETE FROM Employee WHERE id=4";

			if (mysqli_query($conn, $sql)) 
			{
				echo "Record deleted successfully ";
			} 
			else 
			{
				echo "Error deleting record: " . mysqli_error($conn);
			}
		}

		if(isset($_POST['Update']))
		{
			$sql = "UPDATE Employee SET lastname='Doe' WHERE id=2";

			if (mysqli_query($conn, $sql)) 
			{
				echo "Record updated successfully";
			} 
			else 
			{
				echo "Error updating record: " . mysqli_error($conn);
			}
		}
	?>
</body>
</html>