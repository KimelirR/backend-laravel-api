<?php

$string = 'http://127.0.0.1/app/laravel/images/admin/article/slug';
$explode = explode('/images/', $string);
$last = 'https://cdn.prod.www.spiegel.de/images/'.end($explode);
print_r($last);
?>
