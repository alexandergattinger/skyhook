<?php

require_once("classes/router.php");

echo "<h2>Skyhook Index</h2>";

$route = new router;
print_r($route->getUrlArgs());


?>
