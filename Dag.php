<?php
 
 class days{
 
    
    var $whichDay;
    var $tide;  
    var $cityName;  
    var $solop;
    var $solNed;
   
          

    function __construct($n,$wd, $t,$so,$sn) {
        $this->cityName = $n;       
        $this->whichDay = $wd;
        $this->tide= $t;        
              
        $this->solNed = $sn;
        $this->solop = $so;

      }
      
 }

?>