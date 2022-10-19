<?php

require_once '/var/www/vendor/autoload.php';

$bubbleSort = new \Diego\Algoritmos\BubbleSort\BubbleSort();
echo"####Bubble Sort###\n";
echo "Ordenando o array [10,7,4,11]\n";
print_r($bubbleSort->execute([10,7,4,11]));
echo "#######\n";
