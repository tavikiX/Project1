<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>people</title>
    <link rel="stylesheet" href="styles.css">
</head>
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
    <nav>
        <ul>
            <li><a href="index.html">Home page</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="people.html">people</a></li>
            <li><a href="comment.html">Comment</a></li>
            <li><a href="copyright.html">Copyright</a></li>
            <li><a href="help.html">help me</a></li>
            <li><a href="employee.html">Employees</a></li>
            <li><a href="FAQ.html">FAQ</a></li>
        </ul>
    </nav>
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