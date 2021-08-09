<?php
include_once '../controllers/getReservation.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" type="text/css" href="../app/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../app/css/main.css">
 <title>Show Reservations </title>
</head>

<body>

 <table class="table">
  <thead class="thead-dark">



   <tr>
    <th>nom</th>
    <th>dateEntrer</th>
    <th>dateSortie</th>
    <th>type</th>
    <th>lit</th>
    <th>vue</th>
    <th>enfants</th>
    <th>prix</th>
   </tr>
  </thead>
  <tbody>
   <?php foreach ($getResrvations as $reservation) : ?>
    <tr>
     <td><?php echo $reservation['nom'] ?></td>
     <td><?php echo $reservation['dateEntrer'] ?></td>
     <td><?php echo $reservation['dateSortie'] ?></td>
     <td><?php echo $reservation['type'] ?></td>
     <td><?php echo $reservation['lit'] ?></td>
     <td><?php echo $reservation['vue'] ?></td>
     <td><?php echo $reservation['enfants'] ?></td>
     <td><?php echo $reservation['prix'] ?></td>

    </tr>
   <?php endforeach; ?>
  </tbody>
 </table>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>