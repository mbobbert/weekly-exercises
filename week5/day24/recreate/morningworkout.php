<?php
$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];



echo '<hr>';

$party['gandalf'] = 'gandalf the grey';



echo '<hr>';

unset($party['bilbo']);

echo '<hr>';

$party['sam'] = 'samwise';



echo '<hr>';

unset($party['ring']);



echo '<hr>';


function leave_hobbiton() {
    global $party;
    $party= array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
    return $party;
}
leave_hobbiton();


function go_to_bree($party) {
    global $party;
    $party['strider'] = 'Strider';
    return $party;
}

go_to_bree($party);
var_dump(go_to_bree($party));

echo '<hr>';

function go_to_weathertop(&$party) {
    $party = array_merge($party, [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
    ]);
    return $party;
}

go_to_weathertop($party);

var_dump(go_to_weathertop($party));

echo '<hr>';

function meet_arwen() {
    global $party;
    $party['arwen'] = 'Arwen Udomiel';
    array_splice($party, -10, 9);
    return $party;
}

meet_arwen($party);

var_dump(meet_arwen());

echo '<hr>';

function go_to_rivendell(&$party) {
unset($party['arwen']);
$party = array_merge($party, [
    'gandalf' => 'Gandalf the Grey',
    'boromir' => 'Boromir',
    'legolas' => 'Legolas',
    'gimli' => 'Gimli'
]);
$party['strider'] = 'Aragorn';
}

go_to_rivendell($party);
var_dump(go_to_rivendell($party));

echo '<hr>';

function go_to_moria(&$party) {
    unset($party['gandalf']);
}

go_to_moria($party);

var_dump(go_to_moria($party));

function go_to_falls_of_rauros(&$party) {
    $party = array_merge($party, array_fill(0, 1000, 'Orc'));
    unset($party['boromir']);
}

go_to_falls_of_rauros($party);

var_dump(go_to_falls_of_rauros($party));

function break_fellowship() {
    global $party;
    $mordor_party = [];
    $mordor_party['frodo'] = $party['frodo'];
    $mordor_party['sam'] = $party['sam'];
    $mordor_party['ring'] = $party['ring'];
    $hunting_party =[];
    $hunting_party['strider'] = $party['strider'];
    $hunting_party['legolas'] = $party['legolas'];
    $hunting_party['gimli'] = $party['gimli'];
    $hungry_party =[array_diff_key($party, $mordor_party, $hunting_party)];
    return [$mordor_party, $hunting_party, $hungry_party];

}
$party = break_fellowship();

var_dump($party);
var_show($party);






