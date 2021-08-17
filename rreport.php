
<?php
include 'conn.php';
echo "<center>";
echo "<h1>ROPE TECHNOLOGY</h1>";
include 'new.php';
echo "<H2>STOCK</H2>";
echo "<table border='1'";
echo "<tr>";
echo "<th>PRODUCT ID</th><th>PRODUCT NAME</th><th>REMAINS</th><th>IMPORT DATE</th><th>PURCHASE PRICE/UNIT</th>";

$select="SELECT `import`.`p_id`,`import`.`p_name`,`import`.`i_i_date`,`import`.`i_quantity`,`import`.`i_u_price`,`import`.`i_t_price`,`export`.`e_date`,`export`.`e_quantity`,`export`.`e_u_price`
,`export`.`e_t_price` FROM `import`,`export` WHERE `import`.`p_id`=`export`.`p_id`;";
$rst=$conn->Query($select);
if ($rst) {
	while ($Query_row=$rst->fetch_assoc()) {
		$pid=$Query_row['p_id'];
		$pname=$Query_row['p_name'];
		$date=$Query_row['i_i_date'];
		$i_qtt=$Query_row['i_quantity'];
		$i_u_price=$Query_row['i_u_price'];
		$i_t_price=$Query_row['i_t_price'];
		$e_date=$Query_row['e_date'];
		$e_qtt=$Query_row['e_quantity'];
		$e_u_price=$Query_row['e_u_price'];
		$e_t_price=$Query_row['e_t_price'];
		$x=$i_qtt-$e_qtt;
		$y=$e_t_price-$i_t_price;

		echo "<tr>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pid."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pname."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$x."</td>";
		echo "<td>".$date."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$i_u_price."</td>";
		

	}
}













echo "</table>"

?>
<html>
<style>
table{
	background-color: #128e84;
	padding: 10px;

}
	body{
		background-color: skyblue;
	}
	td{
		height: 35px;
	}
	tr{
		box-shadow: 2px 2px 2px 2px grey;
	}
	</style>
<br><br>
</html>