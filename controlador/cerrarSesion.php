<?php
session_start();
session_destroy();
echo '<script type="text/javascript">
alert("¡Vuelve pronto!");
window.location.href="..";
</script>';
