<?php
include "sql.php";
if (isset($_POST['submit'])) {
$UserId = $_POST['user_id'];
$UserName = $_POST['name'];
$UserType = $_POST['type'];
$Gender = $_POST['gender'];
$Phone = $_POST['phone'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$Password = $_POST['pass'];

$sql = "INSERT INTO User_Credentials
VALUES ('$UserName','$UserId','$UserType','$Gender','$Phone','$Address','$Email','$Password')";
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
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="" method="POST">
  <div class="container">  
  <center>  <h1> User Registration Form</h1> </center>  
  <hr>  
  <label> Name </label>   
<input type="text" name="name" placeholder= "Name" size="25" required />   
<label> User ID: </label>   
<input type="text" name="user_id" placeholder="User Id" size="15" required />    
<div>  
<label>   
User Type :  
</label>   
  
<select id="multiselect" name = "type">  
<option value="User Type" >User Type</option>  
<option value="Admin" >Admin</option>  
<option value="User" >User</option>   
</select>  
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone Number :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" value="address" name ="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="pass" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" required>  
    <button type="submit" class="registerbtn" name = "submit">Register</button>   
    Already have an account?<a href="User_login.php"> LOGIN </a> 
</form>  
</body>  
</html>  