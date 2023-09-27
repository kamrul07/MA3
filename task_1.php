<?php
$text = "The quick brown fox jumps over the lazy dog.";

function replaceText(string $text) {

    $newText = str_replace("brown", "red", $text);
    echo $newText;
}

replaceText($text);
