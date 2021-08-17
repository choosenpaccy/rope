
<?php
include 'conn.php';
echo "<center>";
echo "<H2>RAPORO Y'IBYARANGUWE N'IBYACURUJWE</H2>";
echo "
	<a href='home.php'><button>BACK</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button onclick='window.print()'>PRINT</button>";
	echo "<br><br>";
echo "<table border='1'";
echo "<tr>";
echo "<th>PRODUCT ID</th><th>PRODUCT NAME</th><th>IMPORT DATE</th><th>IMPORT QUANTITY</th><th>PURCHASE PRICE/UNIT</th><th>IMPORT TOTAL PRICE</th><th>EXPORT DATE</th><th>EXPORT QUANTITY</th><th>SELLING PRICE/UNIT</th><th>EXPORT TOTAL PRICE</th><th>REMAINS</th><th>PROFIT OR LOSS/UNIT</th>";
echo "</tr>";

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
		$p=$e_u_price-$i_u_price;
		$y=$p*$e_qtt;

		echo "<tr>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pid."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$pname."</td>";
		echo "<td>".$date."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$i_qtt."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$i_u_price."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$i_t_price."</td>";
		echo "<td>".$e_date."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$e_qtt."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$e_u_price."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$e_t_price."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$x."</td>";
		echo "<td>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$y."</td>";

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
	button{
		background-color: #1dd0c1;
		font-size: 15px;
		height: 45px;
		border-radius: 5px;
	}
		td{
		height: 40px;
	}
		tr{
		box-shadow: 2px 2px 2px 2px grey;
	}
	</style>
<br><br>
</html>