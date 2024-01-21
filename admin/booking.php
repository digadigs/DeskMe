<?php include_once('../admin/includes/config.php');

if(isset($_POST['submit'])){

$fname=$_POST['name'];
$emailid=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$bookingdate=$_POST['bookingdate'];
$bookingtime=$_POST['bookingtime'];
$noadults=$_POST['noadults'];
$nochildrens=$_POST['nochildrens'];
$bno=mt_rand(100000000,9999999999);
//Code for Insertion
$query=mysqli_query($con,"insert into tblbookings(bookingNo,fullName,emailId,phoneNumber,bookingDate,bookingTime,noAdults,noChildrens) values('$bno','$fname','$emailid','$phonenumber','$bookingdate','$bookingtime','$noadults','$nochildrens')");
if($query){
echo '<script>alert("Your order sent successfully. Booking number is "+"'.$bno.'")</script>';
echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
} else {
echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nanum+Gothic'>
    <title>DeskMe | Booking</title>
    <link rel=" shortcut icon" href="../assets/favicon.png"/>
</head>
<body>

<form class="booking-form" action="#" method="post">
  <div class="elem-group">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" placeholder="Name:" required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail:</label>
    <input type="email" id="email" name="email" placeholder="@gmail.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Mobile:</label>
    <input type="tel" id="phone" name="phonenumber" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date:</label>
    <input type="date" id="checkin-date" name="bookingdate" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date:</label>
    <input type="date" id="checkout-date" name="bookingtime" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select Desks:</label>
    <select id="room-selection" name="noadults" required>
        <option value="">Floor</option>
        <option value="connecting">Floor 1</option>
        <option value="adjoining">Floor 2</option>
        <option value="adjacent">Floor 3</option>
    </select>
  </div>
  <div class="elem-group">
    <select id="room-selection" name="nochildrens" required>
        <option value="">Desks</option>
        <option value="connecting">Desks 1A</option>
        <option value="adjoining">Desks 2A</option>
        <option value="adjacent">Desks 3A</option>
    </select>
  </div>
  <hr>
  <button type="submit" name="submit">Book Desk</button>
</form>
    
</body>
</html>

<style>

.booking-form {
  width: 250px;
  margin: 0 auto;
  padding: 30px;
  background: #fff;
  float: left;
  margin-left: 150px;
}

div.elem-group {
  margin: 10px 0;
}

div.elem-group.inlined {
  width: 100%;
  margin-left: 2.5%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: #1E4B74;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
  padding: 0 12px;
}

button:hover {
  background: #0a2a48;
}

</style>

<script>

var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}


var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}

</script>