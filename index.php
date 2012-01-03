<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jeppe
 * Date: 1/3/12
 * Time: 8:10 AM
 * To change this template use File | Settings | File Templates.
 */
$tmp = array(1,2,3,4,5,6,7,8,9);
shuffle($tmp);
foreach($tmp as $val){
    for($i=0;$i<$val;$i++){
        echo "#";
    }
    echo "<br />\n";
}
