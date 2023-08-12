<?php

include "../include/config.php";

$return_arr = array();

$query = "SELECT * FROM courses";

$result = mysqli_query($mysqli,$query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $course_code = $row['course_code'];
    $course_sn = $row['course_sn'];
    $course_fn = $row['course_fn'];
    $posting_date = $row['posting_date'];

    $return_arr[] = array("id" => $id,
                    "course_code" => $course_code,
                    "course_sn" => $course_sn,
                    "course_fn" => $course_fn,
                    "posting_date" => $posting_date);
}

// Encoding array in JSON format
echo json_encode($return_arr);