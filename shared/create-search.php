<?php


$url = __DIR__ . '/urls.json';
$json = file_get_contents($url);

$urls = [];

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($jsonIterator as $key => $val) {
    $urls[$key] = $val;
}


$url = __DIR__ . '/descriptions.json';
$json = file_get_contents($url);

$descriptions = [];

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($jsonIterator as $key => $val) {
    $descriptions[$key] = $val;
}


$query = $_GET["search"];
$foundArray = [];

// echo "<script>console.log('";

foreach ($descriptions as $key => $value) {
    // echo "Query " . $query . ",  key: " . $key . ",  value: " . $descriptions[$key] . "\n\n";
    // unset($array[$key]); 
    if (strpos(strtolower($key), strtolower($query)) || strpos(strtolower($descriptions[$key]), strtolower($query))) {
        array_push($foundArray, $key);
        // $foundArray.push
    }
}
// echo "');</script>";

$s = "";
if (count($foundArray) > 1) {
    $s = "s";
}

echo count($foundArray) . " result" . $s . " found containing \"" . $query . "\"";

$htmlReturn = "";
// echo "<script>console.log('";
foreach ($foundArray as $key => $title) {
    $url = $urls[$title];
    $description = $descriptions[$title];
    // echo "value: " . $value . ",  title: " . $title . ",  url: " . $url . "\n\n";

    $panel = "
    <div class='search-option'>
        <a href='{$url}'>
            <h2>{$title}</h2>
            <p>
                {$description}
            </p>
        </a>
    </div>";
    $htmlReturn .= $panel;
}
// echo "');</script>";

echo $htmlReturn;
echo "<script>console.log('";
echo "Mail Sent. Thank you " . $query . ", we will contact you shortly. " . count($foundArray) . " asda sd  " . $htmlReturn;
echo "');</script>";
