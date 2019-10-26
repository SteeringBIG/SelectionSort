<?php
    echo '<pre>';

    $mass = CreateArray();

    $massCount = count($mass);
    $i = 0;
    while ($i++ < $massCount) {
        echo '<br> ---------------------------------------- <br>';
        $mass = sortArray($mass, $i, $massCount);
    }

    //========================================
    echo '</pre>';

    function sortArray($mass, $i, $massCount)
    {
        echo '<br>';
        echo '- start -] ' . $i . ' [--';

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

        echo '<br>' . '- min z -] ' . $a . ' [--';
        echo '<br>' . '- min   -] ' . $min . ' [--' . '<br>';
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
        //echo '<br>-------<br>';
        return $mass;
    }
?>