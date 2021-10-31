<?php
  class Kolding{
      
      
        
    public function currentDay(){
         $currentDay =  time();
         $date = "01-04-2020";
         $dt = explode("-",$date);
         $today = getdate($currentDay);
         $wichDay =$today['weekday'];
         $tide =$today['hours'];
        $minut =$today['minutes'];
 
          $latitude = 55.4915505;
          $longitude = 9.4065603;
          $cityName = "Kolding";
          $solOpgang =date_sun_info(time(),$latitude,$longitude); 
          $solop=date("H:i:s",$solOpgang['sunrise']);
          $solNed=date("H:i:s",$solOpgang['sunset']);
          $solNedGang =date_sun_info(time(),$latitude,$longitude);
          $kolding = array($cityName,$solop,$solNed,$wichDay,"Current Time",$tide,":",$minut);
        
          $length = count($kolding);
          for ($i = 0; $i < $length; $i++) {
            print $kolding[$i] . " ";
          }
        


    }
    public function otherDays(){
        $day1 =  time()+(1*24*60*60);
        $day2 =  time()+(2*24*60*60);
        $day3 =  time()+(3*24*60*60);
        $day4 =  time()+(4*24*60*60);
        $day5 =  time()+(5*24*60*60);
        $day6 =  time()+(6*24*60*60);
        $days=array($day1,$day2,$day3,$day4,$day5,$day6);
        
        $date = "01-04-2020";
        $dt = explode("-",$date);
        $today = getdate($day1);
        $wichDay =$today['weekday'];
        $tide =$today['hours'];
       $minut =$today['minutes'];

         $latitude = 55.4915505;
         $longitude = 9.4065603;
         $cityName = "Kolding";
         $solOpgang =date_sun_info(time(),$latitude,$longitude); 
         $solop=date("H:i:s",$solOpgang['sunrise']);
         $solNed=date("H:i:s",$solOpgang['sunset']);
         $solNedGang =date_sun_info(time(),$latitude,$longitude);
         $dag1 = array($cityName,$solop,$solNed,$wichDay,"Current Time",$tide,":",$minut);
         $dag2 = array($cityName,$solop,$solNed,$wichDay,$tide,$minut);
         $dag3 = array($cityName,$solop,$solNed,$wichDay,$tide,$minut);
         $dag4 = array($cityName,$solop,$solNed,$wichDay,$tide,$minut);
         $dag5 = array($cityName,$solop,$solNed,$wichDay,$tide,$minut);
         $dag6 = array($cityName,$solop,$solNed,$wichDay,$tide,$minut);
         
       
         $length = count($dag1);
         for ($i = 0; $i < $length; $i++) {
           print $dag1[$i] . " ";
         }

       


   }
}

?>