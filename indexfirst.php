
<html>
<head>
<title>SENDER ENTRY FORM</title></head>
<body>
<div class="body">
<form name="form1" action="index.php" method="POST">
<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
    
    
    <tr>
        <th colspan="4" align="center" > 
            <h2><u>SENDER ENTRY FORM<u></h2>
        </th>
    </tr>



    <tr>
        <td >
            <label>Enter Employee Id:</label>
        </td>
        <td >
            <input type="text" name="eid" placeholder="Your employee id"  maxlength="14" required />
        </td>
    </tr>   


    
    <tr>
        <td>
            <label>Name:</label>
        </td>
        <td>
            <input type="text" name="name" placeholder=" Enter Name" />
        </td>
        
    </tr>



  <tr>
        <td >
            <label>FROM:</label>
        </td>
        <td >
            <input type="text" name="fromaddress" placeholder="Enter the from address"  maxlength="14" required />
        </td>
    </tr>  

      <tr>
        <td >
            <label>TO:</label>
        </td>
        <td >
            <input type="text" name="toaddress" placeholder="Enter the tp adress"  maxlength="14" required />
        </td>
    </tr>  

      <tr>
        <td >
            <label>BELTS SENT:</label>
        </td>
        <td >
            <input type="text" name="belts" placeholder=""  maxlength="14" required />
        </td>
    </tr>  

      <tr>
        <td >
            <label>wedges sent:</label>
        </td>
        <td >
            <input type="text" name="wedges" placeholder="wedges sent"  maxlength="14" required />
        </td>
    </tr>  

     <tr>
        <td >
            <label>truck no:</label>
        </td>
        <td >
            <input type="text" name="truckno" placeholder=""  maxlength="14" required />
        </td>
    </tr>

    <tr>
        <td>
            <label>lrno:</label>
        </td>
        <td>
            <input type="text" name="lrno" placeholder=" Enter Name" />
        </td>
        
    </tr>


    <tr>
        <td>
            <label>dname:</label>
        </td>
        <td>
            <input type="text" name="dname" placeholder=" Enter Name" />
        </td>
        
    </tr>


    <tr>
        <td>
            <label>dphoneno:</label>
        </td>
        <td>
            <input type="text" name="dphoneno" placeholder=" Enter Name" />
        </td>
        
    </tr>




    
   <!--  <tr>
        <td>
            <label>Gender :</label>
        </td>
        <td>
            <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
        </td>
    </tr>



    <tr>
        <td>
            <label>Date of Birth :</label>
        </td>
        <td>
            <input type="date" name="dob" />
        </td>
    </tr>



    <tr>
        <td>
            <label>Address :</label>
        </td>
        <td>
            <textarea cols="20" rows="5" name="address" placeholder="Enter Address"></textarea>
        </td>
    </tr>
    


    <tr>
        <td>
            <label>Phone Number :</label>
        </td>
        <td>
            <input type="text" name="phoneno" placeholder="Enter Phone number"  maxlength="14" required />
        </td>
    </tr>



    <tr>    
        <td>
            <label>Email :</label>
        </td>
        <td>
            <input type="email" name="email" placeholder="Enter Email" maxlength="50" />
        </td>
    </tr> -->
    

    <tr style="height:20px">
    </tr>
    
    <tr align="center">
        <td colspan="4">
            
            <button class="btn-sub" value="submit" name="submit" values="insert">Submit</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        
            <button class="btn-can" name="reset" value="reset">Reset</button>
        </td>   
    </tr>
    
    
</table>
</form>
</div>
</body>
</html>




<?php


//if(isset($_POST['submit']))
//{
if($_SERVER['REQUEST_METHOD']==='POST')
{
    $eid=$_POST['eid'];
    $name=$_POST['name'];
    $fromaddress=$_POST['fromaddress'];
    $toaddress=$_POST['toaddress'];
    $sdate=$_POST['sdate'];
    $belts=$_POST['belts'];
    $wedges=$_POST['wedges'];
    $truckno=$_POST['truckno'];
    $lrno=$_POST['lrno'];
    $dname=$_POST['dname'];
    $dphoneno=$_POST['dphoneno'];
    
    
    include ("connection.php");
    if ($conn-> connect_error)
    {
        die("connection failed:".$conn-> connect_error);
    }
    

$sql = "INSERT into sender(eid,name,fromaddress,toaddress,sdate,belts,wedges,truckno,lrno,dname,dphoneno)
        values('$eid','$name','$fromaddress','$toaddress','$sdate','$belts','$wedges','$truckno','$lrno','$dname','$dphoneno')";       
    $result = $conn-> query($sql);
//}
    if(!$result)
    {
echo "Can't add new data " . mysqli_error($conn);
exit;
} 
else
{
header("Location: indexview.php");
}

}

