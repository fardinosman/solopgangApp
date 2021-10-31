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

    <div>
            <table class="table table-sm table-dark">
                <thead>
                    <tr>
                    <th scope="col">By</th>
                    <th scope="col">Day</th>
                    <th scope="col">Tide</th>
                    <th scope="col">Sol Opgang</th>
                    <th scope="col">Sol Nedgang</th>
                    </tr>
                </thead>
            <tbody>
            <?php
            $latitude = 55.4915505;
            $longitude = 9.4065603;
            include('./CityKolding.php');
            include('./Dag.php');
            include('./calculateDag.php');
             $weekdag = new WeekDay();
             $length = 6;
              /*for ($i = 0; $i < $length; $i++) {
                $weekendDay = $weekdag->currentDay($length)
                echo  $length->name . " " . $sol->wichDay . " " . $sol->tide . " " . $sol->solop . " " . $sol->solNed . "</br>";
              }*/
             $weekendDay = $weekdag->currentDay(0);
             $ligeTid = $weekdag->currentTime(1);
             $solOpGang = $weekdag->solOpgang(1,$latitude,$longitude);
              $solNedGang = $weekdag->solNed(1,$latitude,$longitude);
              $city = $weekdag->City("Kolding");



            $day1 = new days($city,$weekdag->currentDay(0),$ligeTid,$weekdag->solOpgang(0,$latitude,$longitude),$weekdag->solNed(0,$latitude,$longitude));
            $day2 = new days($city,$weekdag->currentDay(1),$ligeTid,$weekdag->solOpgang(1,$latitude,$longitude),$weekdag->solNed(1,$latitude,$longitude));
            $day3 = new days($city,$weekdag->currentDay(2),$ligeTid,$weekdag->solOpgang(2,$latitude,$longitude),$weekdag->solNed(2,$latitude,$longitude));
            $day4 = new days($city,$weekdag->currentDay(3),$ligeTid,$weekdag->solOpgang(3,$latitude,$longitude),$weekdag->solNed(3,$latitude,$longitude));
            $day5 = new days($city,$weekdag->currentDay(4),$ligeTid,$weekdag->solOpgang(4,$latitude,$longitude),$weekdag->solNed(4,$latitude,$longitude));
            $day6 = new days($city,$weekdag->currentDay(5),$ligeTid,$weekdag->solOpgang(5,$latitude,$longitude),$weekdag->solNed(5,$latitude,$longitude));
            $day7 = new days($city,$weekdag->currentDay(6),$ligeTid,$weekdag->solOpgang(6,$latitude,$longitude),$weekdag->solNed(6,$latitude,$longitude));
               $sol = array($day1,$day2,$day3,$day4,$day5,$day6,$day7);
                   foreach($sol as $sol){
                    if($sol->whichDay == $weekendDay = $weekdag->currentDay(0)){
                    ?>
                   
                   <tr>
                       <th scope="row"><?php echo $sol->cityName?></th>
                       <td><?php echo $sol->whichDay  ?> </td>
                       <td><?php echo $sol->tide?> </td>
                       <td><?php echo $sol->solop?></td> 
                       <td><?php echo $sol->solNed?> </td>

                     </tr>
                       <?php 
                    }else{?>

                    <tr>
                       <th scope="row"><?php echo $sol->cityName?></th>
                       <td><?php echo $sol->whichDay  ?> </td>
                       <td><?php echo "***" ?></td>
                       <td><?php echo $sol->solop?></td> 
                       <td><?php echo $sol->solNed?> </td>
                     </tr>
                        <?php
                    }

                   } ?>


                 
             
              
                
                
               
            </tbody>
        </table>
    </div>
    <div>
        <h1>Se solopgang og nedgang for specifik dato.</h1>
    </div>
    <div >
            
            <form action="datePickKolding.php" method="POST">
                <input  type="date" name="date">
                <input type="submit" name="submit" value="submit">
            </form>


    </div>
    
</body>
</html>
