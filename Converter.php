<?php
require_once(__DIR__ . '/src/RomanConverter.php');

if(isset($argv[1])) {
    echo \NumeralsConverter\RomanConverter::toRoman((integer)$argv[1]);
} else {
    echo 'Please pass the parameter.';
}
echo "\n";