<?php

// You can declare functions to re-use codes.
// Great alongside includes. :>
function make_coffee($type = 'Americano') {
    echo 'You made a cup of ' . $type . '<br>';
}

// Use default argument
make_coffee();

// Americano is shit so make a mocha instead.
make_coffee('Mocha');
