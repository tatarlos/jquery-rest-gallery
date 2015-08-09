<?php

$imgDir = "img";
$numImages = 12;
$dataArray = array();

for($i = 1; $i <= $numImages; $i++):

	$dataArray[] = array(
		"id" => $i,
		"title" => "Title $i",
		"image" => "$imgDir/image-$i.jpg",
		"medium" => "$imgDir/medium-$i.jpg",
		"thumb" => "$imgDir/thumb-$i.jpg",
		"caption" => "Caption $i"
	);
endfor;

echo json_encode($dataArray);

exit;
?>