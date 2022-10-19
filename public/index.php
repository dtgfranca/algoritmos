<?php

require_once '/var/www/vendor/autoload.php';

$bubbleSort = new \Diego\Algoritmos\BubbleSort\BubbleSort();
print_r($bubbleSort->execute([10,7,4,11]));

