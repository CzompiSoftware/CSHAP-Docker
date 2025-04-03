<?php
function loadStatusMessages($directory) {
    $status_messages = [];

    foreach (glob($directory . '/*.json') as $file) {
        $lang_code = basename($file, '.json'); // Extract 'en', 'hu', etc.
        $json = file_get_contents($file);
        $data = json_decode($json, true);
        if (is_array($data)) {
            $status_messages[$lang_code] = $data;
        }
    }

    return $status_messages;
}

$status_messages = loadStatusMessages(__DIR__ . '/lang');
