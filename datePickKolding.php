<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:#c9c9af;">

<div>
    <h1>Sol opgang & Ned gang i Kolding</h1>
    <form class="mb-3" method="POST" action="kbh.php">
    
    <button type="submit" class="btn btn-primary">København</button>
  </form>
</div>
<div>
    
    <form class="mb-3" method="POST" action="index.php">
    <button type="submit" class="btn btn-primary">Menu</button>
  </form>
</div>

<?php

  if(isset($_POST['submit'])) {
      $date = $_POST['date'];
      $dt = explode("-",$date);
      echo "</br>";
      if(!checkdate($dt[0],$dt[1],$dt[2])){
        
        
        echo "</br>";
        
        $latitude = 55.4915505;
        $longitude = 9.4065603;
      
        $solOpgang =date_sun_info(strtotime($dt[2] . "-" . $dt[1] . "-" . $dt[0]),$latitude,$longitude);
        $solOpgang =date_sun_info(strtotime($dt[2] . "-" . $dt[1] . "-" . $dt[0]),$latitude,$longitude);
        echo "</br>";
        $solop=date("H:i:s",$solOpgang['sunrise']);
        
        echo "</br>";
     
        $solned=date("H:i:s",$solOpgang['sunset']);
    
        echo "</br>";
        $day = DateTime::createFromFormat('d-m-Y', $dt[2] . "-" . $dt[1] . "-" . $dt[0]);
    $dato = $day->format('l');?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">By</th>
      <th scope="col">Dag</th>
      <th scope="col">Sol Opgang</th>
      <th scope="col">Sol Nedgang</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo "Kolding" ?></th>
      <td><?php echo $dato ?></td>
      <td><?php echo $solop ?></td>
      <td><?php echo $solned ?></td>
    </tr>
   
  </tbody>
</table>


        
      <?php  
    }
    
     
  }
  ?>
    
</body>
</html>



