<?php

    $db_host = 'ec2-52-44-31-100.compute-1.amazonaws.com';
    $db_user = 'jfanbbtakcrtkz';
    $db_password = 'e5ac018ea687b65b0c27fd61ab4b9139a46dfe54be0a31de949c4b1c2cf01325';
    $db_name = 'd4eg82tgso2ql5';
    $db_port = '5432';

    try{
    $db = new PDO('pgsql:host='.$db_host.';port='.$db_port.';dbname='.$db_name.';charset=utf8',$db_user,$db_password);

    // set db attributes
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    // $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'Connected';
    
    }
    catch (PDOException $e){
        echo 'Connection failed: '.$e->getMessage();
    }
?>