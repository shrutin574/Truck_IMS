<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href=css/main.css rel="stylesheet" type="text/css">
<link href=css/home.css rel="stylesheet" type="text/css">
<title>viewitems</title>
<style>
table{
border-collapse: collapse;
width:100%;
color:black;
text-align:center;
}
th{
background-color:black;
color: white;
}
tr:nth-child(even){
background-color:#f2f2f2;}
h2{
padding-top:30px;
text-align:center ;
text-decoration:underline;
}
.content_table{
padding-left:20px;
padding-right:20px;
}

</style>

</head>

<body>
<div class="body">

<!-- <?php
include "header.php";
?> -->

<div class="content_table">
<?php
	$conn = mysqli_connect("localhost","root","","trucks");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT * from sender ORDER BY id";
	$result = $conn-> query($sql);
	
	if($result-> num_rows >0)
	{
	?>
	<div >
	<h2>ITEMS DETAILS</h2>
	</div>
	<table cellpadding="8px" border="3px soild">
	<tr>
	<th>Employee ID</th>
	<th>Employee Name</th>
	<th>START DATE</th>
	<th>FROM</th>
	<th>TO</th>
	<th>Transport Name</th>
	<th>Truck No.</th>
	<th>Invoice No.</th>
	<th>L R No.</th>
	<th>Driver Phone No.</th>
	<th>Driver Name</th>
<th>NO. Of Belts available</th>
	<th>NO. Of Wedges available</th>
	
	<th>NO. Of Belts sent</th>
	<th>NO. Of Wedges sent</th>
	
	
	
	
	
	
	</tr>
	<?php
		while ($row = $result-> fetch_assoc())
		{
			echo"<tr>";
			echo"<td>";echo $row["eid"]; echo"</td>";
			echo"<td>";echo $row["name"]; echo"</td>";
			echo"<td>";echo $row["sdate"]; echo"</td>";
			echo"<td>";echo $row["fromaddress"]; echo"</td>";
			echo"<td>";echo $row["toaddress"]; echo"</td>";
			echo"<td>";echo $row["tname"]; echo"</td>";
			echo"<td>";echo $row["truckno"]; echo"</td>";
			echo"<td>";echo $row["invoiceno"]; echo"</td>";
			echo"<td>";echo $row["lrno"]; echo"</td>";
			echo"<td>";echo $row["dphoneno"]; echo"</td>";
			echo"<td>";echo $row["dname"]; echo"</td>";
			echo"<td>";echo $row["beltsavail"]; echo"</td>";
			echo"<td>";echo $row["wedgesavail"]; echo"</td>";


			
			echo"<td>";echo $row["beltssent"]; echo"</td>";
			echo"<td>";echo $row["wedgessent"]; echo"</td>";
			
			
			
			
		

		}
		echo"</table>";
	}
	else
	{
		echo"No Records found !";
	
	}
	$conn-> close();
		
	?>
	
</table>
</div>
</div>
</body>
</html>
