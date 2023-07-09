<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <style>
   table {
  table-layout: fixed;
  width: 980px;
}   
  table,th,td{
    border : 1px solid black;
  }
  </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="EventUpload.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Event Upload</span>
          </a>
        </li>
       
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <div style="position:absolute;; left:680px; top:80px;">
  <h1><u>Event Details</u></h1></div>
  <div style="position:absolute; left:300px; top:150px;">

  <?php 

  include "sql.php";

$query = "SELECT * FROM Event_Details";


$result = mysqli_query($conn,$query);
if($result->num_rows>0){
  echo "<table>
  <tr>
      
      <th>City Name</th>
      <th>Event Category</th>
      <th>Event Date</th>
      <th>Event Time</th>
      <th>Total Seats</th>
      <th>Available Seats</th>
      <th>Ticket_Price</th>
  </tr>";
  while($data = $result->fetch_assoc()){
    echo "<tr> 
                  <td>".$data['City_name']."</td> 
                  <td>".$data['Event_category']."</td> 
                  <td>".$data['Event_date']."</td> 
                  <td>".$data['Event_time']."</td> 
                  <td>".$data['Total_seats']."</td> 
                  <td>".$data['Available_seats']."</td> 
                  <td>".$data['Ticket_price']."</td> 
              </tr>";
  }
  echo "</table>";
}
else{
  echo "0 result";
}


       
?>
 
       

</body>
</html>
