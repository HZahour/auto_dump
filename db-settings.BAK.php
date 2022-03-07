<?php
/*
    Please setup all the info below correctly
*/

// Set here the database and backup info
define("DB_USER", "");
define("DB_PASS", "");

// This directory should be exist
define("BACKUP_DIR", "/path/for/mysqldumps");

// Set here the database names that to be backed up
$databases = array(
    "db_one",
    "db_two",
    "...",
);