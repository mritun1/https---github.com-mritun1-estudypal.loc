<?php 
header('Access-Control-Allow-Origin: *');
StartAPI('WEBSITE', $exp_req[3] ?? null, $exp_req[4] ?? null); 
?>