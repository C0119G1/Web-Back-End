<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
    <style> 
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc; 
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
    </head>
    <body>
    <h2>Read number</h2>
       <form method="POST">
          <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
          <input type = "submit" id = "submit" value = "Read"/>
       </form>
    <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["search"]; 
    if ($number <10 && $number >0){
        switch ($number) {
            case 0:
            echo "không";
            break;
            case 1:
            echo "một";
            break;
            case 2:
            echo "hai";
            break;
            case 3:
            echo "ba";
            break;
            case 4:
            echo "bốn";
            break;
            case 5:
            echo "năm";
            break;
            case 6:
            echo "sáu";
            break;
            case 7:
            echo "bảy";
            break;
            case 8:
            echo "tám";
            case 9:
            echo "chín";
            break;
        }
    }
    if ($number >= 10 && $number <20){
        $number1=$number - 10;
        switch ($number1) {
            case 0:
            echo "mười";
            break;
            case 1:
            echo "mười một";
            break;
            case 2:
            echo "mười hai";
            break;
            case 3:
            echo "mười ba";
            break;
            case 4:
            echo "mười bốn";
            break;
            case 5:
            echo "mười năm";
            break;
            case 6:
            echo "mười sáu";
            break;
            case 7:
            echo "mười bảy";
            break;
            case 8:
            echo "mười tám";
            case 9:
            echo "mười chín";
            break;
        }
    }
    if ($number >= 20 && $number < 100){
        $chuc =round(number/10);
        $donvi=round(number/10);
        $number3 = $chuc.$donvi;
        switch ($number3) {
            case 0:
            echo "mười";
            break;
            case 1:
            echo "mười một";
            break;
            case 2:
            echo "mười hai";
            break;
            case 3:
            echo "mười ba";
            break;
            case 4:
            echo "mười bốn";
            break;
            case 5:
            echo "mười năm";
            break;
            case 6:
            echo "mười sáu";
            break;
            case 7:
            echo "mười bảy";
            break;
            case 8:
            echo "mười tám";
            case 9:
            echo "mười chín";
            break;
    
}
?>


</body>
    </html>