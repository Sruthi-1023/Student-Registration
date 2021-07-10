<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details Form</title>
    <style>
    	.details {
  			font-family: sans-serif;
  			border-collapse: collapse;
 			width: 60%;
 			border: 2px solid black;
		}
		td, th {
  			border: 2px solid black;
  			text-align: center;
  			padding: 1px;
		}
		tr:nth-child(even) {
  			background-color: #dddddd;
}
    </style>
</head>
<body bgcolor="lightgreen">
    <center><h1>Thank You for the Registration</h1></center>
    <table class="details" align="center">
        <tr> 
            <td><h4>Name</h4></td><td><?php echo $_POST["textnames"]?></td>
            <td><h4>Father Name</h4></td><td><?php echo $_POST["fathername"]?></td>
        </tr>
   		<tr> 
            <td><h4>Postal Address</h4></td><td><?php echo $_POST["paddress"]?></td>
            <td><h4>Personal Address</h4></td><td><?php echo $_POST["personaladdress"]?></td>
        </tr>
   		<tr> 
            <td><h4>Sex</h4></td><td><?php echo $_POST["sex"]?></td>
            <td><h4>City</h4></td><td><?php echo $_POST["City"]?></td>
        </tr>
   		<tr> 
            <td><h4>Course</h4></td><td><?php echo $_POST["Course"]?></td>
            <td><h4>District</h4></td><td><?php echo $_POST["District"]?></td>
        </tr>
   		<tr> 
            <td><h4>State</h4></td><td><?php echo $_POST["State"]?></td>
            <td><h4>PinCode</h4></td><td><?php echo $_POST["pincode"]?></td>
        </tr>
        <tr> 
            <td><h4>EmailId</h4></td><td><?php echo $_POST["emailid"]?></td>
            <td><h4>DOB</h4></td><td><?php echo $_POST["dob"]?></td>
        </tr>
        <tr> 
            <td><h4>MobileNo</h4></td><td><?php echo $_POST["mobileno"]?></td>
        </tr>
     </table>
</body>
</html>