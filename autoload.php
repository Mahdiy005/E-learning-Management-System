<?php

// echo '<pre>';
// print_r(glob('../core/*.php'));
// echo '</pre>';

// make include to all pathes that in folder core
foreach(glob('../core/*.php') as $path)
{
    require_once $path;
}
unset($path);
foreach(glob('../config/*.php') as $path)
{
    require_once $path;
}