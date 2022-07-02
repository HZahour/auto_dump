# Auto Dump
This script does dump and compress databases that are specified. It is basically written for cron job.

### Steps to setup the script
- Copy the **db-settings.BAK.php** file to **db-settings.php**.
- Enter the database connection and backup info in **db-settings.php**.
- Enter the following crontab script with correct path into the crontab. It will run and back up every midnight at 2am.

### Crontab script
    0 2 * * * /usr/bin/php7.3 /path/of/this/mysqldump.php

### To uncompress
    gzip -dk my_zip_file.gz

### To restore
    mysql -h dbhost -u dbuser -p db_name < dbdump.dump