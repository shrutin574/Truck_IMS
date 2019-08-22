<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table
{
border-collapse: collapse;
width:50%;
color:#588c7e;
text-align:center;
margin:auto;
}

th
{
background-color:#588c7e;
color: white;
}

tr:nth-child(even)
{
background-color:#f2f2f2;
}

h2
{
padding-top:30px;
text-align:center ;
text-decoration:underline;
}

.content_table
{
padding-left:20px;
padding-right:20px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href=css/main.css rel="stylesheet" type="text/css">
<link href=css/home.css rel="stylesheet" type="text/css">
<link href=css/all.min.css rel="stylesheet" type="text/css">
<title>TIMS</title>
</head>

<body>
<div class="body">
<div class="content">


<form action="download.php" method="POST">
	
<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
<tr>
<th colspan="4" align="center" > 
<h2><u>VERIFICATION FORM<u></h2>
</th>
</tr>
	<tr>
		<td  align="center">
			<label>Enter truckno.:</label>
		</td>
		<td >
		<input type="text" name="truck_no" placeholder=" Enter TRUCKNO." required >
		</td>
		<td >
		<button class="btn-search" value="search" name="search"> <i class="fa fa-search"></i></button>
		</td>
	</tr>		
</table>



<?php
	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	if(isset($_POST['search']))
	{
		$truck_no=$_POST['truck_no'];
		if($truck_no)
			{
				$sql = "SELECT * from issue where truck_no='$truck_no'";

				$result = $conn-> query($sql);
				if (!$result) 
					{
    					printf("Error: %s\n", mysqli_error($conn));
    					exit();
					}
					while($row= mysqli_fetch_array($result))
		{
	
	?>
	
	<div>
	<h2>ISSUER DETAILS</h2>
	</div>
	<table  class="view_tbl" cellpadding="8px" border="3px soild">
	<tr>
	
	</tr>
	<?php
		 if(isset($_POST['search']))
		 {

			echo"<tr>";
			echo"<th>";
			echo"DATE"; echo"<td>";echo $row["tdate"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			  
           	echo"<tr>";
			echo"<th>";
			echo"FROM"; echo"<td>";echo $row["tfrom" ]; echo"</td>";
			echo"</th>";
			echo"</tr>";


		    echo"<tr>";
			echo"<th>";
			echo"TO"; echo"<td>"; echo $row["tto"]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"LOG SER PRO"; echo"<td>";echo $row["log_ser_pro"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"TRUCK NO"; echo"<td>";echo $row["truck_no"]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"INVOICE NO"; echo"<td>";echo $row["invoice_no"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"LR"; echo"<td>";echo $row["l_r"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"DRIVER NO"; echo"<td>";echo $row["driver_no"]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"DRIVER NAME"; echo"<td>";echo $row["driver_name"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"BELTS AVAILABLE"; echo"<td>";echo $row["belts_available"]; echo"</td>";
			echo"</th>";
			echo"</tr>";
			
			echo"<tr>";
			echo"<th>";
			echo"WEDGES AVAILABLE"; echo"<td>";echo $row["wedges_available"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			
            echo"<tr>";
			echo"<th>";
			echo"BELTS ISSUED"; echo"<td>";echo $row["belts_issued"]; echo"</td>";
			echo"</th>";
			echo"</tr>";
            
           	echo"<tr>";
			echo"<th>";
			echo"WEDGES ISSUED"; echo"<td>";echo $row["wedges_issued"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

		}
	}
		echo"</table>";
	}
	}
	
	?>


<?php
	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	if(isset($_POST['search']))
	{
		$truck_no=$_POST['truck_no'];
		
$sql = "SELECT * from issue where truck_no='$truck_no'";
		
		$result = $conn-> query($sql);
		if (!$result) 
		{
    		printf("Error: %s\n", mysqli_error($conn));
    exit();
}
		while($row= mysqli_fetch_array($result))
		{
	
	?>	
	
	<divs>
	<h2>RECEIVER DETAILS</h2>
	</div>
	<table  class="view_tbl" cellpadding="8px" border="3px soild">
	
	<?php
		if(isset($_POST['search']))
		{

			echo"<tr>";
			echo"<th>";
			echo"TRUCK NO"; echo"<td>";echo $row["truck_no"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			  
           	echo"<tr>";
			echo"<th>";
			echo"INVOICE NO"; echo"<td>";echo $row["invoice_no" ]; echo"</td>";
			echo"</th>";
			echo"</tr>";


						echo"<tr>";
			echo"<th>";
			echo"LR"; echo"<td>"; echo $row["l_r"]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"BELTS DAMAGED"; echo"<td>";echo $row["belts_damaged"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"BELTS SHORTAGE"; echo"<td>";echo $row["belts_shortage"]; echo"</td>";
			echo"</th>";
			echo"</tr>";
			
			echo"<tr>";
			echo"<th>";
			echo"BELTS AVAILABLE"; echo"<td>";echo $row["belts_available"]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"WEDGES DAMAGED"; echo"<td>";echo $row["wedges_damaged"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"WEDGES SHORTAGE"; echo"<td>";echo $row["wedges_shortage"]; echo"</td>";
			echo"</th>";
			echo"</tr>";
			
			echo"<tr>";
			echo"<th>";
			echo"WEDGES AVAILABLE"; echo"<td>";echo $row["wedges_available"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

		}
	}
		echo"</table>";
	}
	// $conn-> close();	
	?>


<?php
	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	if(isset($_POST['search']))
	{
		$truck_no=$_POST['truck_no'];
		
		
$sql = "SELECT damage from receipt where truck_no='$truck_no'";
		
		$result = $conn-> query($sql);
		if (!$result) 
		{
    		printf("Error: %s\n", mysqli_error($conn));
    exit();
}
		while($row= mysqli_fetch_array($result))
		{
	
	?>
		
	
	<divs>
	<h2>REPORTS</h2>
	</div>
	<table  class="view_tbl" cellpadding="8px" border="3px soild">
	<tr>
	
	</tr>
	<?php
		if(isset($_POST['search']))
		{

			echo"<tr>";
			echo"<th>";
			echo"SO TOTAL DAMAGED ITEMS IS"; echo"<td>";echo $row["damage"]; echo"</td>";
			echo"</th>";
			echo"</tr>"; 

		}
	}
		echo"</table>";
	}

	
	?>


</br>
<center>
	<tr align="center">
		<td colspan="4">
		
			<a href="download_excel.php"><button class="btn-sub"  name="submit">REPORTS</button></a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<?php 
include("download_excel.php");
?>







	</td>
</tr>
</center>
</form>
</form>
</body>
</html>