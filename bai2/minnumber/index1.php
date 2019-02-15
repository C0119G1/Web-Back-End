<html>
<head>
   <meta charset="utf-8">
   <title>Tìm giá trị nhỏ nhất trong mảng sử dụng phương thức</title>
</head>
<body>
<form method="post">
   <input type="text" name="number" placeholder="...".value>
   <input id="submit" type="submit" name="submit" value="Kết quả">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $number = $_POST ["number"];

   $array = explode(",",$number);
   $min = $array[0];
   $index = 0;
   $lenght = count($array);
   for ($i = 0 ; $i < $lenght ; $i++){
       if ($array[$i] < $min) {
           $min = $array[$i];
           $index = $i;
       }
   }
   print_r($array);
   echo "mảng có min là: ".$min." chỉ số index là: ".$index;
}

?>
</body>
</html>

            
        
    
    
      
       

