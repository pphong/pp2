<?php
            echo "Ket Qua : ";
            echo "</br>";
            
            if (isset($_POST['submit'])) {
                $d = $_POST['date'];   
                $date = date_create("$d");
                echo date_format($date,"d/m/y");
                echo "</br>";
                echo date_format($date, "F d, Y");
            }