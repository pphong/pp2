<!DOCTYPE html>
<html lang="en">
    <head
        <meta charset="UTF-8" >
        <title>Pham Phong bt 1403</title>
    </head>

    <body>        
	<?php
            echo "BÀI 3 ";
            echo "</br>";
            echo "</br>";
            
            $n = rand(10,100);$m = [];
            echo "Xử lý mảng gồm $n phần tử random như sau : </br> [";
            $min=$max=0;
            for ($i = 0 ; $i < $n ; $i++)
            {
                $m[$i] = rand(-100,100);
                echo "$m[$i]   ";
                
                if ($m[$i]>$max) $max = $m[$i];
                if ($m[$i]<$min) $min = $m[$i];
            }
            echo "    ]</br>";
            $sum = 0;
            foreach ($m as $pt){$sum += $pt;}
            echo "</br>";
            echo "Tong : $sum";
            echo "</br>";
            echo "Min :  ".$min;
            echo "</br>";
            echo "Max :  ".$max;
            echo "</br>";
            
            echo "</br>";
            echo "</br>";
        ?>
        <input type="button" value="Click Here To Get A New Random Array" onclick="history.go(0)">
        </br>
        </br>
        </br>

	<form method="post" action="bai6.php">
            <input type="submit" name="back" value="Back">
        </form>
    </body>
    
</html>

