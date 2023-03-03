<?php

/*
 * unix epoch
 * unix timestamp
 *
 */

//echo time(); //1677785138 //second e passe
//echo microtime(true); //1677862388.3609
//echo microtime(false); //0.08738500 1677862482

/*
$mt=microtime(true);
printf("%10.18f",$mt); //1677862583.752466917037963867
*/

//profiling
//benchmark :akta factorial bahir kortey koto time lagtesey?

$startTime=microtime(true);
factorial(1000);
sleep(2);
$endTime=microtime(true);
$executionTime=$endTime-$startTime;
printf("%10.8f",$executionTime);


function factorial($n){
    $result=1;
    for ($i=1;$i<=$n;$i++){
        $result*=1;
    }
    return $result;
}
/*
echo date('d/m/y'); // 03/02/23
echo date('d/m/Y'); // 03/03/2023
echo date('d/F/Y'); // 03/March/2023

*/