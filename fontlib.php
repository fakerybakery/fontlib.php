<?php
/*
 * fontlib, a mrfakename library
 * fontlib is for PHP 7.4+
 *
 * Copyright © 2023 mrfakename.
 * All rights reserved.
 *
 * Email: me [at] mrfake [dot] name
 * Website: www.mrfake.name
 *
 * Not affiliated with Google Fonts
 * https://github.com/fakerybakery/fontlib.php
 * v1.0.0
 */
 
$availablefonts = ["Anuphan", "Architects Daughter", "Caveat", "Courgette", "DM Sans", "Dancing Script", "Delicious Handrawn", "Gloria Hallelujah", "Gochi Hand", "Golos Text", "Hanken Grotesk", "Indie Flower", "Kalam", "Marck Script", "Nanum Pen Script", "Pacifico", "Permanent Marker", "Roboto", "Rock Salt", "Satisfy", "Schibsted Grotesk", "Schoolbell", "Sedgwick Ave Display", "Shadows Into Light", "Sriracha"];
function generateFonts($usedFonts) {
    $url = 'https://fonts.googleapis.com/css2';
    $isFirst = true;
    foreach ($usedFonts as $font) {
        if ($isFirst) {
            $url .= '?family=';
            $isFirst = false;
        } else {
            $url .= '&family=';
        }
        $url .= urlencode($font);
    }
    $url .= '&display=swap';
    return $url;
}
