
<?php

include "sql-db-connect.php"; // php file to connect to database

if (isset($_POST['searchbutton'])) { //when search button is inputted, code sends query to check similar data to input
    
    $query = $_POST['searchinput'];

    $sql = "SELECT * FROM `tblstudent` 
    WHERE (`fldindex` LIKE '$query') OR (`fldstudentno` LIKE '$query') OR (`fldlastname` LIKE '$query') OR (`fldfirstname` LIKE '$query') OR (`fldmiddlename` LIKE '$query') OR (`fldgender` LIKE '$query')";
    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result) > 0) { // if the number of rows with similar data is more than 0, print the associated rows
?>

        <table class='mysqltable' >
        <tr>
        <th class = "tablespacing">#</th>
        <th>Student No.</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Gender</th>
        <th></th>
        <th></th>
        </tr>

<?php
        while($row = mysqli_fetch_array($result)) //fetching row data from $result
        {
?>

<tr>
            <td class = "tablespacing"><?php echo $row['fldindex'] ?></td>
            <td><?php echo $row['fldstudentno'] ?> </td>
            <td><?php echo $row['fldlastname'] ?> </td>
            <td><?php echo $row['fldfirstname'] ?> </td>
            <td><?php echo $row['fldmiddlename'] ?> </td>
            <td><?php echo $row['fldgender'] ?> </td>
            <td class = "tablespacing"><a href="editstudent.php?id=<?php echo $row['fldindex']; ?>">Edit</a></td>
            <td><a href="deletestudent.php?id=<?php echo $row['fldindex']; ?>">Delete</a></td>
</tr>

<?php
        }
?>
        </table>
<?php
    }
    else { //else when no rows found, print the table with the associated no record found alert
?>
        <table class='mysqltable' >
        <tr>
        <th class = "tablespacing">#</th>
        <th>Student No.</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Gender</th>
        <th class = "tablespacing">&emsp;&emsp;</th>
        <th class = "tablespacing">&emsp;&emsp;</th>
        </tr>
        <tr>
        <td colspan = "8" class = "norecord">Record Not Found!!!</td>
                
        </tr>
        </table>
<?php
    }
}

else { //else when submit button has not yet been pressed, print out all the records within the db
        $result = mysqli_query($con,"SELECT * FROM tblstudent");
?>
        <table class='mysqltable' >
        <tr>
        <th class = "tablespacing">#</th>
        <th>Student No.</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Gender</th>
        <th></th>
        <th></th>
        </tr>
<?php
        while($row = mysqli_fetch_array($result)) //fetching row data from $result
        {
        
        ?>

        <tr>
        <td class = "tablespacing"><?php echo $row['fldindex'] ?></td>
        <td><?php echo $row['fldstudentno'] ?> </td>
        <td><?php echo $row['fldlastname'] ?> </td>
        <td><?php echo $row['fldfirstname'] ?> </td>
        <td><?php echo $row['fldmiddlename'] ?> </td>
        <td><?php echo $row['fldgender'] ?> </td>
        <td class = "tablespacing"><a href="editstudent.php?id=<?php echo $row['fldindex']; ?>">Edit</a></td>
        <td><a href="deletestudent.php?id=<?php echo $row['fldindex'];?>">Delete</a></td>
        </tr>
  
        <?php
        }
        ?>
  
        </table>
<?php  

}
?>
</br>
