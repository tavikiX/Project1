 <?php
include_once("header.inc");
function readFromFile($filePath) {
  if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    return $content;
  } else {
    return "Error: File not found.";
  }
}

$messagePath = "about_us_message.txt";
$message = readFromFile($messagePath);

?>

<!DOCTYPE html>
<html lang="en">
<p> <?php echo $message; ?></p>

</html>
  
