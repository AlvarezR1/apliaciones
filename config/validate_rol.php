<?php
if($_SESSION['rol'] !== '1'){
    header("Location: ../../index.php");
}
?>