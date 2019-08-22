<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sender-form</title>
</head>
<form name="form1" action="indexview.php" method="POST">
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
                                        <label for="validationDefault01">Sending date</label>
                                        <input type="date" name="sdate" class="form-control" id="validationDefault01" placeholder="Date" required>

                                        <br>

<div class="form-group">
    <label for="exampleFormControlSelect1">From Location</label>
    <select class="form-control" id="exampleFormControlSelect1" name="fromaddress">
      <option>BENGALURU</option>
      <option>MANGALURU</option>
      <option>UDUPI</option>
      <option>KUNDAPURA</option>
      <option>BYNDOOR</option>
    </select>
  </div>



  <div class="form-group">
    <label for="exampleFormControlSelect1">TO Location</label>
    <select class="form-control" id="exampleFormControlSelect1" name="toaddress">
      <option>BENGALURU</option>
      <option>MANGALURU</option>
      <option>UDUPI</option>
      <option>KUNDAPURA</option>
      <option>BYNDOOR</option>
    </select>
  </div>




   <div class="form-group">
    <label for="exampleFormControlSelect1">Transport Name</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tname">
      <option>Durgamba</option>
      <option>VRL</option>
      <option>SRS</option>
      <option>SHREEKUMAR</option>
      <option>SUGAMA</option>
    </select>
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
                <label for="validationDefault01">Driver Contact Number</label>
                <input type="text" name="dphoneno"  class="form-control" id="validationDefault01" placeholder="Driver Contact number" required>
        </div>


 <div class="form-group">
                <label for="validationDefault01">Driver Name</label>
                <input type="text" name="dname" class="form-control" id="validationDefault01" placeholder="Driver name" required>

  </div> 
                                <div class="form-group">
                                    <label for="validationDefault01">Number of belts Available</label>
                                    <input type="number" name="beltsavail" step="1" class="form-control" id="validationDefault01" placeholder="belts available" required>
                            </div>

                            <div class="form-group">
                                <label for="validationDefault01">Number of wedges available</label>
                                <input type="number" name="wedgesavail"  step="1" class="form-control" id="validationDefault01" placeholder="wedges available" required>
                        </div> 


                                </div> 
                                <div class="form-group">
                                    <label for="validationDefault01">Number of belts sent</label>
                                    <input type="number" name="beltssent" min="1" step="1" class="form-control" id="validationDefault01" placeholder="belts sent" required>
                            </div>
                            <div class="form-group">
                                <label for="validationDefault01">Number of wedges sent</label>
                                <input type="number" name="wedgessent" min="1" step="1" class="form-control" id="validationDefault01" placeholder="wedges sent" required>
                        </div>                        
                  
                
           
        
                              
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
</body>
</html>



<?php
if(isset($_POST['submit']))
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

}
?>
