<?php

$file = "food_data.json";

$data = file_get_contents($file);

$array = json_decode($data, true);

$User_Name = $_POST['name-input'];
$food = $_POST['food-select'];
$quantity = $_POST['quantity-input'];

$Target_Calorie_Intake = 1000;

foreach ($array as $value) {
    if ($food == $value['food']) {
        $Total_Calorie_Intake = ($value['Calories']) * ($quantity);

        $Target_Acheived_Intake = (($Total_Calorie_Intake) / ($Target_Calorie_Intake)) * 100;
    }
}

$conn = new mysqli('localhost', 'root', '', 'suman_db');

if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("connection failed : " . $conn->connect_error);
} else {
    $query = "UPDATE intake_calorie SET Total_Calorie_Intake='$Total_Calorie_Intake' ,Target_Acheived_Intake='$Target_Acheived_Intake' WHERE User_Name='$User_Name' ";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Data updated')</script>";
        echo "<script>window.location.href = 'Home_Page.php';</script>";
        exit();
    } else {
        echo "failed to update";
    }
}

?>