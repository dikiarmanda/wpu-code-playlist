<?php

$x = '';

$data = $x ?? 2;

$data = is_null($x) ? 2 : $x;

var_dump($data);