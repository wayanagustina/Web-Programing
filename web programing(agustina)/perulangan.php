<?php

require "array.php";

echo "\n";

for ($i = 0; $i < count($biodata['hobi']); $i++) {
    echo $biodata['hobi'][$i] . PHP_EOL;
}

echo "\n";

$a = [
    'katak', 'kodok', 'siput', 'lele', 'gurame', 'ayam', 'makan', 'tidur'
];

for ($b = 0; $b < count($a); $b++){
    echo $a[$b] . PHP_EOL;
}

echo "\n";

$k = 0;
while($k < 10) {
    echo "mantap" . PHP_EOL;
    $k++;
}
echo "\n";
// do {
//     echo "mantap" .PHP_EOL;

//     $k++;
// }while($k < 10);

// foreach ($biodata as $key => $value) {
//     echo $key . ' : ' . $value . PHP_EOL;
// }



// TUGAS    
foreach ($biodata as $key => $value) {
    if ($key === 'hobi') {
        echo $key . ' : ' . PHP_EOL;
        $n = 1;
        foreach ($value as $hobi) {
            echo $n . ". " . $hobi . PHP_EOL;
            $n++;
        }
    } else {
        echo $key . ' : ' . $value . PHP_EOL;
    }
}
