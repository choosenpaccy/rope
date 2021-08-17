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
			width: 650px;
			padding: 15px;
			border-radius: 5px;
			box-shadow:  2px 2px 4px black;
			font-size: 15px;
			font-family: arial;
			left: left;
		}
		input{
			font-size: 20px;
			font-family: Univers;
			background-color: #4dc1f7;
			border-radius: 10px;
			text-align: center;
		}
		.aa{
			float: right;
		}
	</style>
	<center>
			<h1><b><u>ROPE TECHNOLOGY</u></b></h1>
			<?php
			include 'new.php';
			include 'conn.php';?>
					<div class="aa">	EXISTING USENAME WAS: <?php $c="select username from account"; 
			$rst=$conn->Query($c); 
			if($rst) while($Query_row=$rst->fetch_assoc()) $t=$Query_row['username']; echo "<font color='white'>$t</font>";?><br>
									EXISTING PASSWORD WAS: <?php $c="select password from account"; 
			$rst=$conn->Query($c); 
			if($rst) while($Query_row=$rst->fetch_assoc()) $t=$Query_row['password']; echo "<font color='white'>$t</font>";?>
		</div>
	<a href='setting.php'><button>BACK</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<?php
if(isset($_POST['change'])){
$id=$_POST['id'];
$uname=$_POST['uname'];
$pss=$_POST['pss'];
include 'conn.php';
$c="UPDATE `account` SET `ID`='$id',`username`='$uname',`password`='$pss' WHERE `ID`='$id'";
$rst=$conn->Query($c);
if ($rst) {
	echo "<h1><font color='green'>USERNAME AND PASSWORD CHANGED SUCCESSFULLY!</h1>";
}
else {
	echo "<h1><font color='#9d1724'>USERNAME AND PASSWORD NOT CHANGED TRY AGAIN?</h1>";
	}
}
?>
			
		<form method="POST" action="">
			<H2>CHANGE USERNAME/PASSWORD</H2> 
			<h2>SYSTEM ID IS: <?php $c="select ID from account"; 
			$rst=$conn->Query($c); 
			if($rst) while($Query_row=$rst->fetch_assoc()) $t=$Query_row['ID']; echo "<font color='green'>$t</font>";?></h2>
			<table>
								<tr>
					<td>SYSTEM ID:</td><td><input type="text" name="id" placeholder="Enter System Id" required></td>
				</tr>
								<tr>
					<td>USERNAME:</td><td><input type="username" name="uname" placeholder="Enter new username" required></td>
				</tr>
								<tr>
					<td>PASSWORD:</td><td><input type="text" name="pss" placeholder="Enter new password" required></td>
				</tr>
				<tr>
					<td>
						----
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="change" value="CHANGE">

				</tr>
			</table>
		</form>
	</center>
</body>
</html>

