<?php
    echo '<pre>';

    $start = microtime(true);
    $mass = CreateArray();
    $massCount = count($mass);
    $time = microtime(true) - $start;
    echo '<br>Время создания массива из ' . $massCount . ' элементов: ' . $time . '<br>';

    //=== 1 =====================================
    $start = microtime(true);
    $i = 0;
    while ($i++ < $massCount) {
        //echo '<br> ---------------------------------------- <br>';
        $mass1 = sortArray($mass, $i, $massCount);
    }
    $time = microtime(true) - $start;
    echo '<br>Время выполнение сортировки 1: ' . $time . '<br>';

    //echo '<br>' . print_r($mass1);
    //=== 2 =====================================
    $start = microtime(true);
    $mass2 = SelectionSort($mass);
    $time = microtime(true) - $start;
    echo '<br>Время выполнение сортировки 2: ' . $time . '<br>';

    //echo '<br>' . print_r($mass2);
    //========================================

    echo '</pre>';

    function sortArray($mass, $i, $massCount)
    {
//        echo '<br>';
//        echo '- start -] ' . $i . ' [--';

        $n  = $i;
        $nz = $mass[$i];
        $min = $i;

        $a = $mass[$i];
        while ($i <= $massCount) {
            if ($a > $mass[$i]) {
                $min = $i;
                $a = $mass[$i];
            }
            $i++;
        }

        $mass[$n] = $mass[$min];
        $mass[$min] = $nz;

//        echo '<br>' . '- min z -] ' . $a . ' [--';
//        echo '<br>' . '- min   -] ' . $min . ' [--' . '<br>';
//        echo '<br>' . print_r($mass);
        return $mass;
    }

    function SelectionSort($arr) {
        $n = count($arr);
        for($i = 1; $i < count($arr); $i++) {
            $min = $i;
            for($j = $i + 1; $j < $n; $j++) {
                if($arr[$j] < $arr[$min]) $min = $j;
            }
            list($arr[$i], $arr[$min]) = array($arr[$min], $arr[$i]);
        }
        return $arr;
    }

    function CreateArray()
    {
        $mass = array();
        $massCount = 10000;
        $nStart = 0;
        $nEnd = 100;
        $key=0;
        while ($key++ < $massCount) {
            $mass[$key] = rand($nStart, $nEnd);
        }
        //echo '<br>' . print_r($mass) . '<br>';
        //echo '<br>-------<br>';
        return $mass;
    }
?>