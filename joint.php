<?php

$conn = mysqli_connect('localhost', 'root', '', 'suman_db') or die("Connection Failed");


if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $query = "SELECT * FROM intake_calorie INNER JOIN burned_calorie ON intake_calorie.User_Name=burned_calorie.User_Name";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }
}
?>