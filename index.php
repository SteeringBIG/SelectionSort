<?php
    echo '<pre>';

    $mass = CreateArray();

    $massCount = count($mass);
    $i = 0;
    while ($i++ < $massCount) {
        $mass = sortArray($mass, $massCount, $i);
    }

    echo '</pre>';
    //========================================

    function sortArray($mass, $massCount, $i)
    {
        $key = $massCount;
        while ($key > $i) {
            $keyA = $key;
            $keyB = $key - 1;
            $a = $mass[$keyA];
            $b = $mass[$keyB];

            if ($a < $b){
                $mass[$key] = $b;
                $mass[$key - 1] = $a;
            }

            $key = $key - 1;
        }
        echo '<br>' . print_r($mass);
        return $mass;
    }

    function CreateArray()
    {
        $mass = array();
        $massCount = 9;
        $nStart = 0;
        $nEnd = 100;
        $key=0;
        while ($key++ < $massCount) {
            $mass[$key] = rand($nStart, $nEnd);
        }
        echo '<br>' . print_r($mass) . '<br>';
        echo '<br>-------<br>';
        return $mass;
    }
?>