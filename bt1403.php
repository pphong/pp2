<!DOCTYPE html>
<html lang="en">
    <head
        <meta charset="UTF-8" >
        <title>Pham Phong bt 1403</title>
    </head>

    <body>

        <h4>Bai 1</h4>
        <?php
        echo "Lap Trinh Web 1";
        echo "</br>";
        $str = "Chào mừng bạn đến với môn học Lập Trình Web 1";

        foreach (explode(" ", $str) as $s) {
            echo "$s";
            echo "</br>";
        }
        ?>
        
        
        <h4>Bai 2</h4>
        <form method="post" action="KQbt2.php">
            <input type="date" name="date">
            <input type="submit" name="submit" value="submit">
        </form>
        </br>
        
        <h4>Bai 3</h4>
        
        <?php
            $n = rand(10,100);$m = [];
            echo "Xử lý mảng gồm $n phần tử như sau : </br> [";
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
        
        <h4>Bai 4</h4>
        
        <form method="post" action="res.php">
            Số 1 : <input type="text" name="n1">;
            Số 2 : <input type="text" name="n2">;
            </br>
            <input type="radio" name="cal" <?php if (isset($cal) && $cal=="min");?> value="-"> Trừ 
            <input type="radio" name="cal" <?php if (isset($cal) && $cal=="plu");?> value="+"> Cộng
            </br>
            <input type="radio" name="cal" <?php if (isset($cal) && $cal=="mul");?> value="*"> Nhân
            <input type="radio" name="cal" <?php if (isset($cal) && $cal=="div");?> value="/"> Chia
            </br>
            </br>

            <input type="submit" name="submit" value="submit">
        </form>
        
        </br>
        </br>
        
        <h4>Bai 5</h4>
        <form method="post">
            Nhập chuỗi không dấu : <input type="text" name="field">
            </br>

            <?php
                $str = $_POST['field'];
                if (!$str) {echo "Mời nhập !";}
                else {
                    $unicode = array(
                        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
                        'd'=>'đ',
                        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                        'i'=>'í|ì|ỉ|ĩ|ị',
                        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
                        );
                    foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
                    echo str_replace(" ","-",$str);
                }
            ?>
        </form>
        
        </br>
        </br>
        
        <h4>Bai 6</h4>
        
        
    </body>
</html>