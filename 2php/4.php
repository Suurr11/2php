<?php

        //OP MTK


        $a = 4;
        $b = 5;
        $c = $a + $b;

        echo $c .'<br>';

        $c = $a - $b;

        echo $c .'<br>';


        $c = $a * $b;

        echo $c .'<br>';

        $c = $a / $b;

        echo floor ($c).'<br>';

        $c = $a % $b;
        echo $c;
        echo '<br>';


        //OP LOGIKA

        $c = $a < $b;
        echo $c;

        echo '<br>';

        $c = $a > $b;
        echo $c;
        echo '<br>';

        $c = $a == $b;
        echo $c;

        echo '<br>';

        $c = $a != $b;
        echo $c;
        echo '<br>';
       
        //INCREMENT
        $a++;
        echo $a;

        //OP STRING

        $kata = 'Jawa';
        $kata2 = 'Awaj';
        $hasil = $kata.$kata2;
        
        $hasil .= ' Jawaaaaaaaaa';
        echo $hasil;

?>