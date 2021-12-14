<?php
//Insert

include "sql-db-connect.php";

      $studentnum = $_POST['StudentNum'];
      $lastname = $_POST['LastName'];
      $firstname = $_POST['FirstName'];
      $middlename = $_POST['MiddleName'];
      $gender = $_POST['Gender'];

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
?>	



