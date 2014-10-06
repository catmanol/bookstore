<div id="admin_title">Admin page</div>

<?php session_start(); ?>

<?php if (!isset($_SESSION['admin'])): ?>
    //add the admin login form

<?php else: ?>
    //create admin page

<?php endif; ?>




