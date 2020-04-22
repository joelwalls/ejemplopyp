<?php
$app->get('/', 'App\Controllers\PageController:index');
$app->post('/', 'App\Controllers\PageController:process');