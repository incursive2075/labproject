<?php 


/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/

require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Fetch Data From Database in Php</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Fetch Data From Database in Php</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> Name </td>
                  <td> Email</td>
                  <td> phone </td>
                  <td> Address</td>
                  <td> Where from </td>
                  <td> Where to</td>
                  <td>Arrivals</td>
                  <td>Leaving</td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['source']; ?></td>
                  <td><?php echo $row['destination']; ?></td>
                  <td><?php echo $row['arrivals']; ?></td>
                  <td><?php echo $row['leaving']; ?></td>


                  <!-- <td><a href="#" class="btn btn-primary">Edit</a></td>   -->
                  <!-- <td><a href="#" class="btn btn-danger">Delete</a></td>   -->
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>