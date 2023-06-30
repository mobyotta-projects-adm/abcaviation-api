<?php

// $file = 'resources/views/livewire/pages/location/sections/sheduling.blade.php';
$file = 'resources/views/livewire/pages/location/sections/timesheets.blade.php';
$html =  $inputHTML = file_get_contents($file);


// Regex pattern to match select tags with wire:model attribute
$pattern = '/<select[^>]*wire:model=[\'"]([^\'"]+)[\'"][^>]*>/i';

// Array to store the wire:model attribute values
$wireModels = array();

// Match select tags with wire:model attribute and extract the values
preg_match_all($pattern, $inputHTML, $matches);

// Extract the captured values from the matches
if (isset($matches[1])) {
    $wireModels = $matches[1];
}

// Output the wire:model attribute values
// print_r($wireModels);


// Output the wire:model attribute values
foreach ($wireModels as $wireModel) {
    echo "public \$$wireModel;\n";
}

// Regex pattern to match select tags with wire:model attribute
$pattern = '/<select[^>]*wire:model=[\'"]([^\'"]+)[\'"][^>]*>.*?<option[^>]*value="([^"]+)"[^>]*>/si';

// Array to store the $model_name and value of the first option
$modelFirstOption = array();

// Match select tags with wire:model attribute and extract the values
preg_match_all($pattern, $inputHTML, $matches);

// Extract the captured values from the matches
if (isset($matches[1], $matches[2])) {
    $modelNames = $matches[1];
    $firstOptionValues = $matches[2];

    // Combine the $model_name and value of the first option
    $modelFirstOption = array_combine($modelNames, $firstOptionValues);
}

// Output the $model_name and value of the first option
print_r($modelFirstOption);