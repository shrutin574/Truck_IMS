
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
<form name="form1" action="indexedit.php" method="POST">

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
				Employee Name
			</th>
			<td>
				<?php echo $_POST['name']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Sending Date
			</th>
			<td>
				<?php echo $_POST['sdate']; ?>
			</td>
		</tr>
		<tr>
			<th>
				From
			</th>
			<td>
				<?php echo $_POST['fromaddress']; ?>
			</td>
		</tr>
		<tr>
			<th>
				To
			</th>
			<td>
				<?php echo $_POST['toaddress']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Transport Name
			</th>
			<td>
				<?php echo $_POST['tname']; ?>
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
				Driver Phone Number
			</th>
			<td>
				<?php echo $_POST['dphoneno']; ?>
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
				Belts Available
			</th>
			<td>
				<?php echo $_POST['beltsavail']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Wedges Available
			</th>
			<td>
				<?php echo $_POST['wedgesavail']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Belts Sent
			</th>
			<td>
				<?php echo $_POST['beltssent']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Wedges Sent
			</th>
			<td>
				<?php echo $_POST['wedgessent']; ?>
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

			<a href="indexedit.php"><button class="btn-can" name="edit">Edit</button></a>
		</td>	
	</tr>
	</center>

<?php

if($_SERVER['REQUEST_METHOD']==='POST')
{



    $eid=$_POST['eid'];
    $name=$_POST['name'];
    $sdate=$_POST['sdate'];
    $fromaddress=$_POST['fromaddress'];
    $toaddress=$_POST['toaddress'];
    $tname=$_POST['tname'];
    $truckno=$_POST['truckno'];
    $invoiceno=$_POST['invoiceno'];
    $lrno=$_POST['lrno'];
    $dphoneno=$_POST['dphoneno'];
    $dname=$_POST['dname'];
    $beltsavail=$_POST['beltsavail'];
    $wedgesavail=$_POST['wedgesavail'];
    $beltssent=$_POST['beltssent'];
    $wedgessent=$_POST['wedgessent'];


    include ("connection.php");
    if ($conn-> connect_error)
    {
        die("connection failed:".$conn-> connect_error);
    }
    
$sql = "INSERT into sender(eid,name,sdate,fromaddress,toaddress,tname,truckno,invoiceno,lrno,dphoneno,dname,beltsavail,wedgesavail,beltssent,wedgessent)
        values('$eid','$name','$sdate','$fromaddress','$toaddress','$tname','$truckno','$invoiceno','$lrno','$dphoneno','$dname','$beltsavail','$wedgesavail','$beltssent','$wedgessent')";       
 $result = $conn-> query($sql);


}
?>
</body>
</html>


