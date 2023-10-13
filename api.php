<?php
require "settings/init.php";
$data = json_decode(file_get_contents('php://input'), true);


header('content-Type:application/json; charset=utf-8');

if (isset($data["password"])&& $data ["password"] == "kickPHP"){
    $sql = "SELECT * FROM produkter WHERE 1=1 ";
    $bind  = [];


    if(!empty($data["nameSearch"])){
        $sql .= "AND prodNavn LIKE concat('%', :prodNavn, '%')";
        $bind[":prodNavn"] = $data["nameSearch"];

    }


    $produkter = $db->sql($sql, $bind);
    echo json_encode($produkter);
    header("HTTP/1.1 200 OK");


}else{
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Din kodeord var forkert";
    echo json_encode($error);
}

?>


