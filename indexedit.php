
<html>
<head>
<title>SENDER EDIT FORMS</title></head>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <u><center><h1>SENDER EDIT FORM</h1></center></u>

<?php
    include ("connection.php");
    $sql = "select *from sender ORDER BY id DESC LIMIT 1";
    $result = $conn-> query($sql);
    

        while($row= mysqli_fetch_array($result))
    {

?>
<title>Sender-form</title>
</head>
<form name="form1" action="indexedit.php" method="POST">
<body>
    
    <section class="my-5">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                            <form action="indexedit.php">

                            <div class="form-group" hidden>
                                    <label for="validationDefault01"> Id</label>
                                    <input type="text" name="id" class="form-control" id="validationDefault01" value="<?php echo $row['id'] ?>" / hidden>

                             </div>
                                <div class="form-group">
                                    <label for="validationDefault01">Employee Id</label>
                                    <input type="text" name="eid" class="form-control" id="validationDefault01" value="<?php echo $row['eid'] ?>" />
                            </div>


                                <div class="form-group">
                                        <label for="validationDefault01">Name</label>
                                        <input type="text" name="name" class="form-control" id="validationDefault01" value="<?php echo $row['name'] ?>" />
                                </div>


                                  <div class="form-group">
                                        <label for="validationDefault01">Sending date</label>
                                        <input type="date" name="sdate" class="form-control" id="validationDefault01" value="<?php echo $row['sdate'] ?>" />
                                </div> 

<div class="form-group">
    <label for="exampleFormControlSelect1">From Location</label>
    <select class="form-control" id="exampleFormControlSelect1" name="fromaddress" value="<?php echo $row['fromaddress'] ?>" />
      <option>BENGALURU</option>
      <option>MANGALURU</option>
      <option>UDUPI</option>
      <option>KUNDAPURA</option>
      <option>BYNDOOR</option>
    </select>
  </div>

                                <div class="form-group">
    <label for="exampleFormControlSelect1">TO Location</label>
    <select class="form-control" id="exampleFormControlSelect1" name="toaddress" value="<?php echo $row['toaddress'] ?>" />
      <option>BENGALURU</option>
      <option>MANGALURU</option>
      <option>UDUPI</option>
      <option>KUNDAPURA</option>
      <option>BYNDOOR</option>
    </select>
  </div>

   <div class="form-group">
    <label for="exampleFormControlSelect1">Transport Name</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tname" value="<?php echo $row['tname'] ?>" />
      <option>Durgamba</option>
      <option>VRL</option>
      <option>SRS</option>
      <option>SHREEKUMAR</option>
      <option>SUGAMA</option>
    </select>
  </div>





                        
                       

                               <div class="form-group">
                        <label for="validationDefault01">Truck Number</label>
                        <input type="text" name="truckno" class="form-control" id="validationDefault01" value="<?php echo $row['truckno'] ?>" />
                </div>


         <div class="form-group">
                        <label for="validationDefault01">Invoice Number</label>
                        <input type="text" name="invoiceno" class="form-control" id="validationDefault01" value="<?php echo $row['invoiceno'] ?>" />
                </div>


 <div class="form-group">
                    <label for="validationDefault01">L R Number</label>
                    <input type="text" name="lrno" class="form-control" id="validationDefault01" value="<?php echo $row['lrno'] ?>"/>
            </div>

 <div class="form-group">
                <label for="validationDefault01">Driver Contact Number</label>
                <input type="text" name="dphoneno"  class="form-control" id="validationDefault01" value="<?php echo $row['dphoneno'] ?>" />
        </div>


          <div class="form-group">
                <label for="validationDefault01">Driver Name</label>
                <input type="text" name="dname" class="form-control" id="validationDefault01" value="<?php echo $row['dname'] ?>" />
        </div>

    <div class="form-group">
                                    <label for="validationDefault01">Number of belts Available</label>
                                    <input type="number" name="beltsavail" min="1" step="1" class="form-control" id="validationDefault01" value="<?php echo $row['beltsavail'] ?>" />
                            </div>

                            <div class="form-group">
                                <label for="validationDefault01">Number of wedges Available</label>
                                <input type="number" name="wedgesavail" min="1" step="1" class="form-control" id="validationDefault01" value="<?php echo $row['wedgesavail'] ?>" />
                        </div>


                                <div class="form-group">
                                    <label for="validationDefault01">Number of belts sent</label>
                                    <input type="number" name="beltssent" min="1" step="1" class="form-control" id="validationDefault01" value="<?php echo $row['beltssent'] ?>" />
                            </div>

                            <div class="form-group">
                                <label for="validationDefault01">Number of wedges sent</label>
                                <input type="number" name="wedgessent" min="1" step="1" class="form-control" id="validationDefault01" value="<?php echo $row['wedgessent'] ?>" />
                        </div>
                                </table>
</form>

</form>
 <tr align="center">
                <td colspan="4">
                    <a href="menu.php">
                    <button class="btn-sub" value="submit" name="save">Save</button></a>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
                    <button class="btn-can" name="cancel">cancel</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--<button class="btn-sub" name="delete">delete</button>-->
                </td>
        
            </tr>
        
    <?php
        
    }
    
    if(isset($_POST['save']))
    {
    $id=$_POST['id'];
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
        $sql = "UPDATE sender 
                set eid=$eid,
                    name='$name',
                    sdate='$sdate',
                    fromaddress='$fromaddress',
                    toaddress='$toaddress',
                    tname='$tname',
                    truckno='$truckno',
                    invoiceno='$invoiceno',
                    lrno='$lrno',
                    dphoneno=$dphoneno,
                    dname='$dname',
                    beltsavail=$beltsavail,
                    wedgesavail=$wedgesavail,
                    beltssent=$beltssent,
                    wedgessent=$wedgessent
                    where id=$id";  

        $result = $conn-> query($sql);
echo "<br>";
echo "<br>";
if(!$result)
    {
echo "Can't add new data " . mysqli_error($conn);
exit;
} 
else
{
echo "RECORD UPDATED SUCCESSFULLY";
}

     //echo "Record updated";   
$link = 'menu.php';
echo "<a href='".$link."'>GOTO MENU</a>";




    }

    
    ?>
</div>

</body>
</html>