<?php
/*------------ Nothing to edit here -------------*/

require_once "db-settings.php";

// Database settings 
$db_user  = DB_USER;
$db_pass  = DB_PASS;
$db_host  = DB_HOST;
$backup   = BACKUP_DIR;

// Timestamp format of backup name
date_default_timezone_set("Asia/Dhaka");
$time = date("Ymd_His");

// Dumps, compresses and saves the every database files
foreach($databases as $db){
    exec("/usr/bin/mysqldump -h $db_host -u $db_user -p$db_pass $db | gzip > $backup/$time-$db.dump.gz");
}