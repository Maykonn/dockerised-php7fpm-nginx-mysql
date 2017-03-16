<?php
#try {
#    $dbh = new PDO('mysql:host=db;dbname=myapp', 'admin', 'password');
#
#    foreach($dbh->query('SELECT * from mytable') as $row) {
#        print_r($row);
#    }
#    $dbh = null;
#} catch (Exception $e) {
#    print_r($e->getMessage());
#}

echo phpinfo();
