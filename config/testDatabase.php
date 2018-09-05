<?php
/**
 * Config file for Database.
 */

// Local use
return [
    "dsn"             => "mysql:host=127.0.0.1;dbname=anaxdb;",
    "username"        => "travis",
    "password"        => "",
    "driver_options"  => [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"],
    "fetch_mode"      => \PDO::FETCH_OBJ,
    "table_prefix"    => null,
    "session_key"     => "Anax\Database",

    // True to be very verbose during development
    "verbose"         => null,

    // True to be verbose on connection failed
    "debug_connect"   => false,
];
