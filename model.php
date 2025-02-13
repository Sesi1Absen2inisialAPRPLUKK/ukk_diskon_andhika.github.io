<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    $theme = 0;
    if (isset($_COOKIE['theme'])){
        $theme = $_COOKIE['theme'];
    }
    $persist = 1;
    if (isset($_COOKIE['persist'])){
        $persist = $_COOKIE['persist'];
    }
    $palette = array(
        //Foreground, Text, Submit, Reset, Clear, Background, Game credits, Image credits
        array("light", "black", "primary", "secondary", "danger", "ocean.jpg", "", ""),
        array("dark", "white", "info", "secondary", "danger", "ghost.jpg", "https://store.steampowered.com/app/1475810/GhostWire_Tokyo/", "https://wall.alphacoders.com/big.php?i=1216716"),
        array("dark", "pink", "danger", "warning", "secondary", "city.png", "https://store.steampowered.com/app/420530/OneShot/", "https://wallpaperaccess.com/oneshot")
    );
    $maincol = $palette[$theme][0];
    $textcol = $palette[$theme][1];
    $submitcol = $palette[$theme][2];
    $resetcol = $palette[$theme][3];
    $clearcol = $palette[$theme][4];
    $background = $palette[$theme][5];
    $gamecred = $palette[$theme][6];
    $imgcred = $palette[$theme][7];
    ?>
    <style>
        body{
            background: url("assets/<?=$background?>") no-repeat center fixed;
            background-size: cover;
        }
        a, a:hover, a:active {
            text-decoration: none;
        }
        td{
            word-wrap: break-word;
        }
        h2, label, p, a, a:hover, a:active, td, .text-pal{
            color: <?=$textcol?>;
        }
    </style>
</head>