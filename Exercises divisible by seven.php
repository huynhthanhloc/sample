<?php
$data = array (2,4,3,7,14);
$ch7 = "0";
$kch7 = "0";
for ($i = 0; $i < count($data); $i++){
    if ($data[$i] % 7 == 0){
       $ch7 += 1;
    }
    else{
       $kch7 += 1;
    }
    }
        if ($ch7 == 0 && $kch7 > 0)
            echo "Khong co so nao trong mang chia het cho 7" . "\n";
        elseif ($ch7 > 0 && $kch7 > 0){
            echo "Trong mang co $ch7 so chia het cho 7" . "\n";
            echo "Trong mang co $kch7 khong chia het cho 7" . "\n";
        }
        elseif ($ch7 == 1 && $kch7 == 0)
            echo "Trong mang co duy nhat $ch7 chia het cho 7" . "\n";
        elseif ($ch7 > 1 && $kch7 == 0)
                echo "Tat ca cac so trong mang deu chia het cho 7". "\n";

