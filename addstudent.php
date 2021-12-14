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
      <th><input type='text' name='StudentNum' placeholder='Student Number' ></th>
      </tr>
      <tr>
      <th>Last Name:</th>
      <th><input type='text' name='LastName' placeholder='Last Name' ></th>
      </tr>
      <tr>
      <th>First Name:</th>
      <th><input type='text' name='FirstName' placeholder='First Name' ></th>
      </tr>
      <tr>
      <th>Middle Name:</th>
      <th><input type='text' name='MiddleName' placeholder='Middle Name' ></th>
      </tr>
      <tr>
      <th>Gender:</th>
      <th><input type='text' name='Gender' placeholder='Gender' ></th>
      </tr>
      </table>
      <div class = 'labelcontainer '>
      <input type='submit' class ='bottombuttons' name='savebutton' value='Save Student' onclick="action='addstudent-sql.php'"/>
      <input type='submit' value='Cancel' onclick="action='menu.php'" />
      </div>
      </form>

</div>

</body>
</html>