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
        $min = $i;

        $a = $mass[$i];
        $b = $mass[$i + 1];
        while ($i < $massCount + 1) {
            if ($a < $b) {
                $min = $i;
            }

            $a =
            $b = $mass[$i + 1];

            $i++;

        }
        $n  = $mass[$n];
        $mass[$i] = $mass[$min];
        $mass[$min] = $n;

        echo '<br>' . '- min -] ' . $min . ' [--' . '<br>';
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