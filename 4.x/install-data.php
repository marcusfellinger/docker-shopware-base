#!/usr/bin/php
<?php

// Read shopware config
$config = include '/shopware/config.php';
extract($config['db']);

$mysql_conn = "mysql -u$username -p$password -h$host -P$port '$dbname'";

if (file_exists('/shopware/demo.sql')) {
    echo shell_exec("$mysql_conn < /shopware/demo.sql 2>&1");
    echo shell_exec("rm /shopware/demo.sql 2>&1");
}