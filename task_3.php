<?php

$grades = [85, 92, 78, 88, 95];

function sortgrades($grades) {
    rsort($grades);
    print_r($grades);
}

sortgrades($grades);
