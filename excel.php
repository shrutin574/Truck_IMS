<?php  

$connect = mysqli_connect("localhost", "root", "", "trucks");
$output = '';
if(isset($_POST['search']))
{
$lrno=$_POST['lrno'];
 $query = "SELECT * FROM sender where lrno='$lrno'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <h2> SENDER DETAILS</h2>
   <table class="table" bordered="1">  
                    <tr>    
                         <th>Employee Name</th>
                         <th>Employee id</th> 
                         <th>Sending Date</th> 
                         <th>From Address</th> 
                         <th>To address</th> 
                         <th>TransportName</th> 
                         <th>Truck No</th> 
                         <th>Invoice No</th> 
                         <th>L R No</th> 
                         <th>Driver no</th> 
                         <th>Driver Name</th> 
                         <th>Belts available</th> 
                         <th>Wedges available</th> 
                         <th>Belts sent</th> 
                         <th>Wedges sent</th>    
                    </tr>



  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                      
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["eid"].'</td>
                         <td>'.$row["sdate"].'</td>
                         <td>'.$row["fromaddress"].'</td>
                          <td>'.$row["toaddress"].'</td>
                           <td>'.$row["tname"].'</td>
               <td>'.$row["truckno"].'</td>
                     <td>'.$row["invoiceno"].'</td>
                       <td>'.$row["lrno"].'</td>
                                <td>'.$row["dphoneno"].'</td>
                                 <td>'.$row["dname"].'</td>
                                  <td>'.$row["beltsavail"].'</td>

                                   <td>'.$row["wedgesavail"].'</td>
                                    <td>'.$row["beltssent"].'</td>
                                     <td>'.$row["wedgessent"].'</td>
                                   
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
 $query = "SELECT * FROM receiver where lrno='$lrno'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <h2> RECEIVED DETAILS</h2>
   <table class="table" bordered="1">  
                    <tr>    
                        
                         <th>Employee id</th> 
                         <th>Received Date</th>
                          <th>Belts received</th> 
                         <th>Wedges received</th>
                         <th>Damage</th>
                             <th>Truck No</th> 
                             <th>Invoice No</th> 
                                   <th>L R No</th>  
                                         <th>Driver Name</th> 
                                           <th>Driver no</th>
                         

                        
                    </tr>



  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                      
                          
                        <td>'.$row["eid"].'</td>
                        <td>'.$row["rdate"].'</td>
                        <td>'.$row["rbelts"].'</td>
                        <td>'.$row["rwedges"].'</td>
                        <td>'.$row["damage"].'</td>
                       
                        <td>'.$row["truckno"].'</td>
                        <td>'.$row["invoiceno"].'</td>

                        <td>'.$row["lrno"].'</td>
                              
                        <td>'.$row["dname"].'</td>
                        <td>'.$row["dphoneno"].'</td>
                                   
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
 $query = "SELECT * FROM receiver where lrno='$lrno'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <h2> RECEIVED DETAILS</h2>
   <table class="table" bordered="1">  
                    <tr>    
                        
                         <th>SO TOTAL DAMAGE IS:</th> 
                       
                         

                        
                    </tr>



  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                      
                          
              <td>'.$row["damage"].'</td>
                        
                                   
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