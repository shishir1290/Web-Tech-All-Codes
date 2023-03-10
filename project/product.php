
<?php 
	$servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gore gore";

    
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $numRows = 6;
    $numCols = 6;

    echo "<table>";

    for ($i = 1; $i <= $numRows; $i++){
      echo "<tr>";

    $images = array();

      for ($j = 1; $j <= $numCols; $j++) {
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            break;
        }

        echo "
          
          <td align='center'>
          <input type='hidden' name='product_id' value='".$row['productId']."'>
          <a href='productInfo.php?productId=" . $row["productId"] . "'><img src='" . $row["pic"] . "' height='220' width='220'/></a>
          
          <br>
          <b>".$row['productName']."</b> (".$row['price']." TK)</b>
          </td>
          <td> </td>
          <td> </td>
          ";
    		}
        echo "</tr>"; 
      }
    echo "</table>";
	mysqli_close($conn);


?>
