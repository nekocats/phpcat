<?php

$tasks = $query->selectAll('todos');

require_once 'views/index.view.php';