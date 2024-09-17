<?php
//TODO: Add a way to detect requested content type and respond accordingly
require("translations.php");

// echo var_dump($_GET);

$status = htmlspecialchars($_GET['q']) ?? -1;

// echo $status;
if (str_starts_with($status, "/")) {
    $status = substr($status, 1);
}

if (str_ends_with($status, ".html")) {
    $status = str_replace(".html", "", $status);
}

if (strlen($status) != 3) {
    $status = -1;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
    <title><?=$status_title_en[$status] ?? "Something went wrong"?> / <?=$status_title_hu[$status] ?? "Valami hiba történt"?> :: Czompi Software</title>
<?php /*if ($status == 502 || $status == 503) {?>
    <meta http-equiv="refresh" content="5">
<?php }*/ ?>
    <style>
        <?=include_once("assets/css/style.min.css")?>

    </style>
</head>
<body>
    <div class="content">
        <main>
            <div data-lang="en">
                <h1><?=$status_title_en[$status] ?? "Something went wrong"?></h1>
                <p><?=$status_desc_en[$status] ?? "Something went wrong in our end. Sorry for the incovinience."?></p>
            </div>
            
            <div data-lang="hu">
                <h1><?=$status_title_hu[$status] ?? "Valami hiba történt"?></h1>
                <p><?=$status_desc_hu[$status] ?? "Valami hiba történt a mi oldalunkon. Az okozott kellemetlenségért elnézést kérünk."?></p>
            </div>
            <footer>
                &copy; <a href="https://czsoft.hu">Czompi Software</a> <?=date("Y")?> 
            </footer>
        </main>
    </div>
</body>
</html><?php if ($status == 502 || $status == 503) {
    http_response_code(404);
} ?>