<?php
// header('Content-type:text/css');
require "../lessc.inc.php";
$less = new lessc;
$less->checkedCompile("less/input.less","css/output.css");