<?php

$data = file_get_contents("./law.json");
$articles = json_decode( $data, true );

echo $articles[1]->"text";

?>