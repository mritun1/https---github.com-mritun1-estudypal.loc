<?php
$url = "https://www.w3schools.com/";

function get_meta_web($query,$url){
    $metas = get_meta_tags($url);
    return $metas[$query];
}
echo get_meta_web('description',$url);


//echo "<pre>"; print_r($metas); echo "</pre>";
// $description = $metas['description'];
// $keywords = $metas['keywords'];
// $rating = $metas['rating'];

// function to get webpage title
function getTitle($url) {
    $page = file_get_contents($url);
    $title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
    return $title;
}
// echo 'Title: ' . getTitle($url);
?>