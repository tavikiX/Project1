<?php include('header.php'); ?>  
<div>
    <h1>For employee use only!!!</h1>
    <p>Enter employee details below.</p>
    <form action="process_employee.php" method="post" autocomplete="off">  <label for="fullname">Fullname:</label><br>
      <input type="text" name="fullname" placeholder="Fullname" id="fullname"><br><br>
      <label for="employeeID">Employee ID:</label><br>
      <input type="number" name="employeeID" min="1000000" max="10000000000"><br><br>
      <label for="age">Age:</label><br>
      <input type="number" name="age"><br><br>
      <label for="email">Email Address:</label><br>
      <input type="email" name="email_address"><br><br>
      <button type="submit">Enter</button><br>
    </form>
  </div>
  <?php include('footer.php'); ?>  </body>