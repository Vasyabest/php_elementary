<?php 
$w=4;
$h=5;
$s="*";
function chess($width,$height,$s){
    for($i=0;$i<$width;$i++) {
        for($j=0;$j<$height;$j++){
            $arr[$i][$j]=$s;
            if (($i%2)==0){
                echo $arr[$i][$j], "&nbsp";
            }
            if (($i%2)==1){
                echo "&nbsp",$arr[$i][$j];
            }
        }
        echo "</br>";
    }
}
chess($w,$h,$s);
?>
