<!DOCTYPE html>
<html>
<head>
	<title>rope</title>
</head>
<body>
	<style>
		body{
			background-color: #4dc1f7;
			padding: 40px;
		}
		form{
			background-color: skyblue;
			width: 450px;
			padding: 15px;
			border-radius: 5px;
			box-shadow:  2px 2px 4px black;
			font-size: 30px;
			font-family: arial;
		}
		input{
			font-size: 20px;
			font-family: Univers;
			background-color: #4dc1f7;
			border-radius: 10px;
			text-align: center;
		}
	</style>
	<center>
			<h1><b><u>ROPE TECHNOLOGY</u></b></h1>
		<form method="POST" action="">
			<H2>LOGOUT</H2>
			<table>
				<tr>
			<td colspan="2">ARE REARLY WANT TO LOGOUT</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="yes" value="YES"></td>
					<td><input type="submit" name="no" value="NO"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>
<?php
if (isset($_POST['yes'])) {
	header('location:log.php');
}

if (isset($_POST['no'])) {
	header('location:home.php');
}