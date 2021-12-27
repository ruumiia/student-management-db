
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
    <div class ="tablediv">
    <div class = "labelcontainer"><p class ="label">Student</p></div>
    <form method = "post" class = "topOptions" enctype="multipart/form-data">
    <input type="text" name="searchinput" required>
    <input type="submit" name="searchbutton" value="Search Student" onclick="action='menu.php'; return true;" />
    <input type="submit" name="submit" onclick="action='addstudent.php'; return true;" value="Add Student" formnovalidate >
    </form>
    
    <?php
      include "search.php"; // including php file for printing the sql table and search results for every menu.php direct
    ?>  

    </div>
        <div class = "labelcontainer bottomdiv">  <!-- div container for display all records option-->
        <form action="" method="post" class = "displayrecordbutton"> 
        <input type="submit" name="displayallbutton" value="Display All Record" />
        </form>
        </div>

</div>

</body>
</html>
