<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
    include_once("DBConnection.php");
 if(isset($_POST["Enter"])){
  $username =mysqli_real_escape_string($conn, addslashes( $_POST["username"]));
  $comment =mysqli_real_escape_string($conn, addslashes( $_POST["comment"]));
  $rating =mysqli_real_escape_string($conn, addslashes( $_POST["rating"]));
  $Problems =mysqli_real_escape_string($conn, addslashes( $_POST["Problems"]));

  $insert_comments = "INSERT INTO comments(username, comment, rating, problems)
  VALUES ('$username', '$comment', '$rating', '$Problems')";

if ($conn->query($insert_comments) === TRUE) {
  echo "New record inserted successfully";
  header("Location: comment.php");
  exit();
} else {
  echo "Error: " . $insert_comments. "<br>" . $conn->error;
}

$conn->close();
}
?>

?>

<style>
body{
    background-image: url(Images/Employees.jpg);
    background: color #3a3a9b ;
    background-size:cover;
}

h1{
    color: #3407e4;
    font-size: larger;
}

p{
    color: #241d86;
    font-size: 50px;
}
</style>

<body>
    
    <div>
    <h1>For employee use only!!!</h1>
    <p>Enter employee details below.</p>
    <form action="" autocomplete="off">
        <label for="fullname">Fullname:</label><br>
        <input type="text" name="fullname" placeholder="Fullname" id="fullname"><br><br>
        <label for="employeeID">Employee ID:</label><br>
        <input type="number" name="employeeID" min="1000000" max="10000000000"><br><br>
        <label for="age">Age:</label><br>
        <input type="number" name="age"><br><br>
        <label for="email">Email Address:</label><br>
        <input type="email" name="email_address"><br><br>
        <button for="Enter">Enter:</button><br>
    </div>
</body>
</html>