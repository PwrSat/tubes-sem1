<?php

require_once "core/inti.php";

session_destroy();
header("Location: login.php");

?>