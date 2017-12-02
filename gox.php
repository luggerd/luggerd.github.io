<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.

$data = file_get_contents("https://data.mtgox.com/api/2/BTCUSD/money/ticker_fast");
$data = json_decode($data, true);
$spot_last = $data['data']['last']['value'];
print_r($spot_last);
?>
