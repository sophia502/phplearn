<?php
$info=array(
    'user'=>array(
        array(1,'zhangsan',19,'male'),
        array(2,'lisi',20,'male'),
        array(3,'wangwu',25,'female'),
    ),
    'score'=>array(
        array(1,100,99,10),
        array(2,45,78,90),
        array(3,45,90,87),
    ),
    'connect'=>array(
        array(1,100,'aa@bb.com'),
        array(2,200,'ff@ee.com'),
        array(3,330,'uu@rr.com'),
    ),
);
foreach ($info as $key => $value) {
    echo "<table border=1>";
    echo "<caption>".$key."</caption>";
    foreach ($value as $col) {
        echo "<tr>";
        foreach ($col as $row) {
            echo "<td>";
            echo $row;
            echo "</td>";
        }
        echo "</tr>";

    }
    echo "</table>";
}

/*
foreach ($info as $key=>$value) {
        echo "<table width=800 align='center' border=1>";
        echo "<caption>".$key."</caption>";
        echo "<tr>";
        foreach ($value as $row ) {
            echo "<tr>";
            foreach ($row as $col) {
                echo "<td>";
                echo $col;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</tr>";
        echo "</table>";
    }*/



?>