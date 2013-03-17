<?php
$candidates = glob("images/*");
$myUrl = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']) . "/";

$picks = array();
foreach (array_rand($candidates, 2) as $key) {
	$picks[] = $myUrl . $candidates[$key];
}

$result = array(
	"urls" => $picks
);

echo str_replace('\/', '/', json_encode($result));
?>