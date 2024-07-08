<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// ... Your PHP code to process and store comments ...

mysqli_close($conn);
?>

<?php

// ... Connect to database (replace with your connection details)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["Username"];
  $comment = $_POST["Comment"];
  $rating = (int)$_POST["rating"]; // convert rating to integer
  $problems = $_POST["Problems"];

  // Escape user input to prevent SQL injection (important for security)
  $username = mysqli_real_escape_string($conn, $username);
  $comment = mysqli_real_escape_string($conn, $comment);
  $problems = mysqli_real_escape_string($conn, $problems);

  $sql = "INSERT INTO comments (username, comment, rating, problems)
          VALUES ('$username', '$comment', '$rating', '$problems')";

  if (mysqli_query($conn, $sql)) {
    echo "Comment submitted successfully!";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

mysqli_close($conn);

?>