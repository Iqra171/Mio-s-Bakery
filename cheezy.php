<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<HEAD>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
h1{
color:#a0522d ;
    font-family: "Sofia", sans-serif;
font-size:60px;
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
 font-color: #d2691e;
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
  </style>
</head>
<BODY> 
  <ul>
    <li> <a href="index.php">Order!</a></li>
 <li> <a href="biscuits.php">Biscuits</a></li>
  <li><a href="bread.php">Bread</a></li>
  <li><a href="coffee.php">Coffee</a></li>
  <li><a href="cheezy.php">Cheese</a></li>
  <li><a class="active" href="cake.php">Cakes</a></li>
  <li><a class="active" href="main.php">Main</a></li>
  </ul>
<img src="https://tse4.mm.bing.net/th?id=OIP.iXuJuqWiDrddvEwbyly2HwHaHa&pid=Api&P=0" alt="Trulli" width="378" height="400" align="right" style="border-radius:0% 0% 00% 40%">
<h1 align="center">Cheese</h1>


<h3 style="font-size:30px;"align="center"><b><u>Pizza</u></b></h3>
<p style="font-size:18px;"align="center">
Are you a Pizza lover.Order this large pizza slice for your self right now.
<p style="font-size:16px;"align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs 1150</p>

  <h3 style="font-size:30px;"align="center"><b><u>Lasagna</u></b></h3>
<p style="font-size:18px;"align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lasagna is here! Layered with a rich meat sauce and a creamy parmesan white sauce </p>
<p style="font-size:16px;" align="center">Rs 599</p>

<h3 style="font-size:30px;"align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Pasta</u></b></h3>
<p style="font-size:18px;"align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; unleavened dough of wheat flour mixed with water or eggs, and formed into   <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  sheets or other shapes.</p>
<p style="font-size:16px;"align="center">Rs 409</p>

<h3 style="font-size:30px;"align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Beef Burger</u></b></h3>
<p style="font-size:18px;"align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sharing is not an option! You will want this 100% pure beef,topped with onion, 
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  pickles, ketchup and mustard on a soft, fluffy bun .
 </p>
<p style="font-size:16px;"align="center">Rs 499</p>


</body>
</html>