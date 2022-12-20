<?php
require_once 'autoload.php';

use Cycles\RegularWash;
use Cycles\PanAndPots;
use Cycles\DryCycle;

if ($argc === 2) {
    if ($argv[1] === '--help') {
        include(APP_DIR.'/Views/help.php');
    } else if ($wash = checkMode($argv[1])) {
        $wash->runClean();
    } else {
        echo "undefined command for more info please use --help\n";
    }
} else {
    include(APP_DIR.'/Views/welcome.php');
}

function checkMode(string $mode){
    if ($mode === 'mode=1') {
        $wash = new RegularWash();
    }
    if ($mode === 'mode=2') {
        $wash = new PanAndPots();
    }
    if ($mode === 'mode=3') {
        $wash = new DryCycle();
    }

    return $wash ?? null;
}