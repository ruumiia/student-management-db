<?php 

include "sql-db-connect.php";

          $index = $_POST['index'];
          $studentnum = $_POST['StudentNum'];
          $lastname = $_POST['LastName'];
          $firstname = $_POST['FirstName'];
          $middlename = $_POST['MiddleName'];
          $gender = $_POST['Gender'];
          
          $sql = "DELETE FROM `tblstudent`
          WHERE `fldindex` = $index";

            if (mysqli_query($con,$sql))

            {
                echo "<script>alert('Data has successfully been deleted.')
                        location.href = 'menu.php?attempt=success';
                        </script>";
            }
            else
            {
                echo "Error adding user in database<br />";
            }
            

?>