<?php
$languages = ['PHP', 'Python', 'Ruby'];
foreach ($languages as $i => $language) {
    echo ($i + 1) . ". " . strtoupper($language) . "\n";
}
function square(int $n): int {
    return $n * $n;
}
echo "5 squared is " . square(5) . "\n";
