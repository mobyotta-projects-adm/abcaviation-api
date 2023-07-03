<?php

// $file = 'resources/views/livewire/pages/location/sections/sheduling.blade.php';
$file = 'resources/views/tables/buttons/users.blade.php';
$file = 'resources/views/livewire/pages/edit_user/personal/personal.blade.php';
$html =  $inputHTML = file_get_contents($file);

$pattern = '/wire:model=["\'](.*?)["\']/i';
preg_match_all($pattern, $html, $matches);

$modelAttributes = $matches[1];
// Output the wire:model attribute values
foreach ($modelAttributes as $wireModel) {
    echo "public \$$wireModel;\n";
}
