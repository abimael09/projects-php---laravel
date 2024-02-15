<?php

$csv = ',.Vinicis Dias,24,.';

# função trim
echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;