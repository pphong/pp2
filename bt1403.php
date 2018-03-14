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
        echo "</br>";
        
        
        <h4>Bai 2</h4>
        <form method="post" action="KQbt2.php">
            <input type="date" name="date">
            <input type="submit" name="submit" value="submit">
        </form>
        
        
    </body>
</html>