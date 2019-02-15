<!DOCTYPE HTML>
<html>
    <head>
     
    </head>
    <body>
        <?php
        $number=array(
            array(1,2,3,4,5,6,7,8,9,10),
            array(34,12,56,78,34,67,39,18)
        );
            $max = $number[0][0];
            for ($i=0;$i<2;$i++){
                for ($j=0;$j<count($number[$i]);$j++){
                    if ($max < $number[$i][$j]) {
                            $max = $number[$i][$j];  
                     }
                }
                    
            } 
        echo "số lớn nhất là : ".$max;

            
        
    
    
      
       

    ?>
    </body>
</html>