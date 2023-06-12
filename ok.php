<?php
$l = 'resources/views/user/shedule.blade.php';
$html_text = file_get_contents($l);


$html_text = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $html_text);
file_put_contents($l, $html_text);
