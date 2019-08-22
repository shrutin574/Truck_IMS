<?php  

$connect = mysqli_connect("localhost", "root", "", "trucks");
$output = '';
if(isset($_POST['search']))
{
$truck_no=$_POST['truck_no'];
 $query = "SELECT * FROM issue where truck_no='$truck_no'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <h2> SENDER DETAILS</h2>
   <table class="table" bordered="1">  
                    <tr>    
                         
                         <th>Sending Date</th> 
                         <th>From Address</th> 
                         <th>To address</th> 
                         <th>LOG SER PRO</th> 
                         <th>Truck No</th> 
                         <th>Invoice No</th> 
                         <th>L R No</th> 
                         <th>Driver no</th> 
                         <th>Driver Name</th> 
                         <th>Belts available</th> 
                         <th>Wedges available</th> 
                         <th>Belts ISSUED</th> 
                         <th>Wedges ISSUED</th>    
                    </tr>



  
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                      
                         <td>'.$row["tdate"].'</td>  
                         <td>'.$row["tfrom"].'</td>
                         <td>'.$row["tto"].'</td>
                         <td>'.$row["log_ser_pro"].'</td>
                          <td>'.$row["truck_no"].'</td>
                           <td>'.$row["invoice_no"].'</td>

                       <td>'.$row["l_r"].'</td>
                                <td>'.$row["driver_no"].'</td>
                                 <td>'.$row["driver_name"].'</td>
                                  <td>'.$row["belts_available"].'</td>

                                   <td>'.$row["wedges_available"].'</td>
                                    <td>'.$row["belts_issued"].'</td>
                                     <td>'.$row["wedges_issued"].'</td>
                                   
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

}


?>

<?php 

$connect = mysqli_connect("localhost", "root", "", "trucks");
$output = '';
if(isset($_POST['search']))
{
 $query = "SELECT * FROM receipt where truck_no='$truck_no'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <h2> RECEIVED DETAILS</h2>
   <table class="table" bordered="1">  
                    <tr>    
                        
                      
							 <th>TRUCK NO</th>
							 <th>INVOICE NO</th>
							 <th>LR</th>
							  <th>BELTS DAMAGED</th>
							  <th>BELTS SHORTAGE</th>
							  <th>BELTS AVAILABLE</th>
								<th>WEDGES DAMAGED</th>
							  <th>WEDGES SHORTAGE</th>
							  <th>WEDGES AVAILABLE</th>


      

                         

                        
                    </tr>



  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                      
                                                  <td>'.$row["truck_no"].'</td>
                                                  <td>'.$row["invoice_no"].'</td>
                                                  <td>'.$row["l_r"].'</td>
													<td>'.$row["belts_damaged"].'</td>
													<td>'.$row["belts_shortage"].'</td
													<td>'.$row["belts_available"].'</td>
                                                  <td>'.$row["wedges_damaged"].'</td>
													<td>'.$row["wedges_shortage"].'</td
													<td>'.$row["wedges_available"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }

}



?>



<?php
$connect = mysqli_connect("localhost", "root", "", "trucks");
$output = '';
if(isset($_POST['search']))
{
 $query = "SELECT * FROM receipt where truck_no='$truck_no'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <h2> RECEIVED DETAILS</h2>
   <table class="table" bordered="1">  
                    <tr>    
                        
                         <th>BELTS DAMAGED:</th> 
                        <th>WEDGES DAMAGED:</th> 
                         

                        
                    </tr>



  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                      
                          
              <td>'.$row["belts_damaged"].'</td>
                        <td>'.$row["wedges_damaged"].'</td> 
                                   
     </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}




?>