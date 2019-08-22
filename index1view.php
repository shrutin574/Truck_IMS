
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>sender view</title>
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
</head>
<body>
<form name="form1" action="index1edit.php" method="POST">

<div class="body">
<div class="content_table">


	<div>
	<h2>ENTERED DETAILS ARE</h2>
	</div>
	<table  class="view_tbl" cellpadding="8px" border="3px soild">
		<tr>
	
		</tr>


		<tr>
			<th>
				Employee ID
			</th>
			<td>
				<?php echo $_POST['eid']; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Receiving Date
			</th>
			<td>
				<?php echo $_POST['rdate']; ?>
			</td>
		</tr>

			<tr>
			<th>
				Belts Received
			</th>

			<td>
				<?php echo $_POST['rbelts']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Wedges Received
			</th>
			<td>
				<?php echo $_POST['rwedges']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Damage
			</th>

			<td>
				<?php echo $_POST['damage']; ?>
			</td>
		</tr>
		
		<tr>
			<th>
				Truck Number
			</th>
			<td>
				<?php echo $_POST['truckno']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Invoice Number
			</th>
			<td>
				<?php echo $_POST['invoiceno']; ?>
			</td>
		</tr>
		<tr>
			<th>
				LR Number
			</th>
			<td>
				<?php echo $_POST['lrno']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Driver Name
			</th>
			<td>
				<?php echo $_POST['dname']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Driver Phone Number
			</th>
			<td>
				<?php echo $_POST['dphoneno']; ?>
			</td>
		</tr>
		
		
	
		

	
<br>

</table>
</div>
</div>
</form>



<center>
	<tr align="center">
		<td colspan="4">
			
		<a href="menu.php">
			<button class="btn-sub" value="submit" name="submit" values="insert">Submit</button></a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<a href="index1edit.php"><button class="btn-can" name="edit">Edit</button></a>
		</td>	
	</tr>
	</center>

<?php

if($_SERVER['REQUEST_METHOD']==='POST')
{



    $eid=$_POST['eid'];
    $rdate=$_POST['rdate'];
    $rbelts=$_POST['rbelts'];
    $rwedges=$_POST['rwedges'];
    $damage=$_POST['damage'];
    $truckno=$_POST['truckno'];
    $invoiceno=$_POST['invoiceno'];
    $lrno=$_POST['lrno'];
    $dname=$_POST['dname'];
    $dphoneno=$_POST['dphoneno'];

   
    


    include ("connection.php");
    if ($conn-> connect_error)
    {
        die("connection failed:".$conn-> connect_error);
    }
    
$sql = "INSERT into receiver(eid,rdate,rbelts,rwedges,damage,truckno,invoiceno,lrno,dname,dphoneno)
        values('$eid','$rdate','$rbelts','$rwedges','$damage','$truckno','$invoiceno','$lrno','$dname','$dphoneno')";       
 $result = $conn-> query($sql);


}
?>
</body>
</html>