<?php

$data = ["name" => "Valdeson", "age" => 27];

ob_start();

extract($data);

require 'home.php';

$content = ob_get_contents();

ob_end_clean();

echo $content;