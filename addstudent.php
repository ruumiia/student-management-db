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
    <div class = "labelcontainer"><p class ="label">Student / Add Student</p></div>

    <form method="post">
      <table class='formtable'>
      <tr>
      <th>Student No.:</th>
      <th><input type='text' id = "input1" name='StudentNum' placeholder='Student Number' required></th>
      </tr>
      <tr>
      <th>Last Name:</th>
      <th><input type='text' id = "input2" name='LastName' placeholder='Last Name' required></th>
      </tr>
      <tr>
      <th>First Name:</th>
      <th><input type='text' id = "input3" name='FirstName' placeholder='First Name' required></th>
      </tr>
      <tr>
      <th>Middle Name:</th>
      <th><input type='text' id = "input4" name='MiddleName' placeholder='Middle Name' required></th>
      </tr>
      <tr>
      <th>Gender:</th>
      <th><input type='text' id = "input5" name='Gender' placeholder='Gender' required></th>
      </tr>
      </table>
      <div class = 'labelcontainer'>
      <input type='submit' name='savebutton' class = "bottombuttons" value='Save Student' onclick="action='addstudent-sql.php'"/>
      <input type='submit' id="cancelinput" value='Cancel' onclick="action='menu.php'" formnovalidate/>
      </form>
      </div>

</div>

</body>
</html>
