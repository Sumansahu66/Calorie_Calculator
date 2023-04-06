<?php
    require_once('joint.php');
    $User_Name = $_GET['User_Name'];
    $sql = "DELETE intake_calorie, burned_calorie FROM intake_calorie
    JOIN burned_calorie ON intake_calorie.User_Name = burned_calorie.User_Name
    WHERE intake_calorie.User_Name = '$User_Name'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data deleted')</script>";
        echo "<script>window.location.href = 'Home_Page.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
?>

