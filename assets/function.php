<?php

$db = mysqli_connect(
    "localhost",
    "root",
    "",
    "data"
);


// menambahkan data 
function insertPesan($queryDatabase) {
    global $db;
    $result = mysqli_query($db, $queryDatabase);

};

// melihat data
function selectPesan($query) {
    global $db;
    $massagess = [];
    $result = mysqli_query($db, $query);
    while ($allpesan = mysqli_fetch_assoc($result)) {
        $massagess[] = $allpesan;
    }
    return $massagess;
}


?>