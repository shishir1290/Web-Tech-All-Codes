<?php
session_start();
if(isset($_POST['submit'])){
    $message = $_POST['message'];
    $username = $_SESSION['username'];
    $fp = fopen("chat.txt", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$username."</b>: ".stripslashes(htmlspecialchars($message))."<br></div>");
    fclose($fp);
}
?>

<div id="chatbox">
<?php

  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "gore gore";
  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

  // Check the connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM messages";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
      die("Error: " . mysqli_error($conn));
  }

  $dbmessage = mysqli_fetch_assoc($result);

if(file_exists("chat.txt") && filesize("chat.txt") > 0){
    $handle = fopen("chat.txt", "r");
    $contents = fread($handle, filesize("chat.txt"));
    fclose($handle);
    echo $contents;
}
?>
</div>

<form name="message" action="" method="post">
    <input name="message" type="text" id="message" size="63" />
    <input name="submit" type="submit"  value="Send" />
</form>



<?php
$icon_size = 50; // set the size of the icon

$icon = imagecreate($icon_size, $icon_size); // create a new image with the given size
$background = imagecolorallocate($icon, 255, 255, 255); // set the background color to white
$text_color = imagecolorallocate($icon, 0, 0, 0); // set the text color to black

// draw the chat box shape
imagefilledrectangle($icon, 0, 0, $icon_size-1, $icon_size-1, $background);
imagefilledellipse($icon, $icon_size/2, $icon_size/2, $icon_size-10, $icon_size-10, $text_color);

// draw the chat box lines
imageline($icon, $icon_size/3, $icon_size/2, $icon_size/3*2, $icon_size/2, $text_color);
imageline($icon, $icon_size/2, $icon_size/3, $icon_size/2, $icon_size/3*2, $text_color);

// display the icon
header('Content-type: image/png'); // set the header to tell the browser that the output is an image
imagepng($icon); // output the image
imagedestroy($icon); // free up memory used by the image
?>
