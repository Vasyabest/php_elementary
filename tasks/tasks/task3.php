<?php
$triangle1 = (object) array('a' => 5, 'b' => 6, 'c'=> 7.4, 'vertices'=>"ABC");
$triangle2 = (object) array('a' => 7, 'b' => 8, 'c'=> 11.32, 'vertices'=>"BCD");
$triangle3 = (object) array('a' => 2, 'b' => 3, 'c'=> 4, 'vertices'=>"CDE");
$triangle4 = (object) array('a' => 8, 'b' => 13, 'c'=> 15, 'vertices'=>"DEF");

$array = array($triangle1, $triangle2, $triangle3, $triangle4);

function countSquares($triangles){  //array of triangles
    for($i=0; $i<count($triangles); $i++){
        $p=($triangles[$i]->a+$triangles[$i]->b+$triangles[$i]->c)/2;
        $s=sqrt($p*($p-$triangles[$i]->a)*($p-$triangles[$i]->b)*($p-$triangles[$i]->c));
        $triangles[$i]->s=$s;       //add field with a square in current triangle
    }
}

countSquares($array);

function sorting($triangles){
    for ($i = 0; $i < count($triangles) - 1; $i++) {
        $max_i = $i;
        for ($j = $i + 1; $j < count($triangles); $j++) {
            if ($triangles[$j]->s > $triangles[$max_i]->s) {
                $max_i = $j;
            }
        }
        $temp = $triangles[$i];
        $triangles[$i] = $triangles[$max_i];
        $triangles[$max_i] = $temp;
    }
    return $triangles;
}

$newArray = sorting($array);
for ($i=0; $i<count($newArray); $i++){
    echo $newArray[$i]->vertices;
    echo '<br>';
}
?>