<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="design.css">

</head>
<body>

<div class="row">
  <div class="column left">
    <ul class="ba"> 
      <li> <a href="menu.php">Student</a></li>
      <li> Program </li>
      <li> Course </li>
      <li> Instructor </li>
      <li> Grade </li>
    </div>

  <div class="column right">
    </br>
    <div class = "labelcontainer"><p class ="label">Student</p></div>
    
    <form action = "addstudent.php" method = "post" enctype="multipart/form-data">
    <input type="submit" name="submit" class = "addstudent" value="Add Student">
    </form>
    <?php

      include "sql-db-connect.php";
    
      $result = mysqli_query($con,"SELECT * FROM tblstudent");

      echo "<table class='mysqltable'>
      <tr>
      <th>flindex</th>
      <th>fldstudentno</th>
      <th>fldlastname</th>
      <th>fldfirstname</th>
      <th>fldmiddlename</th>
      <th>fldgender</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['fldindex'] . "</td>";
      echo "<td>" . $row['fldstudentno'] . "</td>";
      echo "<td>" . $row['fldlastname'] . "</td>";
      echo "<td>" . $row['fldfirstname'] . "</td>";
      echo "<td>" . $row['fldmiddlename'] . "</td>";
      echo "<td>" . $row['fldgender'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";

      mysqli_close($con);
    ?>
  
  <div class = "labelcontainer">
    
  <p class ="label2">Type Student Number:</p>

  <form action="" method="post" class = "editdelstudent"> 
  <input type="text" name="StudentNum" placeholder="Student Number" required="">
  <input type="submit" name="editbutton" value="Edit Student" onclick="action='editstudent.php'; return true;" />
  <input type="submit" name="deletebutton" value="Delete Student" onclick="action='deletestudent.php'; return true;" />
  </form>
  
</div>

  </div>
</div>

</body>
</html>