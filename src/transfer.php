<?php
$string = file_get_contents('data.json');
$data = json_decode($string, true);

foreach ($data as $k1 => $v1) {
  echo "\n## {$v1['title']}\n";

  foreach ($v1['items'] as $k2 => $v2) {
    echo "- [{$v2['title']}]({$v2['url']}\n";
  }
}