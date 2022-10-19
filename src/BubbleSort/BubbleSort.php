<?php
namespace Diego\Algoritmos\BubbleSort;
class BubbleSort
{
    public function execute(array $array): array
    {
        for($i=count($array) -1; $i >0; $i--){
            $change = 0;
            for ($j=0; $j < $i; $j++) {
                if ($array[$j] > $array[$j+1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j +1];
                    $array[$j +1] = $temp;
                    $change++;
                }
            }
            if ($change < 1) break;
        }

        return $array;
    }
}
