<?php
            echo "Ket Qua bai 4 : ";
            echo "</br>";

            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $cal = $_POST['cal'];
            echo "$n1 $cal $n2 = ";
            switch ($cal){
                case "+" : $r = $n1 + $n2 ; echo $r;break;
                case "-" : $r = $n1 - $n2 ; echo $r;break;
                case "*" : $r = $n1 * $n2 ; echo $r;break;      
                case "/" : $r = $n1 / $n2 ; echo $r;break;
            }
            