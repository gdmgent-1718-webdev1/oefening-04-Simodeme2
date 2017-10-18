<?php

function type($watIs){
    return "De waarde is " . gettype($watIs) . "<br>";
}

echo type('Simon');
echo type(true);
echo type(6.4);
echo type(9);
echo type(["Fruit", "vlees"]);