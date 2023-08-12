<?php

include "../include/config.php";

$return_arr = array();

$query = "SELECT * FROM rooms";

$result = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $seater = $row['seater'];
    $room_no = $row['room_no'];
    $fees = $row['fees'];
    $posting_date = $row['posting_date'];

    $return_arr[] = array("id" => $id,
                    "seater" => $seater,
                    "room_no" => $room_no,
                    "fees" => $fees,
                    "posting_date" => $posting_date);
}

// Encoding array in JSON format
echo json_encode($return_arr);