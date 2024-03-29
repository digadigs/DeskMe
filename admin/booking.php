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
echo '<script>alert("Successful. Booking number is "+"'.$bno.'")</script>';
// echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
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

<div class="container">
<form class="booking-form" action="#" method="post">
<label for="name" style="font-weight: bold; font-size:25px; float:right; margin-right: -400px; margin-top: 200px">Map</label>
<label for="name" style="font-weight: bold; font-size:25px">Booking Form</label>
  <div style="display: flex; gap: 30px">
  <div class="elem-group" style="flex: 75%">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Name" required>
  </div>
  <div class="elem-group" style="flex: 100%">
    <label for="phone">Mobile Number:</label>
    <input type="tel" id="phone" name="phonenumber" placeholder="Mobile No." pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  </div>
  <div class="elem-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" required>
  </div>
  <div style="display: flex; gap: 30px">
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date:</label>
    <input type="date" id="checkin-date" name="bookingdate" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date:</label>
    <input type="date" id="checkout-date" name="bookingtime" required>
  </div>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select Preference:</label>
    <select class="form-control" id="floor-selection" name="noadults" onchange="toggleImageFloor()" required>
        <option value="">Floor</option>
        <option value="Floor 1">Floor 1</option>
        <!-- <option value="Floor 2">Floor 2</option>
        <option value="Floor 3">Floor 3</option> -->
    </select>
  </div>

  <!-- Floor -->
  <div id="Floor 1" class="image-container-floor">
    <img src="../assets/Floor1.png" alt="Image1" style="width: 650px; height:350px; position: absolute; top: 200px; right: 215px;">
  </div>
  <div id="Floor 2" class="image-container-floor">
    <img src="../assets/Floor2.png" alt="Image2" style="width: 650px; height:350px; position: absolute; top: 200px; right: 215px;">
  </div>
  <div id="Floor 3" class="image-container-floor">
    <img src="../assets/Floor2.png" alt="Image2" style="width: 650px; height:350px; position: absolute; top: 200px; right: 215px;">
  </div>

  <div class="elem-group">
    <select class="form-control" id="desk-selection" name="nochildrens" onchange="toggleImage()" required>
        <option value="">Desks</option>
        <option value="Desk 1A">Desk 1A</option>
        <option value="Desk 1B">Desk 1B</option>
        <option value="Desk 1C">Desk 1C</option>
        <!-- <?php 
        $ret=mysqli_query($con,"select id,tableNumber from tblrestables");
        while($row=mysqli_fetch_array($ret)){
        ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['tableNumber'];?></option>
        <?php } ?> -->
    </select>
  </div>
  <button type="submit" name="submit">Book Desk</button>
  <a href="../pages/index.php"><p style="float: right; margin-right: 10px; color: black; font-family: Poppins, sans-serif; font-size: 15px;">Back to Home</p></a>

  <!-- Desk -->
  <div id="Desk 1A" class="image-container">
    <img src="../assets/Highlight 1A.png" alt="Image 1" style="width: 650px; height:350px; position: absolute; top: 200px; right: 215px;">
  </div>
  <div id="Desk 1B" class="image-container">
    <img src="../assets/Highlight 1B.png" alt="Image 2" style="width: 650px; height:350px; position: absolute; top: 200px; right: 215px;">
  </div>
  <div id="Desk 1C" class="image-container">
    <img src="../assets/Highlight 1C.png" alt="Image 3" style="width: 650px; height:350px; position: absolute; top: 200px; right: 215px;">
  </div>

</form>
</div>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

.image-container {
  display: none;
}
.image-container-floor {
  display: none;
}

body{
  background-color: #f1f8fc;
}

.container {
  background-color: white;
  margin-top: 100px;
  margin-bottom: 25px;
  margin-left: 150px;
  margin-right: 150px;
  box-shadow: 10px 15px 20px rgba(0, 0, 6, 0.2);
  border-radius: 50px;
  display: grid;
  grid-template-columns: 40% 60%;
}

.booking-form {
  width: 400px;
  margin: 0 auto;
  padding: 30px;  
  margin-left: 50px;
}

div.elem-group {
  margin: 5px 0;
}

div.elem-group.inlined {
  width: 100%;
  margin-left: 2.5%;
}

label {
  display: block;
  font-family: "Poppins", sans-serif;
  padding-bottom: 10px;
  font-size: 1em;
}

input, select, textarea {
  border-radius: 15px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: .75em;
  font-family: "Poppins", sans-serif;
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
  height: 40px;
  background: #1E4B74;
  border: none;
  color: white;
  font-size: 1em;
  font-family: "Poppins", sans-serif;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 5px;
  padding: 0 12px;
  float: right;
}

button:hover {
  background: #0a2a48;
}


</style>

<script>

function toggleSecondDropdown() {
  var selectedValue = document.getElementById("floor-selection").value;
  var secondDropdown = document.getElementById("desk-selection");
  secondDropdown.style.display = (selectedValue !== "none") ? "block" : "none";
}

// Desks
function toggleImage() {
  var selectedValue = document.getElementById("desk-selection").value;
  var allImages = document.getElementsByClassName("image-container");
  for (var i = 0; i < allImages.length; i++) {
    allImages[i].style.display = "none";
  }
  if (selectedValue !== "none") {
    document.getElementById(selectedValue).style.display = "block";
  }
}

// Floor
function toggleImageFloor() {
  var selectedValue = document.getElementById("floor-selection").value;
  var allImages = document.getElementsByClassName("image-container-floor");
  for (var i = 0; i < allImages.length; i++) {
    allImages[i].style.display = "none";
  }
  if (selectedValue !== "none") {
    document.getElementById(selectedValue).style.display = "block";
  }
}

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