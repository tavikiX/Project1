<?php include('header.php'); ?>  <h1>Stan's Employees.</h1>
  <p>We value honesty and integrity in our work.</p>
  <p>
    In case of employee uncivilization, report it in the comment section as a problem 
    and we will be sure to address the issue.
  </p>
  <a href="comment.html" id="commentLink">Comment</a>
  <a href="people.html" id="peopleLink">People</a>
  <div id="employeeDetails">
    <?php
    // Connect to database or retrieve data from another source (replace with your logic)
    $employeeData = array(
      "name" => "Austin Frank",
      "position" => "Manager",
      "bio" => "Frank Austin has been with the company for 5 years..."
    );

    // Display employee details
    if ($employeeData) {
      echo "<h2>" . $employeeData["name"] . "</h2>";
      echo "<p>Position: " . $employeeData["position"] . "</p>";
      echo "<p>" . $employeeData["bio"] . "</p>";
    } else {
      echo "<p>No employee details available.</p>";
    }
    ?>
  </div>

  <?php include('footer.php'); ?>