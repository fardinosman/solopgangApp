<?php
    class WeekDay{
        public function currentDay($value){
            $currentDay =  time()+($value*24*60*60);
            $today = getdate($currentDay);
            $wichDay =$today['weekday'];
            return $wichDay;
        }
        public function City($value){
            $city = $value;
            return $city;
        }
        public function currentTime($value){
        $currentDay =  time();
        $today = getdate($currentDay);
        $wichDay =$today['weekday'];
        $tide =$today['hours'];
        $minut =$today['minutes'];
        $time = $tide . " : " . $minut; 
            return  $time;
        }

        public function solOpgang($currentDay,$latitude,$longitude){
            $solOpgang =date_sun_info(time()+($currentDay*24*60*60),$latitude,$longitude); 
          $solop=date("H:i:s",$solOpgang['sunrise']);
          return $solop;
        }
        public function solNed($currentDay,$latitude,$longitude){
            $solOpgang =date_sun_info(time()+($currentDay*24*60*60),$latitude,$longitude); 
          $solned=date("H:i:s",$solOpgang['sunset']);
          return $solned;
        }

    }
    

?>