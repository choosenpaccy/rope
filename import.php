<!DOCTYPE html>
<html>
<head>
	<title>rope</title>
</head>
<body>
<center>
	<h1><b><u>ROPE TECHNOLOGY</u></b></h1>

	<?php
	include 'new.php';

	?>
	<form method="POST" action="">
	<input type="date" name="aa" placeholder="date">&nbsp;&nbsp;&nbsp;&nbsp;<U>UP TO</U>&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="bb" placeholder="date"><input type="submit" name="search" value="SEARCH"> </form><br><br>
	<div class="aa">
	<h2>IBYARANGUWE</h2> 
	<form method="POST" action="">
<table>
<tr>
	<td>.PRODUCT ID:</td><td><input type="text" name="pid" placeholder="Enter id here" required></td>
</tr>
<tr>
	<td>.PRODUCT NAME:</td><td><input type="text" name="pname" placeholder="Enter name here"></td>
</tr>
<tr>
	<td>.IMPORT DATE:</td><td><input type="DATE" name="date" placeholder="DATE"></td>
</tr>
<tr>
	<td>.IMPORT QUANTITY:</td><td><input type="text" name="qtt" placeholder="Enter quantity here"></td>
</tr>
<tr>
	<td>.PURCHASE/UNIT PRICE:</td><td><input type="text" name="uprice" placeholder="Enter id here"></td>
</tr>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..</td>
</tr>
<tr>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="insert" value="INSERT"></td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="modify" value="MODIFY"></td>
</tr>	
<tr>
	<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="DELETE"></td>
</tr>
</table>
</form>
</div>
<div class="bb">
	<?php
	if(isset($_POST['search'])){
    include 'conn.php';
    $aa=$_POST['aa'];
    $bb=$_POST['bb'];
    echo "<h2>IBISUBIZO</h2> ";
    echo "IBICURUZWA BYARANGUWE HAGATI YA:<BR> $aa NA $bb";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>PRODUCT ID</th><th>PRODUCT NAME</th><th>DATE</th><th>QUANTITY</th><th>PURCHASE PRICE/UNIT</th><th>TOTAL PRICE</th>";
    echo "</tr>";
    $select="SELECT * FROM `import` WHERE i_i_date BETWEEN '$aa' AND '$bb'";
    $rst=$conn->Query($select);
    if ($rst) {
    	while ($Query_row=$rst->fetch_assoc()) {
    			$pid=$Query_row['p_id'];
		$pname=$Query_row['p_name'];
			$date=$Query_row['i_i_date'];
				$qtt=$Query_row['i_quantity'];
					$uprice=$Query_row['i_u_price'];
					$tprice=$Query_row['i_t_price'];
					echo "<tr>";
					echo "<td>".$pid."</td>";
					echo "<td>".$pname."</td>";
					echo "<td>".$date."</td>";
					echo "<td>".$qtt."</td>";
					echo "<td>".$uprice."</td>";
					echo "<td>".$tprice."</td>";
				 echo "</tr>";
    	}
    }
}
echo "</table>";
    include 'conn.php';
    echo "<h2>URUTONDE</h2> ";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>PRODUCT ID</th><th>PRODUCT NAME</th><th>DATE</th><th>QUANTITY</th><th>PURCHASE PRICE/UNIT</th><th>TOTAL PRICE</th>";
    echo "</tr>";
    $select="SELECT * FROM `import`";
    $rst=$conn->Query($select);
    if ($rst) {
    	while ($Query_row=$rst->fetch_assoc()) {
    			$pid=$Query_row['p_id'];
		$pname=$Query_row['p_name'];
			$date=$Query_row['i_i_date'];
				$qtt=$Query_row['i_quantity'];
					$uprice=$Query_row['i_u_price'];
					$tprice=$Query_row['i_t_price'];
					echo "<tr>";
					echo "<td>".$pid."</td>";
					echo "<td>".$pname."</td>";
					echo "<td>".$date."</td>";
					echo "<td>".$qtt."</td>";
					echo "<td>".$uprice."</td>";
					echo "<td>".$tprice."</td>";
				 echo "</tr>";
    	}
    }

	?>
	<style>
		body{
			background-color: skyblue;
			padding: 20px;
		}
		.aa{
			float: left;
			background-color: #0e6b31;
			padding: 20px;
		}
		.bb{
			float: right;
			background-color: #0c9b19;
			padding: 20px; 
		}
	</style>
</div>
</center>
</body>
</html>

<?php
include 'conn.php';
if (isset($_POST['insert'])) {
	$pid=$_POST['pid'];
		$pname=$_POST['pname'];
			$date=$_POST['date'];
				$qtt=$_POST['qtt'];
					$uprice=$_POST['uprice'];
					$x=$qtt*$uprice;
		$insert="INSERT INTO `import`(`p_id`, `p_name`, `i_i_date`, `i_quantity`, `i_u_price`, `i_t_price`) VALUES ('$pid','$pname','$date','$qtt','$uprice','$x')";
		$rst=$conn->Query($insert);
		if ($rst) {
            echo "INSERTED";
					}	
					else{
						echo "NOT INSERTED";
					}		
}


if (isset($_POST['modify'])) {
	$pid=$_POST['pid'];
		$pname=$_POST['pname'];
			$date=$_POST['date'];
				$qtt=$_POST['qtt'];
					$uprice=$_POST['uprice'];
					$x=$qtt*$uprice;
		$insert="UPDATE `import` SET `p_id`='$pid',`p_name`='$pname',`i_i_date`='$date',`i_quantity`='$qtt',`i_u_price`='$uprice',`i_t_price`='$x' WHERE `p_id`='$pid'";
		$rst=$conn->Query($insert);
		if ($rst) {
            echo "MODIFIED";
					}	
					else{
						echo "NOT MODIFIED";
					}		
}
if (isset($_POST['delete'])) {
	$pid=$_POST['pid'];
		$insert="DELETE FROM `import` WHERE `p_id`='$pid'";
		$rst=$conn->Query($insert);
		if ($rst) {
            echo "DELETED";
					}	
					else{
						echo "NOT DELETED";
					}		
}
echo "</table>";

?>   
