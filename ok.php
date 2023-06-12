<?php
$l = 'resources/views/dashboard.blade.php';
$html_text = file_get_contents($l);

// remove script
// $html_text = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $html_text);

// remove modal
$html_text = preg_replace('/<div(?:\s+(?:(?:(?!class=)[^\s=>]+)(?:=[^\s=>]*)?)*\s+)?class="[^"]*\bmodal\b[^"]*"[^>]*>.*?<\/div>/i', '', $html_text);

file_put_contents($l, $html_text);
