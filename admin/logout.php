
<?php

include "config.php";

session_start();

session_unset();

session_destroy();

?>
<script>
  window.location.replace('index.php');
</script>
<?php

?>
