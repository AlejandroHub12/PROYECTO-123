<?php
session_start();
session_unset();
session_destroy();
header("refresh1; url=index.html");
?>