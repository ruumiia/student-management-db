<?php

include "sql-db-connect.php"; // php file to connect to database
      
      $studentnum = $_POST['StudentNum'];
      $lastname = $_POST['LastName'];
      $firstname = $_POST['FirstName'];
      $middlename = $_POST['MiddleName'];
      $gender = $_POST['Gender'];
      $count = 0;

      $sqlsearch = "SELECT * FROM `tblstudent` WHERE `fldstudentno` = $studentnum";

      $result = mysqli_query($con,$sqlsearch);

      while($row = mysqli_fetch_assoc($result)) { // if sql table has equal student number to input, count++
        if ($row['fldstudentno'] == $studentnum) {
            $count++;
        }
      }

      //if count > 0, student number already exists in the db - retry; else, input added to db
      if ($count > 0) {
        echo "<script>alert('Student Number $studentnum already exists. Please retry.')
        location.href = 'addstudent.php?attempt=success';
        </script>"; 
      }
      else {

      $sql = "INSERT INTO tblstudent (fldstudentno, fldlastname, fldfirstname, fldmiddlename, fldgender) 
      VALUES 
      ('$studentnum','$lastname','$firstname','$middlename','$gender')";

        if (mysqli_query($con,$sql))

        {
            echo "<script>alert('Student no. $studentnum data successfully sent.')
                    location.href = 'addstudent.php?attempt=success';
                    </script>";
        }
        else
        {
            echo "Error adding user in database<br />";
        }
    }
?>	
