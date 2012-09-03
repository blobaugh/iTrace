<?php
$a = array();
$cmd = 'traceroute -m ' . $_POST['hops'] . ' ' . $_POST['host'];
exec($cmd, $a);

$ret = '';
foreach($a AS $r) {
	$ret .= "$r<br />";
	echo "$r<br/>";
}

//echo $ret;