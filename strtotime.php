<?php

echo '日期：2019-06-31' . PHP_EOL;
echo date("Y-m-d",strtotime("2019-06-31")) . PHP_EOL;

echo "\n";
echo "2019-03-31的上一个月\n" ;
echo date('Y-m-d', strtotime('-1 month', strtotime('2019-03-31'))) . PHP_EOL;
echo date('Y-m-d', strtotime('last month', strtotime('2019-03-31'))) . PHP_EOL;
echo date('Y-m-d', strtotime('last day of -1 month', strtotime('2019-03-31'))) . PHP_EOL;

echo "\n";
echo "2019-03-31的下一个月\n" ;
echo date('Y-m-d', strtotime('+1 month', strtotime('2019-03-31'))) . PHP_EOL;
echo date('Y-m-d', strtotime('next month', strtotime('2019-03-31'))) . PHP_EOL;
echo date('Y-m-d', strtotime('last day of +1 month', strtotime('2019-03-31'))) . PHP_EOL;

echo "\n";
echo date('Y-m-d', strtotime('last day of +1 month', strtotime('2019-02-28'))) . PHP_EOL;
echo date('Y-m-d', strtotime('last day of -1 month', strtotime('2019-02-28'))) . PHP_EOL;
?>
