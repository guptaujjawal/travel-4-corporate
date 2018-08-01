<?php
require 'core.inc.php';
session_destroy();
header('Location:http://localhost/minor/index.htm');
//header('Location:'.$http_referer);
?>