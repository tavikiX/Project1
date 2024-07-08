<?php include('header.php'); ?>  
<h1>This is the comment section, Use it wisely!!!</h1>
  <p>Enter comment below!!!</p>

  <form action="process_comment.php" method="post" autocomplete="off">
    <label for="Username">Username:</label><br>
    <input type="text" name="Username" placeholder="Username" id="Username"><br><br>
    <label for="Comment">Comment (100-1000 characters):</label><br>
    <textarea name="Comment" minlength="100" maxlength="1000"></textarea><br><br>
    <label for="rating">Rating (1-10):</label><br>
    <input type="number" name="rating" min="1" max="10"><br><br>
    <label for="Problems(if any)">Problems (if any):</label><br>
    <input type="text" name="Problems" placeholder="Problems(if any)" id="Problems"><br><br>
    <input type="submit" value="Submit Comment"><br><br>
    <p>Note that cyberbullying is discouraged and if you are noted doing so you will be banned from the system!!!</p>
    <p>Do not say that you were not warned!!!</p>
  </form>

<?php include('footer.php'); ?>