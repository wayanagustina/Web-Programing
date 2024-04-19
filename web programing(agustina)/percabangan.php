<?php

// Untuk memanggil file
require"array.php";

if ($biodata['umur'] >= 25){
    echo $biodata['pekerjaan'] . PHP_EOL;
}

echo $biodata["pendidikan"] .PHP_EOL;

//enter
echo "\n";

if ($biodata['umur'] <= 25){
    echo $biodata['pekerjaan'] . PHP_EOL;
}   else {
    echo $biodata["pendidikan"];
}

echo "\n";

if ($biodata['umur'] >= 25) {
    echo $biodata['pekerjaan'] .PHP_EOL;
}  
elseif ($biodata['umur'] <= 10){
    echo $biodata['hobi'][0] .PHP_EOL;
    echo $biodata['hobi'][2] .PHP_EOL;
}   
else {
    echo $biodata('pendidikan');
}

echo "\n";

switch ($biodata['nilai']){
    case 'A':
        echo "sangat baik";
        break;
    case 'B':
        echo "baik";
        break;
    case 'C':
        echo "cukup";
        break;
    case 'D':
        echo "kurang";
        break;

    default:
        echo "E = Enginer";
        break;
}
