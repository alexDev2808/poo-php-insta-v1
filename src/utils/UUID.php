<?php 

namespace Alexis\Poo\utils;

class UUID {

    public static function generate() {
        return uniqid();
    }
}