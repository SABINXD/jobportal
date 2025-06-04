<?php
// session_start(); // Ensure this is at the top
require_once 'assets/php/function.php';

// Redirect to ?home if no specific query string is provided
if(!isset($_SESSION['auth']) && !isset($_GET['login']) && !isset($_GET['signup']) ){
    showPage('main');
}
if (isset($_GET['home'])) {
    showPage('main');
}
if (isset($_GET['signup']) && !isset($_SESSION['auth'])) {
    showPage('signup');
}elseif(isset($_GET['login']) && !isset($_SESSION['auth'])){
    showPage('login');
}

// Clear session data after processing
if (!isset($_GET['signup'])) {
    unset($_SESSION['error']);
    unset($_SESSION['formdata']);
}
?>