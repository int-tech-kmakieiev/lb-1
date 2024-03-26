<?php
include("connect.php");
$nurseName = $_GET["nurseName"];

try {
    $sqlSelect = "SELECT w.name AS ward_name FROM ward w 
    INNER JOIN nurse_ward nw ON w.id_ward = nw.fid_ward  
    INNER JOIN nurse n ON n.id_nurse = nw.fid_nurse  
    WHERE n.name=:nurseName";

    $stmt = $dbh->prepare($sqlSelect);
    $stmt->bindvalue(":nurseName",$nurseName);
    $stmt->execute();
    $res = $stmt->fetchAll();

    echo "<table border='1'>";
    echo "<thead><tr><th>ward.name</th><th>date</th><th>department</
    th><th>shift</th></tr></thead>";
    foreach($res as $row)
    {
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row
        [3]</td></tr>";
    }
    echo "</table>";

}
catch(PDOException $ex) {
    echo $ex->GetMessage();
}
