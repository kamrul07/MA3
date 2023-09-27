<?php

$studentGrades = [
    "Kamal" => [
        "Maths" => 90,
        "English" => 80,
        "Science" => 100,

    ],
    "Jamal" =>   [
        "Maths" => 99,
        "English" => 78,
        "Science" => 92,

    ],
    "Rahim" =>  [
        "Maths" => 95,
        "English" => 87,
        "Science" => 93,

    ]
];


function printAvarage($studentGrades) {

    // for ($i = 0; $i <= count($studentGrades); $i++ ){
    //    $avarage = array_sum($studentGrades[$i]);
    //    $studentname 
    //    echo "Avarage of Student {$i + 1}"
    // }

    foreach ($studentGrades as $name => $numbers) {

        $avarage = array_sum($numbers) / count($numbers);

        echo "Avarage number of {$name} is " . $avarage . "\n";
    }
}
printAvarage($studentGrades);