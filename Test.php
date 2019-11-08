<?php
$a = range(1, 1000);
$i = 0;
 
$start = microtime(true);
while (++$i < 1000) {
        $b = isset($a)? $a : NULL;

}
 
var_dump(microtime(true) - $start);


$a = range(1, 1000);
$i = 0;
 
$start = microtime(true);
while (++$i < 1000) {
    if (isset($a)) {
                $b = $a;
                    
    } else {
                $b = NULL;
                    
    }

}
var_dump(microtime(true) - $start);
?>
