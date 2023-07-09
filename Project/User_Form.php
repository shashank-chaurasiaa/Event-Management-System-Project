<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive User Dashboard | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <style>
   table {
  table-layout: auto;
  width: 580px;
}   
  table,th,td{
    border : 1px solid black;
  }
  </style>
   </head>
<body>
<div style="position:absolute; left:300px; top:150px;">
<form action="" method="post">
  
  <select id="multiselect" name = "type">  
  <option value="City" >City</option>
<option value="Ara" >Ara</option>  
<option value="Patna" >Patna</option>  
<option value="Bhopal" >Bhopal</option>  
<option value="Hyderabad" >Hyderabad</option>
<input type = "submit" name ="submit1" value ="Show Event Category City Wise"/>

</select> 
</form> 

<?php 

include "sql.php";

if(isset($_POST['submit1']))
{
  $city = $_POST['type'];

$query = "SELECT Event_category FROM Event_Details where City_name ='$city'";


$result = mysqli_query($conn,$query);
if($result->num_rows>0){
echo "<table>
<tr>
    
    <th>Event Category</th>
    
</tr>";
while($data = $result->fetch_assoc()){
  echo "<tr> 
                
                <td>".$data['Event_category']."</td> 
                
            </tr>";
}
echo "</table>";
}
else{
echo "0 result";
}}
?></div>
<div style="position:absolute; left:800px; top:150px;">
  
<form action="" method="post">
            <select id="multiselect" name = "type1">  
            <option value="Enter Event Category" >Event Category</option>  
            <option value="Comedy Show" >Comedy Show</option>  
            <option value="Motivational Talk" >Motivational Talk</option>
            <option value="Festival Celebration" >Festival Celebration</option>  
            <option value="Exhibitions" >Exhibitions</option> 
            <option value="Blood Donation Camps" >Blood Donation Camps</option>
            <input type = "submit" name ="submit" value ="Show Upcoming Event"/>
            </select>  
</form>

<?php 

include "sql.php";
if(isset($_POST['submit']))
{
  $category = $_POST['type1'];
$query = "SELECT * FROM Event_Details where Event_category ='$category'";


$result = mysqli_query($conn,$query);
if($result->num_rows>0){
echo "<table>
<tr>
    
    
    <th>Event Name</th>
    <th>Event Date</th>
    <th>Event Time</th>
    
    <th>Available Tickets</th>
    <th>Ticket_Price</th>
    
</tr>";
while($data = $result->fetch_assoc()){
  echo "<tr> 
                
                <td>".$data['Event_category']."</td> 
                <td>".$data['Event_date']."</td> 
                <td>".$data['Event_time']."</td> 
                
                <td>".$data['Available_seats']."</td> 
                <td>".$data['Ticket_price']."</td> 
            </tr>";
}
echo "</table>";
}
else{
echo "0 result";
}

}
     
?>



</div>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">User</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Ticket_booked.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Ticket Booked</span>
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
 
       

</body>
</html>
