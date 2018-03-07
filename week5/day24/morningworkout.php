<?php

$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];



array_push($party, "gandalf", "gandalf the grey");

unset($party["bilbo"]);



array_push($party, "sam", "samwise gamgee");



unset($party["gandalf"]);

echo '<hr>';

function leave_hobbiton() {
    global $party;
    $result = array_merge($party,[
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]
    );
return $result;
}
leave_hobbiton();
var_dump(leave_hobbiton());



echo '<hr>';

function go_to_bree ($party) {
    array_push
}





