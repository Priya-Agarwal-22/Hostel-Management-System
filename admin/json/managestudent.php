<?php

include "../include/config.php";

$return_arr = array();

$query = "SELECT id, firstName, middleName, lastName, regno, contactno, roomno, seater, stayfrom FROM registration";

$result = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $firstName = $row['firstName'];
    $middleName = $row['middleName'];
    $lastName = $row['lastName'];
    $regno = $row['regno'];
    $contactno = $row['contactno'];
    $roomno = $row['roomno'];
    $seater = $row['seater'];
    $stayfrom = $row['stayfrom'];

    $return_arr[] = array(
        "id" => $id,
        "firstName" => $firstName,
        "middleName" => $middleName,
        "lastName" => $lastName,
        "regno" => $regno,
        "contactno" => $contactno,
        "roomno" => $roomno,
        "seater" => $seater,
        "stayfrom" => $stayfrom
    );
}

// Encoding array in JSON format
echo json_encode($return_arr);


?>