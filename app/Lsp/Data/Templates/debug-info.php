<?php

echo json_encode([
    'php_version'     => phpversion(),
    'ugarit_version' => app()->version(),
]);
