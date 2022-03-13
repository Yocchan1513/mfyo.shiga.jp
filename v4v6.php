<?php
$count = substr_count($_SERVER['REMOTE_ADDR'], ':');
if ($count > 0 ) {
    readfile('ipv6.png');
} else {
    readfile('ipv4.png');
}
?>
