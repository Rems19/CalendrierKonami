<?php

ob_start();
setcookie("unlocked", "true");
ob_end_flush();

?>


<?php include("header.php"); ?>

<div style="margin-top:15%;" />
<h1>Konami Code</h1>
<h3>Everything Unlocked</h3>

<?php include("footer.php"); ?>

<script>
    setTimeout(() => {
        window.location.replace("index.php");
    }, 3000);
</script>