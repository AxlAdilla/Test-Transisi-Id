<?php

function main(){
    $numOfColumns=8;
    $numOfRows=8;
    echo "<table>";
    for($row=1;$row<=$numOfRows;$row++){
        echo "<tr>";
        if(($row%3) == 1){
            $start_white=1;
        }elseif(($row%3) == 2){
            $start_white=0;
        }else{
            $start_white=2;
        }

        for($column=1;$column<=$numOfColumns;$column++){
            if ($column%4 == 0) {
                echo "<td class='white'>".((($row-1)*$numOfColumns)+$column)."</td>";
            }elseif($start_white%3==0){
                echo "<td class='white'>".((($row-1)*$numOfColumns)+$column)."</td>";
            }else{
                echo "<td>".((($row-1)*$numOfColumns)+$column)."</td>";
            }
            $start_white++;
        }
        echo "</tr>";
    }
    echo "</table>";
}

main();
?>
<style>
    td{
        padding:8px;
        background-color:black;
        color:white;
    }
    table{
        border-collapse:collapse;
    }
    .white{
        background-color:white;
        color:black;
    }

</style>