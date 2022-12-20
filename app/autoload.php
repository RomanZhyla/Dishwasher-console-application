<?php
const APP_DIR = __DIR__;

const REQUIRED_DIRS = [
    'Interfaces',
    'Cycles'
];

foreach (REQUIRED_DIRS as $dir) {
    foreach (glob(APP_DIR. "/{$dir}/*.php") as $filename) {
        require_once $filename;
    }
}