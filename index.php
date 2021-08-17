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
			<H2>LOGIN FORM</H2>
			<table>
				<tr>
					<td>USERNAME:</td><td><input type="text" name="uname" placeholder="Enter username" required></td>
				</tr>
								<tr>
					<td>PASSWORD:</td><td><input type="password" name="pss" placeholder="Enter username" required></td>
				</tr>
				<tr>
					<td>
						----
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="LOGIN"><br><br><STRONG>Forgot password?</STRONG></td>

				</tr>
			</table>
		</form>
	</center>

</body>
</html>

<?php
if (isset($_POST['login'])) {
	session_start();
	$uname=$_POST['uname'];
	$pss=$_POST['pss'];

	$select="SELECT `username`, `password` FROM `account` WHERE `username`='$uname' AND `password`='$pss'";
	include 'conn.php';
	$rst=$conn->Query($select); #or die (mysqli_error($conn));
	if ($rst) {
		while ($Query_row=$rst->fetch_assoc()) {
			$session['uname']=$Query_row['username'];
			$session['pss']=$Query_row['password'];
			header('location:home.php');
		}
	}
	else{
die("Error: The file does not exist.");

}
}
?>