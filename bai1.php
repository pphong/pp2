<!DOCTYPE html>
<html lang="en">
    <head
        <meta charset="UTF-8" >
        <title>Pham Phong bt 1403</title>
    </head>

    <body>        
        <?php
                echo "BÀI 1";
                echo "</br>";
                echo "</br>";

                echo "Lap Trinh Web 1";
                echo "</br>";
                $str = "Chào mừng bạn đến với môn học Lập Trình Web 1";

                foreach (explode(" ", $str) as $s) {
                    echo "$s";
                    echo "</br>";
                }
        ?>
        </br>
        </br>
        </br>
        </br>
	<form method="post" action="bai6.php">
            <input type="submit" name="back" value="Back">
        </form>
    </body>
    
</html>
        