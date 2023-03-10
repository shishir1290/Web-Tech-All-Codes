<?php
// Start the session
session_start();
include 'header.php';

echo '<h2 align="center">Help center</h2>';

if(!isset($_SESSION['username'])){
  header("Location: homepage.php?msg1="."Please login first!");
}

// Connect to the database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "gore gore";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $user = mysqli_real_escape_string($conn, $_SESSION['username']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  // Insert the message into the database
  $sql = "INSERT INTO chat_messages (user, message) VALUES ('$user', '$message')";

  if (mysqli_query($conn, $sql)) {
    echo "Message sent successfully<br>";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

// Get the messages from the database
$sql = "SELECT * FROM chat_messages ORDER BY sent_at ASC";

$result = mysqli_query($conn, $sql);

// Display the messages
echo "<div style='overflow-y: scroll; height: 300px;'>";
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<strong>" . $row["user"] . ":</strong> " . $row["message"] . "<br>";

    // Reply to the message if it contains a specific keyword
    if (strpos($row["message"], "hello") !== false) {
      $reply = "Hi there! How can I help you?";
      echo "<strong>Database:</strong> " . $reply . "<br>";

      // Insert the reply into the database
      $sql = "INSERT INTO chat_messages (user, message) VALUES ('Database', '$reply')";

      if (mysqli_query($conn, $sql)) {
        echo "Reply sent successfully";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    }
  }
} else {
  echo "No messages yet";
}
echo "</div>";

// Close the database connection
mysqli_close($conn);
?>

<form method="post" novalidate>
  <textarea name="message" placeholder="Write here."></textarea>
  <input type="submit" name="submit" value="Send">
</form>

<?php 
  include 'footer.php';
?>
