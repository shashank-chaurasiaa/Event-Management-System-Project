

<?php
include "sql.php";
if (isset($_POST['submit'])) {
$Cityname = $_POST['cityname'];
$Type = $_POST['type'];
$Date = $_POST['date'];
$Time = $_POST['time'];
$Totalseat = $_POST['totalseat'];
$Availableseat = $_POST['availableseat'];
$Price = $_POST['price'];

$sql = "INSERT INTO Event_details
VALUES ('$Cityname','$Type','$Date','$Time','$Totalseat','$Availableseat','$Price','')";
$result = $conn->query($sql);
if ($result == TRUE) {
echo "New record created successfully.";
}else{
echo "Error:". $sql . "<br>". $conn->error;
}
$conn->close();
}
?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Event Upload </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
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
    <center> <h1> Upload Event Details </h1> </center>   
    <form action="" method="POST"> 
        <div class="container">   
            <label>City : </label>   
            <input type="text" placeholder="Enter City Name" name="cityname" >  
            <label>   
            Event Category  :  
            </label> <br> 
            <select id="multiselect" name = "type">  
            <option value="Enter Event Category" >Event Category</option>  
            <option value="Comedy Show" >Comedy Show</option>  
            <option value="Motivational Talk" >Motivational Talk</option>
            <option value="Festival Celebration" >Festival Celebration</option>  
            <option value="Exhibitions" >Exhibitions</option> 
            <option value="Blood Donation Camps" >Blood Donation Camps</option>
            </select>  <br>

            <label>Event Date : </label>   
            <input type="text" placeholder="Enter date '2022-11-04'" name="date" >  
            <label>  
                Event Time :
            </label>
            <input type="text" placeholder="Enter date time" name="time" > 
            <label>  
                Total Seats :
            </label>
            <input type="text" placeholder="Enter Total Seat" name="totalseat" > 
            <label>  
                Available Seats :
            </label>
            <input type="text" placeholder="Enter available seats" name="availableseat" >
            <label>  
                Ticket Price :
            </label>
            <input type="text" placeholder="Enter ticket price" name="price" >
            <button type="submit" name = "submit">Upload</button>     
               
        </div>   
    </form>     
</body>     
</html>  