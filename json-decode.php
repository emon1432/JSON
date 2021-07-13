<?php
$json_file = 'json/my.json';
$json_str = file_get_contents($json_file);
$arr = json_decode($json_str, true);

echo '<table border="1" cellpadding="10px" width="100%">';

foreach ($arr as list("id" => $id, "title" => $title, "body" => $body)) {
    echo "<tr><td>{$id}</td><td>{$title}</td><td>{$body}</td></tr>";
}

echo '</table>';







// echo "<pre>";
// print_r($arr);
// echo "</pre>";
?>