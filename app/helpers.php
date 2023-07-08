<?php

function print_role($string)
{
    return implode(' ', array_map('ucwords', explode('_', $string)));
}
