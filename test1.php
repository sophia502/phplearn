<?php
	//九九乘法表
	echo "<table width=900 align=center border=1>";
	for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=$i;$j++){
            echo "<td>";
            echo $i."*".$j."=".$i*$j;
            echo "</td>";
        }
        echo "</tr>";
    }


?>