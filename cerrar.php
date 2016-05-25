<?php
session_name('usser');
session_start();
session_unset();
session_destroy();
echo '<a href="inicio.html">Volver a inicio</a>';
?>