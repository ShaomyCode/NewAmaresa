<?php
session_start();
if (isset($_GET['HouseID'])) {
    $_SESSION['HouseID'] = $_GET['HouseID'];
}
?>
