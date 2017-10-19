<?php

$workers = array();

// описание одного работника

$workers[0] = array();
$workers[0]["name"]       = "Vlad";
$workers[0]["lastname"]   = "Pupkin";
$workers[0]["age"]        = 53;
$workers[0]["tall"]       = 172;
$workers[0]["weight"]     = 119;
$workers[0]["gender"]     = "m";
$workers[0]["occupation"] = "programmer";

$workers[1]=array();
$workers[1]["name"]="David";
$workers[1]["lastname"]="Godfiend";
$workers[1]["age"]=25;
$workers[1]["tall"]=146;
$workers[1]["weight"]=68;
$workers[1]["gender"]="m";
$workers[1]["occupation"]="software developer";

$workers[2]=array();
$workers[2]["name"]="Ana";
$workers[2]["lastname"]="William";
$workers[2]["age"]=26;
$workers[2]["tall"]=175;
$workers[2]["weight"]=75;
$workers[2]["gender"]="f";
$workers[2]["occupation"]="shopkeeper";

$workers[3]=array();
$workers[3]["name"]="Vlad";
$workers[3]["lastname"]="Godfiend";
$workers[3]["age"]=46;
$workers[3]["tall"]=163;
$workers[3]["weight"]=79;
$workers[3]["gender"]="m";
$workers[3]["occupation"]="programmer";

$workers[4]=array();
$workers[4]["name"]="Alice";
$workers[4]["lastname"]="Smith";
$workers[4]["age"]=25;
$workers[4]["tall"]=174;
$workers[4]["weight"]=59;
$workers[4]["gender"]="m";
$workers[4]["occupation"]="voice actor";

$workers[5]=array();
$workers[5]["name"]="Rusty";
$workers[5]["lastname"]="Venture";
$workers[5]["age"]=62;
$workers[5]["tall"]=186;
$workers[5]["weight"]=64;
$workers[5]["gender"]="m";
$workers[5]["occupation"]="adventurer";

$workers[6]=array();
$workers[6]["name"]="Eve";
$workers[6]["lastname"]="Farmer";
$workers[6]["age"]=95;
$workers[6]["tall"]=185;
$workers[6]["weight"]=68;
$workers[6]["gender"]="f";
$workers[6]["occupation"]="Ice skater";

$workers[7]=array();
$workers[7]["name"]="Lance";
$workers[7]["lastname"]="Hail";
$workers[7]["age"]=78;
$workers[7]["tall"]=184;
$workers[7]["weight"]=83;
$workers[7]["gender"]="m";
$workers[7]["occupation"]="Cook";

$workers[8]=array();
$workers[8]["name"]="Ana";
$workers[8]["lastname"]="Kyer";
$workers[8]["age"]=46;
$workers[8]["tall"]=188;
$workers[8]["weight"]=77;
$workers[8]["gender"]="f";
$workers[8]["occupation"]="Animator";

$workers[9]=array();
$workers[9]["name"]="Ana";
$workers[9]["lastname"]="Bantan";
$workers[9]["age"]=24;
$workers[9]["tall"]=142;
$workers[9]["weight"]=97;
$workers[9]["gender"]="f";
$workers[9]["occupation"]="Youtuber";

// 1. находит людей с одинаковыми именами

$names = array();

foreach ($workers as $worker) {
    //var_dump($worker);

    if ($names[$worker["name"]] > 0) {
        $names[$worker["name"]] = $names[$worker["name"]] + 1;
    } else {
        $names[$worker["name"]] = 1;
    }
}

echo "1. Люди с одинаковыми именами:\n";

foreach ($names as $name => $count) {
    if ($count > 1) {
        echo "Имя $name встречается $count раза\n";
    }
}

echo "\n";

// 2. находит общую массу

$total_weight = 0;

foreach ($workers as $worker) {
    $total_weight = $total_weight + $worker["weight"];
}

echo "2. Общая масса всех работников: $total_weight kg\n\n";

// 3. находит самого опытного

$oldest_worker = $workers[0];

foreach ($workers as $worker) {
    if ($oldest_worker["age"] < $worker["age"]) {
        $oldest_worker = $worker;
    }
}

echo "3. Самый опытный работник:\n";
echo $oldest_worker['name'] . ' ' . $oldest_worker['lastname'] . ' которому ' . $oldest_worker["age"] . " лет\n\n";

// 4. находит разницу между самым высоким и самым низким

$tallest_worker = $workers[0];
$shortest_worker = $workers[0];

foreach ($workers as $worker) {
    if ($tallest_worker["tall"] < $worker["tall"]) {
        $tallest_worker = $worker;
    }

    if ($shortest_worker["tall"] > $worker["tall"]) {
        $shortest_worker = $worker;
    }
}

echo "4. Самый высокй работник:\n";
echo $tallest_worker['name'] . ' ' . $tallest_worker['lastname'] . ' - ' . $tallest_worker["tall"] . " cm\n";
echo "Самый низкий работник:\n";
echo $shortest_worker['name'] . ' ' . $shortest_worker['lastname'] . ' - ' . $shortest_worker["tall"] . " cm\n\n";

// 5. считает количество мужчин и женщин

$total_males = 0;
$total_females = 0;

foreach ($workers as $worker) {
    if ($worker["gender"] == "f") {
        $total_females++;
    }
    if ($worker["gender"] == "m") {
        $total_males++;
    }
}

echo "5. Количество мужчин и женщин:\n";
echo "Количество мужчин: " . $total_males . "\n";
echo "Количество женщин: " . $total_females . "\n\n";

// 6. находит самую повторяющуюся профессию

$occupations = array();

foreach ($workers as $worker) {
    //var_dump($worker);

    if ($occupations[$worker["occupation"]] > 0) {
        $occupations[$worker["occupation"]] = $occupations[$worker["occupation"]] + 1;
    } else {
        $occupations[$worker["occupation"]] = 1;
    }
}

$most_popular_profession;

foreach ($occupations as $occupation => $count) {
    if (empty($most_popular_profession)) {
        $most_popular_profession = $occupation;
    } else {
        if ($occupations[$most_popular_profession] < $count) {
            $most_popular_profession = $occupation;
        }
    }
}

echo "Самая повторяющаяся профессия: $most_popular_profession (". $occupations[$most_popular_profession] ." работников)";

?>