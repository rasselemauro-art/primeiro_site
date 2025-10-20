<?php
$port= 8000;
echo "servidor PHP iniciado em http://localhost:$port\n";
exec(command: "php -S localhost:$port -t public");
?>