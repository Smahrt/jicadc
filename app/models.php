<?php
    include('config.php');

function showNumRows($table){
    global $dbh;
    
    $query ="SELECT * from $table";
    $result = $dbh->query($query);
    $num = $result->rowcount($result);
    
    echo $num;
}

function getRows($table, $thisCol, $thatCol){
    global $dbh;
    
    if( ($thisCol == NULL)&&($thatCol == NULL) ){
        $query ="SELECT * from $table";
        $result = $dbh->query($query);
    }else{
        $query ="SELECT $thisCol from $table WHERE $thatCol = $thatCol";
        $result = $dbh->query($query);
    }
    
    
    return $result;
}

?>