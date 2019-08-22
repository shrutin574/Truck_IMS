<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sender-form</title>
</head>
<form name="form1" action="index1view.php" method="POST">
<body>
    
    <section class="my-5">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                            <form action="/index1.php">

                                <div class="form-group">
                                    <label for="validationDefault01">Employee Id</label>
                                    <input type="text" name="eid" class="form-control" id="validationDefault01" placeholder="Your employee id" required>
                            </div>

                               

                               <!--  <div class="form-group">
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
 -->
                                <div class="form-group">
                                        <label for="validationDefault01">Receiving date</label>
                                        <input type="date" name="rdate" class="form-control" id="validationDefault01" placeholder="Date"  required>
                                </div> 

                                <div class="form-group">
                                    <label for="validationDefault01">Number of belts Received</label>
                                    <input type="number" name="rbelts" min="1" step="1" class="form-control" id="validationDefault01" placeholder="belts sent" required>
                            </div>

                            <div class="form-group">
                                <label for="validationDefault01">Number of wedges Received</label>
                                <input type="number" name="rwedges" min="1" step="1" class="form-control" id="validationDefault01" placeholder="wedges sent" required>
                        </div>

                        <div class="form-group">
                            <label for="validationDefault01">Damaged/Shortage</label>
                            <input type="number" name="damage" step="1" class="form-control" id="validationDefault01" placeholder="Damaged or shortage" required>
                    </div>

                    <div class="form-group">
                        <label for="validationDefault01">Truck Number</label>
                        <input type="text" name="truckno" class="form-control" id="validationDefault01" placeholder="Truck number" required>
                </div>
                <div class="form-group">
                        <label for="validationDefault01">Invoice Number</label>
                        <input type="text" name="invoiceno" class="form-control" id="validationDefault01" placeholder="Invoice number" required>
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
                                <button class="btn btn-block-sm btn-primary py-2 px-4" type="submit"  id="product-3__question__submit__button">Submit question</button>
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
</body>
</html>



<?php

if(isset($_POST['submit']))
// if($_SERVER['REQUEST_METHOD']==='POST')
{
    $eid=$_POST['eid'];
    $name=$_POST['name'];
    $fromaddress=$_POST['fromaddress'];
    $toaddress=$_POST['toaddress'];
    $rdate=$_POST['rdate'];
    $rbelts=$_POST['rbelts'];
    $rwedges=$_POST['rwedges'];
    $damage=$_POST['damage']; 
    $truckno=$_POST['truckno'];
    $lrno=$_POST['lrno'];
    $dname=$_POST['dname'];
    $dphoneno=$_POST['dphoneno'];
          
    
    
    include ("connection.php");
    if ($conn-> connect_error)
    {
        die("connection failed:".$conn-> connect_error);
    }
    

$sql = "INSERT into receiver(eid,name,fromaddress,toaddress,rdate,rbelts,rwedges,damage,truckno,lrno,dname,dphoneno)
        values('$eid','$name','$fromaddress','$toaddress','$rdate','$rbelts','$rwedges','$damage','$truckno','$lrno','$dname','$dphoneno')";       
    $result = $conn-> query($sql);

 if(!$result)
    {
echo "Can't add new data " . mysqli_error($conn);
exit;
} 
else
{
header("Location: index1view.php");
}
}


?>