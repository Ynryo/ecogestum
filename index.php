<?php 
include(dirname(__FILE__, 1) . '/assets/src/files_header.php');

if (isset($_SESSION["user_id"])) {
    include(dirname(__FILE__, 1) . '/assets/view/landing-page-log-in.php');
} else {
    include(dirname(__FILE__, 1) . '/assets/view/landing-page.php');
}