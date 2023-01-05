<?php

    session_destroy();
setcookie("adminuser", "", time() - 1);
    echo "
    <script>
 window.location.href='index.php';
    </script>";
?> 