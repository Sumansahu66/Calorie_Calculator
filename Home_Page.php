<?php
require_once('joint.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Home_Page_Calorie_Calculator</title>

   <link rel="stylesheet" href="Home_Page.css">

   <!-- <script src="project.js"></script> -->

</head>

<body>

   <!-- container is the class name given for the whole page -->

   <div class="container">
      <!-- <?= $msg; ?> -->

      <!-- this the header part section to hold the heading and navigation items -->

      <header id="page_header_1">

         <!-- page_heading is the id which holds the heading name part -->

         <div id="page_heading_wrapper">
            <h1 id="page_heading">
               <span style="color:rgb(0, 0, 0)">&nbsp;&nbsp;&nbsp;&nbsp;CALORIE CALCULATOR</span>
            </h1>
         </div>


         <!-- page_nav_bar is the id which holds the navigation items -->

         <nav id="page_nav_bar">

            <a href="calorie_intake.html" id="nav_link-1">Create Calorie Intake</a>
            <a href="calorie_burned.html" id="nav_link-2">Create Calorie Burned</a>

         </nav>

      </header>

      <!-- bodypart will hold the table for the calorie data -->

      <div class="bodypart">

         <!-- table is created to show the data -->
         <table id="calorie_table">

            <tr id="table_row">

               <th id="table_data">Date of data created (yyyy/mm/dd)</th>
               <th id="table_data">Name of the user</th>
               <th id="table_data">Total calories intake on that date(in cal.)</th>
               <th id="table_data">Target calorie intake Value(in cal.)</th>
               <th id="table_data">Target Acheived for calories intake(in %)</th>
               <th id="table_data">Total Calorie burned on that date(in cal.)</th>
               <th id="table_data">Target Calorie Burned Value(in cal.)</th>
               <th id="table_data">Target Acheived for calories burned(in %)</th>
               <th id="table_data">Edit Calorie Intake Value</th>
               <th id="table_data">Edit Calorie Burned Value</th>
               <th id="table_data">Delete Data</th>

            </tr>
            <tr id="table_row_i">
               <?php
               while ($row = mysqli_fetch_array($result)) { ?>
                  <td id="table_data-t">
                     <?php echo $row['date']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['User_Name']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['Total_Calorie_Intake']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['Target_Calorie_Intake']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['Target_Acheived_Intake']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['Total_Calorie_Burned']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['Target_Calorie_Burned']; ?>
                  </td>
                  <td id="table_data-t">
                     <?php echo $row['Target_Acheived_Burned']; ?>
                  </td>
                  <td id="table_data-t"><a type="button" id="btn-1" href="edit_intake.html">Edit Intake</td>
                  <td id="table_data-t"><a type="button" id="btn-2" href="edit_burned.html">Edit Burned</td>
                  <td id="table_data-t"><a type="button" id="btn-1" href="delete.php?User_Name=<?php echo $row['User_Name']; ?>">Delete</a></td>
               </tr>

            <?php } ?>

         </table>
      </div>

   </div>

</body>

</html>