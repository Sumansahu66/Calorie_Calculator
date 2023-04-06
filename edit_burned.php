<?php

$file = "activity_data.json";

$data = file_get_contents($file);

$array = json_decode($data, true);

$User_Name = $_POST['name-input'];
$activity = $_POST['activity-select'];
$step = $_POST['step-input'];

$Target_Calorie_Burned = 800;

foreach ($array as $value) {
    if ($activity == $value['activity']) {
        $Total_Calorie_Burned = ($value['calorie-burned']) * ($step);

        $Target_Acheived_Burned = (($Total_Calorie_Burned) / ($Target_Calorie_Burned)) * 100;
    }
}

$conn = new mysqli('localhost', 'root', '', 'suman_db');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("connection failed : " . $conn->connect_error);
} else {
    $query = "UPDATE burned_calorie SET Total_Calorie_Burned='$Total_Calorie_Burned' ,Target_Acheived_Burned='$Target_Acheived_Burned' WHERE User_Name='$User_Name' ";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Data updated')</script>";
        echo "<script>window.location.href = 'Home_Page.php';</script>";
    } else {
        echo "failed to update";
    }

}

?>