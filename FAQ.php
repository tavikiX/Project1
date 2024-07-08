<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
?>

<style>
    body{
        background-image: url(Images/FAQ.jpg);
        background-size: cover;
    }

    h1{
        color: #3407e4;
        font-size: larger;
    }

    p{
        color: #fff8f8;
        font-size: 50px;
    }
    input[type ="text"], input[type = "Querries"]
    textarea{
        width: 50%;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid gray;
        border-radius: 5px;
        box-sizing: border-box;
    }
</style>
<body>
    
    <h1>Any questions!!</h1>

    <p>When is the maintenance period?</p>
    <p>How long is the maintenance period?</p>
    <p>Who do I consult for problem solving?</p>

    <p>any further questions to be raised please search below:</p>
    <label for="Querries">Querries:</label><br>
        <input type="text" name="Querries" placeholder="Querries" id="Querries"><br><br>
        <button for="Search">Search:</button><br>
</body>
</html>