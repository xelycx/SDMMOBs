<?php  
 $connect = mysqli_connect("localhost", "root", "", "sdmmobs");  
 $query = "SELECT bug_developer, count(*) AS TOTAL FROM `bugreports` WHERE bug_developer != '' GROUP BY bug_developer ORDER BY TOTAL DESC"; 
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>  
 <html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
      </head>  
      <body>  
           <br /><br />  
           <a href="BRhome.php" class="w3-bar-item w3-button">Home <i class="fa fa-home"></i></a>
           <div class="container" style="width:900px;">  
               
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">BestDeveloper</th>  
                               <th width="30%">TOTAL</th>  
                               
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["bug_developer"]; ?></td>  
                               <td><?php echo $row["TOTAL"]; ?></td>  
 
                          </tr>  
                     <?php  
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  

 ?>