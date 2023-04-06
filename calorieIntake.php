<?php

$file = "food_data.json";

$data = file_get_contents($file);

$array = json_decode($data, true);

$date = $_POST['date'];
$User_Name = $_POST['name'];
$food = $_POST['food'];
$quantity = $_POST['quantity'];

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
    $stmt = $conn->prepare("INSERT INTO intake_calorie(date,User_Name,Total_Calorie_Intake,Target_Calorie_Intake,Target_Acheived_Intake) VALUES (?,?,?,?,?)");

    $stmt->bind_param("ssiii", $date, $User_Name, $Total_Calorie_Intake, $Target_Calorie_Intake, $Target_Acheived_Intake);

    $stmt->execute();
    header('location:submitted.html');
    $stmt->close();
    $conn->close();

}

?>