<?php 
    include "sql-db-connect.php";

    $studentnum = $_POST['StudentNum'];

    $sql = "SELECT * FROM `tblstudent` 
    WHERE `fldstudentno` = $studentnum";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $index = $row["fldindex"];
          $studentno = $row["fldstudentno"];
          $lastname = $row["fldlastname"]; 
          $firstname = $row["fldfirstname"];
          $middlename = $row["fldmiddlename"];
          $gender = $row["fldgender"];
        }
      } else {
        echo "0 results";
      }

?>

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
    <div class = "labelcontainer"><p class ="label">Student / Edit Student</p></div>

    <form action="editstudent-sql.php" method="post">
      <table class='formtable'>
      <tr>
      <th>Student No.:</th>
      <th><input type='text' name='StudentNum' value="<?php echo $studentno ?>" placeholder='Student Number'></th>
      </tr>
      <tr>
      <th>Last Name:</th>
      <th><input type='text' name='LastName' value="<?php echo $lastname ?>" placeholder='Last Name'></th>
      </tr>
      <tr>
      <th>First Name:</th>
      <th><input type='text' name='FirstName' value="<?php echo $firstname ?>" placeholder='First Name'></th>
      </tr>
      <tr>
      <th>Middle Name:</th>
      <th><input type='text' name='MiddleName' value="<?php echo $middlename ?>" placeholder='Middle Name'></th>
      </tr>
      <tr>
      <th>Gender:</th>
      <th><input type='text' name='Gender' value="<?php echo $gender ?>" placeholder='Gender'></th>
      </tr>
      </table>
      <div class = 'labelcontainer '>
      <input type='submit' class ='bottombuttons' name='savebutton' value='Update Student'/> 
      <input type='submit' value='Cancel' onclick="action='menu.php?id=<?php echo $index?>'" />
      </div>
      </form>

</div>

</body>
</html>

