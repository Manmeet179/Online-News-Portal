<?php
include "config.php";
if($_SESSION["user_role"] == '0'){
  ?>
  <script>
    window.location.replace('post.php');
  </script>
  <?php
}
$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$userid}";

if(mysqli_query($conn, $sql)){
  ?>
  <script>
    window.location.replace('users.php');
  </script>
  <?php
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can\'t Delete the User Record.</p>";
}

mysqli_close($conn);

?>
