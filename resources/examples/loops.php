<?php
$features = ["Open Source", "Cross-Platform", "Easy to Learn"];
foreach ($features as $i => $feature) {
    echo ($i + 1) . ". " . $feature . "\n";
}
echo count($features) . " features listed\n";
