<?php
require __DIR__ . '/classes/DB.php';

$items = News::getAll();
include __DIR__ . '/view/index.php';
