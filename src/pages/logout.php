<?php
require_once 'log.php';

if (isUserLoggedIn() == true) {
    logoutUser();
}

?>