<?php
include "sql.php";
if (isset($_POST['submit'])) {
    $ticket = $_POST['ticket'];
$sql2 = "Select * from Booked_details,Event_details where Booked_details.Event_name = Event_details.Event_category And Booked_details.Status ='Conform'";
$result2 =mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_array($result2);
$seats = $row1['Available_seats'];
#echo $seats;
if($seats>0)
{
    $av = $seats;
    $av = $av -$ticket;
    
    $status = "Confirm";
}
else{
    $status ="Not Confirm";
}}
?>

<?php
include "sql.php";

?>

<?php
include "sql.php";
$sql1 = "Select * from Booked_details order by Ticket_no desc limit 1 ";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result1);

$lastid = $row['Ticket_no'];
#echo $lastid;
if($lastid ==" ")
{
    $no = "1";
}
else{
    $no = $lastid;
    #$no = intval($no);
    #echo $no;
    $no = ($no + 1);
   #S echo $no;
}
?>
<?php
include "sql.php";
if (isset($_POST['submit'])) {
$Cityname = $_POST['cityname'];
$Type = $_POST['type'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Username = $_POST['username'];
$Ticketno = $_POST['ticketno'];
#$Status = $_POST['status'];
$sql = "INSERT INTO Booked_details
VALUES ('$Cityname','$Type','$Date','$Time','$Username','$Ticketno','$status','1')";
$result = $conn->query($sql);
if ($result == TRUE) {
echo "New record created successfully.";
}else{
echo "Error:". $sql . "<br>". $conn->error;
}
$sql3 ="Update Event_details,Booked_details set Event_details.Available_seats = '$av' where Booked_details.Event_name = Event_details.Event_category And Booked_details.Status ='Confirm' And  Event_details.City_name='$Cityname' ";
if ($conn->query($sql3) === TRUE) {
   # echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
$conn->close();
}
?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Ticket Booked </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
button {   
       background-color: #4CAF55;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Ticket Booking </h1> </center>   
    <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST"> 
        <div class="container">   
            <label>City : </label>   
            <input type="text" placeholder="Enter City Name" name="cityname" >  
            <label>Event Name : </label> <br>  
            <select id="multiselect" name = "type" readonly>  
            <option value="Enter Event Category" >Event Category</option>  
            <option value="Comedy Show" >Comedy Show</option>  
            <option value="Motivational Talk" >Motivational Talk</option>
            <option value="Festival Celebration" >Festival Celebration</option>  
            <option value="Exhibitions" >Exhibitions</option> 
            <option value="Blood Donation Camps" >Blood Donation Camps</option>
            </select>  <br>
            <label>Event Date : </label>   
            <input type="text" placeholder="Enter date '2022-11-04'" name="date"  >  
            <label>  
                Event Time :
            </label>
            <input type="text" placeholder="Enter date time"  name="time" > 
            <label>  
                User Name :
            </label>
            <input type="text" placeholder="Enter User Name" name="username" > 
            <label>  
                Total Number of Ticket :
            </label>
            <input type="text" placeholder="Enter number of tickets" name="ticket" > 
            <label>  
                Ticket Number :
            </label>
            <input type="text"  name="ticketno" id = "ticketno"value = "<?php echo $no;?>" readonly >
            <label>  
            <button type="submit" name = "submit">Ticket Booked</button>     
               
        </div>   
    </form>     
</body>     
</html>  