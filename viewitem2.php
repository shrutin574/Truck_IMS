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
<form action="viewitems1.php" method="POST">
<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
<tr>
		<th colspan="4" align="center" > 
			<h2><u>VERIFICATION FORM<u></h2>
		</th>
	</tr>
	<tr>
		<td  align="center">
			<label>Enter LRNO.:</label>
		</td>
		<td >
		<input type="text" name="lrno" placeholder=" Enter LRNO." required >
		</td>
		<td >
		<button class="btn-search" value="search" name="search"> <i class="fa fa-search"></i></button>
		</td>
	</tr>		
</table>
</form>



<?php
	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	if(isset($_POST['search']))
	{
		$lrno=$_POST['lrno'];
		if(!$lrno)
			{
				$sql = "SELECT * from sender where lrno=$lrno";

				$result = $conn-> query($sql);
				if (!$result) 
					{
    					printf("Error: %s\n", mysqli_error($conn));
    					exit();
					}
					while($row= mysqli_fetch_array($result))
		{
	
	?>
		

	<form action="" method="POST">
	<divs>
	<h2>SENDER DETAILS</h2>
	</div>
	<table  class="view_tbl" cellpadding="8px" border="3px soild">
	<tr>
	
	</tr>
	<?php
		if(isset($_POST['search']))
		{

			echo"<tr>";
			echo"<th>";
			echo"Employee ID"; echo"<td>";echo $row["eid"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			  
           	echo"<tr>";
			echo"<th>";
			echo"EMPLOYEE Name"; echo"<td>";echo $row["name" ]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"FROM"; echo"<td>";echo $row["fromaddress"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"TO"; echo"<td>";echo $row["toaddress"]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"SENDING DATE"; echo"<td>"; echo $row["sdate"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

            echo"<tr>";
			echo"<th>";
			echo"BELTS SENT"; echo"<td>";echo $row["belts"]; echo"</td>";
			echo"</th>";
			echo"</tr>";
            
           	echo"<tr>";
			echo"<th>";
			echo"WEDGES SENT"; echo"<td>";echo $row["wedges"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"TRUCK NO"; echo"<td>";echo $row["truckno"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"L R NO."; echo"<td>";echo $row["lrno"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"DRIVER NAME"; echo"<td>";echo $row["dname"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"DRIVER PHONE NO"; echo"<td>";echo $row["dphoneno"]; echo"</td>";
			echo"</th>";
			echo"</tr>"; 

		}
	}
		echo"</table>";
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
		$lrno=$_POST['lrno'];
		
$sql = "SELECT * from receiver where lrno=$lrno";
		
		$result = $conn-> query($sql);
		if (!$result) 
		{
    		printf("Error: %s\n", mysqli_error($conn));
    exit();
}
		while($row= mysqli_fetch_array($result))
		{
	
	?>	
	<form action="" method="POST">
	<divs>
	<h2>RECEIVER DETAILS</h2>
	</div>
	<table  class="view_tbl" cellpadding="8px" border="3px soild">
	<tr>
	
	</tr>
	<?php
		if(isset($_POST['search']))
		{

			echo"<tr>";
			echo"<th>";
			echo"Employee ID"; echo"<td>";echo $row["eid"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			  
            echo"<tr>";
			echo"<th>";
			echo"EMPLOYEE Name"; echo"<td>";echo $row["name" ]; echo"</td>";
			echo"</th>";
			echo"</tr>";


			echo"<tr>";
			echo"<th>";
			echo"FROM"; echo"<td>";echo $row["fromaddress"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"TO"; echo"<td>";echo $row["toaddress"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"RECEIVED DATE"; echo"<td>"; echo $row["rdate"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"BELTS RECEIVED"; echo"<td>";echo $row["rbelts"]; echo"</td>";
			echo"</th>";
			echo"</tr>";
            
           	echo"<tr>";
			echo"<th>";
			echo"WEDGES RECEIVED"; echo"<td>";echo $row["rwedges"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"TRUCK NO"; echo"<td>";echo $row["truckno"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"L R NO."; echo"<td>";echo $row["lrno"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"DRIVER NAME"; echo"<td>";echo $row["dname"]; echo"</td>";
			echo"</th>";
			echo"</tr>";

			echo"<tr>";
			echo"<th>";
			echo"DRIVER PHONE NO"; echo"<td>";echo $row["dphoneno"]; echo"</td>";
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
		$lrno=$_POST['lrno'];
		
		
$sql = "SELECT damage from receiver where lrno=$lrno";
		
		$result = $conn-> query($sql);
		if (!$result) 
		{
    		printf("Error: %s\n", mysqli_error($conn));
    exit();
}
		while($row= mysqli_fetch_array($result))
		{
	
	?>
		
	<form action="" method="POST">
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
}
else
{
	// echo"dddd";
}	
	?>

<br>
<center>
	<tr align="center">
		<td colspan="4">
			
		<!-- <
			<button class="btn-sub" value="submit" name="submit" values="insert">Submit</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<button class="btn-can" name="cancel">Edit</button> -->
		</td>	
	</tr>
	</center>
</table>
</div>
</div>
</body>
</html>