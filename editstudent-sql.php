
<?php 

include "sql-db-connect.php"; // php file to connect to database

    $index = $_POST['index'];
    $studentnum = $_POST['StudentNum'];
    $lastname = $_POST['LastName'];
    $firstname = $_POST['FirstName'];
    $middlename = $_POST['MiddleName'];
    $gender = $_POST['Gender'];
    $count = 0;
          

    /*two sql queries, $sqlsearch to select all rows within the db, 
    $existsearch to identify whether input student num exists withih the db */

    $sqlsearch = "SELECT * FROM `tblstudent`";
    $existsearch = "SELECT IF(`fldstudentno`= $studentnum,'Yes','No') AS rowexist from tblstudent;";
    $result = mysqli_query($con,$sqlsearch);  
    $existresult = mysqli_query($con,$existsearch);

    // after taking $existsearch query result, condition compares input studentnum to db student num values
    while($existrow = mysqli_fetch_assoc($existresult)) { 
        if ($existrow['rowexist'] == 'Yes') { // if the row value is "Yes", then count++
            $count++;
        }
    }
          
    //if count > 0, student number already exists in the db - proceed to next checking condition; else, input added to db
    if ($count > 0) {
        while($row = mysqli_fetch_array($result)) { // fetches db row results from $result
            if ($row['fldstudentno'] == $studentnum) { // if input studentnum = db studentnum, then proceed to next conditions
                
                // if form index == db index data, this means the studentnum is still the same for the data row, therefore allow update
                if ($row['fldindex'] == $index) { 
                    $sql = "UPDATE `tblstudent` 
                    SET `fldstudentno`= $studentnum,`fldlastname`= '$lastname',`fldfirstname`= '$firstname',`fldmiddlename`= '$middlename',`fldgender`= '$gender' 
                    WHERE `fldindex` = $index";

                    if (mysqli_query($con,$sql)) {
                            echo "<script>alert('Record Updated!!!')
                            location.href = 'menu.php?attempt=success';
                            </script>";
                        }
                    else {
                            echo "Error adding user in database<br />";
                        }
                }
                //else if form index != db index, do not allow update, to prevent multiple index having duplicate student numbers
                else if ($row['fldindex'] != $index) {
                        echo "<script>alert('Student Number $studentnum already exists. Please retry.')
                        location.href = 'menu.php?attempt=success';
                        </script>"; 
                }
            }
        }
    }
    else { // else, input added to db as there are no possible duplicate student numbers 
        $sql = "UPDATE `tblstudent` 
        SET `fldstudentno`= $studentnum,`fldlastname`= '$lastname',`fldfirstname`= '$firstname',`fldmiddlename`= '$middlename',`fldgender`= '$gender' 
        WHERE `fldindex` = $index";
    
        if (mysqli_query($con,$sql)) {
            echo "<script>alert('Record Updated!!!')
            location.href = 'menu.php?attempt=success';
            </script>";
        }
        else {
            echo "Error adding user in database<br />";
        }
    }
            
?>
