<!DOCTYPE HTML>
<html>
    <head>
     
    </head>
    <body>
        <?php
        $number=array(1,2,3,4,5,6,7,8,9,10);
        $min =[0];
        $index=0;
        $arraylength=count($number);
            for ($i=0;$i<$arraylength;$i++){
                if ($min > $number[$i]) {
                        $min = $number[$i];
                        $index=$i;
                        
                     }
                    
                 } 
        echo "số nhỏ nhất là : ".$min."  giá trị index là:".$index;

            
        
    
    
      
       

    ?>
    </body>
</html>