<?php
                $str = "";
                $str = $_POST['field'];
                echo "Chuỗi có dấu :            ".$str;
                echo "</br>";
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
                    echo "Chuỗi không dấu, thay - :         ".str_replace(" ","-",$str);
                }