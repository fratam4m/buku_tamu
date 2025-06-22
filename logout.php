<?php
    session_start();
    session_destroy();
?>
<script>
        alert("Log Out Berhasil");
        document.location = "login.php";
    </script>
