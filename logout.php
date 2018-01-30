<?php

session_start();
session_destroy();

function display_content(){ ?>

<div class="logout-row">
    <h2>Log out Successfully.</h2> 
</div>

<?php
}

require "index.php";
?>