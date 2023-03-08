<?php

function isChecked($inputName,$value){
    if (isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value,$_REQUEST[$inputName])){
        echo "checked";
    }
}

function isFruitChecked($value){
    if (isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value,$_REQUEST['fruits'])){
        echo "checked";
    }
}
//Single Or Multiple
//function displayOptions($options){
//    foreach ($options as $option){
//        $x=strtolower($option);
//        $y=ucwords($option);
//        echo "<option value=$x>$y</option>";
//    }
//}
function displayOptions($options,$selectedValues){
    foreach ($options as $option){
        $x=strtolower($option);
        $y=ucwords($option);
        $selected='';
        if(in_array($x,$selectedValues)){
            $selected='selected';
        }
       echo "<option value=$x $selected>$y</option>";
       // printf( "<option value='%s' %s>%s</option>\n",$x,$selected,$y);
    }
}