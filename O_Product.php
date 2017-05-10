<!DOCTYPE HTML>
<html>
	<head>
		<title> Product Reports </title>
	</head>
	<body>
		<div id = "Bar">
			<ul>
				<li> <a href = "./reports.php"> < Main Menu </a> </li>
                <li> User Name Here </li>
				<li> <a href = "./login.php"> Log Out </a></li>
		</div>
		<div id = "Title">
			<input type = "text" placeholder = "date">
			<h1> Reports </h1>
		</div>
		<div id = "Name">
			<h2> Products </h2>
			<input type = "text" placeholder = "search">
		<div id = "Table">
			<table>
				<?php
 +			 	include 'config.php';
 +				$sqlresult = $conn->query("SELECT request_item.item_id AS 'Item Number', request_item.product_type AS 'Type', request.color AS 'Color', request.quantity as 'Quantity Ordered', request.total_amount AS 'Total Amount' FROM request_item, request WHERE request_item.item_id = item.item_id AND request.product_type = request_item.product_type;");
 +	            echo sql_to_html_table($sqlresult, $delim = "\n");
 +				$conn->close();
 +			 ?>
				<tr>
					<th> Total Sales </th>
					<td> (x) </td>
				</tr>
			</table>
		</div>
	</body>
</html>
