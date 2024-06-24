<?php
include 'conn.php';
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $orderitem = $_POST['orderitem'];



  $sql = "insert into `table4` (name, email, address, orderitem)
  values('$name','$email','$address', '$orderitem')";

  $result=mysqli_query($conn, $sql);
  if($result)
  {
      header('location:display.php');
  }
  else{
    die(mysqli_error($conn));

  }
}


?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> order</title>
 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
h1{
color:#A52A2A;
    font-family:"Sofia",  sans-serif;


  }
h3{
color:#a0522d ;
  font-family: cursive;
}
p  {
  color:#8b4513;
  font-family: cursive;
font: italic bold 15px monospace;
}
body{
 background-color: #d2b48c;
 color: #FDEDEC;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #964B00;
}

li {
  float: RIGHT;
}

li a {
  display: block;
  color: WHITE;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.button{
   
   width: 120px;
   height:45px;
   margin: 0 10px;
   background: linear-gradient(to right, #966a78, #b5a585);
   border-radius: 30px;
   border: 0;
   outline: none;
   color: #fff;
   cursor: pointer;
}
.button1
{
 margin-top: 50px;
   margin-left: 650px;
}
  </style>  
</head>
  <body style="background-color: #ba8759;">
  <ul>
<li> <a href="index.php">Order!</a></li>
 <li> <a href="biscuits.php">Biscuits</a></li>
  <li><a href="bread.php">Bread</a></li>
  <li><a href="coffee.php">Coffee</a></li>
  <li><a href="cheezy.php">Cheese</a></li>
  <li><a class="active" href="cake.php">Cakes</a></li>
  <li><a class="active" href="main.php">Main</a></li>
  </ul>

  <font align="center"><center>

<h1 style="color:#A52A2A;font-size:40px; ">ORDER</h1>

<hr>


 <p style="color:#FDEDEC; font-size:20px ">Thank you for choosing us, providing you with our best that your tastebuds wont forget and will crave for more and more </p>
 
  
  
</center>

  <div class="container">
     <form method = "post">
       <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control py-2"
        placeholder = "Enter your name: "
        name="name" required>
       </div>
       <br>
       <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control"
        placeholder = "Enter your email: "
        name="email" required>
       </div>
       <br>
       
       <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control"
        placeholder = "Enter your address: "
        name="address" required>
       </div>
       <br>
       <div class="form-group">
        <label>Order</label>
        <input type="text" class="form-control"
        placeholder = "Enter items that you want to order: "
        name="orderitem" required>
       </div>
           </div>
      


      <button type="submit" name="submit" class="button button1 center">Submit</button>

    </form>
    
  </body>
</html>