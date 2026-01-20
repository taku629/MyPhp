<?php
$name = $_GET["name"] ?? "guest";
if($name === "guest"){
    echo "Hello Guest";
}else{
    echo "Hello " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
}