<?php
function greet(string $name): string
{
    return "Hello, " . ucfirst($name) . "!";
}
echo greet("ada") . "\n";
echo strtoupper(greet("grace")) . "\n";
