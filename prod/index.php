<?php

print "<h1>demo app</h1>";
print "<h2>prod</h2>";

$h=file_get_contents('/etc/hostname'); 
print "hostname: $h";

?>

