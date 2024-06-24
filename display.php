<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   -->
</head>
<style>
    body{
 
 font-color: #d2691e;
}
</style>
<body>
    
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>

      <th scope="col">Address</th>
      <th scope="col">Order Items</th>

    </tr>
  </thead>
 <div class="container">
      <button class="btn btn-primary my-5;btn btn-danger">
        <a href="index.php" class="text-light">Order More!</a>
    </button>
  <?php
  
        $sql = "Select * from `table4`";
        $result = mysqli_query($conn, $sql);
        if(($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {
               
                $name = $row['name'];
                $email = $row['email'];
               
                $address = $row['address'];
                $orderitem = $row['orderitem'];

                echo '<tr>
               
                <td scope="row">'.$name.'</td>
                <td>'.$email.'</td>
                
                <td>'.$address.'</td>
                <td>'.$orderitem.'</td>


                
              </tr>';
            }
        }
  ?>
    
  
</table>
</div>
</body>
</html>