?>






<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sender-form</title>
</head>
<form name="form1" action="index.php" method="POST">
<body>
    <section class="my-5">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                            <form action="index.php">
                                <div class="form-group">
                                    <label for="validationDefault01">Employee Id</label>
                                    <input type="text" name="eid" class="form-control" id="validationDefault01" placeholder="Your employee id" required>
                            </div>                               
                     <div class="form-group">
                                        <label for="validationDefault01">Name</label>
                                        <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Your name" required>
                                </div>

                                <div class="form-group">
                                    <label for="validationDefault01">From Location</label>
                                    <input type="text" name="fromaddress" class="form-control" id="validationDefault01" placeholder="Sending address" required>
                            </div>
                            <div class="form-group">
                                <label for="validationDefault01">To Location</label>
                                <input type="text" name="toaddress" class="form-control" id="validationDefault01" placeholder="Receiving address" required>
                        </div>
                                <div class="form-group">
                                        <label for="validationDefault01">Sending date</label>
                                        <input type="date" name="sdate" class="form-control" id="validationDefault01" placeholder="Date"  required>
                                </div> 
                                <div class="form-group">
                                    <label for="validationDefault01">Number of belts sent</label>
                                    <input type="number" name="belts" min="1" step="1" class="form-control" id="validationDefault01" placeholder="belts sent" required>
                            </div>
                            <div class="form-group">
                                <label for="validationDefault01">Number of wedges sent</label>
                                <input type="number" name="wedges" min="1" step="1" class="form-control" id="validationDefault01" placeholder="wedges sent" required>
                        </div>                        
                   <div class="form-group">
                        <label for="validationDefault01">Truck Number</label>
                        <input type="text" name="truckno" class="form-control" id="validationDefault01" placeholder="Truck number" required>
                </div>
                <div class="form-group">
                    <label for="validationDefault01">L R Number</label>
                    <input type="text" name="lrno" class="form-control" id="validationDefault01" placeholder="L R number" required>
            </div>
            <div class="form-group">
                <label for="validationDefault01">Driver Name</label>
                <input type="text" name="dname" class="form-control" id="validationDefault01" placeholder="Driver name" required>
        </div>
            <div class="form-group">
                <label for="validationDefault01">Driver Contact Number</label>
                <input type="text" name="dphoneno"  class="form-control" id="validationDefault01" placeholder="Driver Contact number" required>
        </div>
                                <!-- <div class="form-group">
                                        <label for="validationDefault01">Gender</label>
                                        <input type="gender" class="form-control" id="validationDefault01" placeholder="Your gender" required>
                                </div> -->

                               
                                
                                <!-- <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter your email-id" required>
                                </div> -->
    
                                <!-- <div class="form-group">
                                        <label for="comment">Address</label>
                                        <textarea class="form-control" rows="5" id="comment" placeholder="Enter your address" required></textarea>
                                  </div>
                                 -->
                              <button class="btn btn-block-sm btn-primary py-2 px-4" name="submit" type="submit">Submit question</button>
                              </form>         
                    </div>
            </div>
        </div>
    </section>
    <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </form>


<?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
    $eid=$_POST['eid'];
    $name=$_POST['name'];
    $fromaddress=$_POST['fromaddress'];
    $toaddress=$_POST['toaddress'];
    $sdate=$_POST['sdate'];
    $belts=$_POST['belts'];
    $wedges=$_POST['wedges'];
    $truckno=$_POST['truckno'];
    $lrno=$_POST['lrno'];
    $dname=$_POST['dname'];
    $dphoneno=$_POST['dphoneno'];
    include ("connection.php");
    if ($conn-> connect_error)
    {
        die("connection failed:".$conn-> connect_error);
    }
    
$sql = "INSERT into sender(eid,name,fromaddress,toaddress,sdate,belts,wedges,truckno,lrno,dname,dphoneno)
        values('$eid','$name','$fromaddress','$toaddress','$sdate','$belts','$wedges','$truckno','$lrno','$dname','$dphoneno')";       
 $result = $conn-> query($sql);

 if(!$result)
    {
echo "Can't add new data " . mysqli_error($conn);
exit;
} 
else
{
header("Location:indexview.php");
}
}
?>
</body>
</html>






































