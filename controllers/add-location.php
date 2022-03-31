<?php

App::get('database')->insert('locations', [
    'location' => $_POST['location'],
]);

header('Location: /');