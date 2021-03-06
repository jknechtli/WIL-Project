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

foreach ($descriptions as $key => $value) {
    if (strpos(strtolower($key), strtolower($query)) || strpos(strtolower($descriptions[$key]), strtolower($query))) {
        array_push($foundArray, $key);
    }
}

$s = "";
if (count($foundArray) > 1) {
    $s = "s";
}

echo count($foundArray) . " result" . $s . " found containing \"" . htmlspecialchars($query) . "\"";

$htmlReturn = "";
foreach ($foundArray as $key => $title) {
    $url = $urls[$title];
    $description = $descriptions[$title];

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

echo $htmlReturn;
