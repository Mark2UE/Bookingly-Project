<?php

session_start();


if (isset($_SESSION['EMAIL']) && isset($_SESSION['PASSWORD'])) {
    include 'includes/user-navbar.php';
} else {
    include 'includes/default-navbar.php';
}
