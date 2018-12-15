<?php
return [
    'default'=>'master',

    'admin'         =>['name'=>'Admin', 'config'=>['dbname'=>'thrones_admin', 'username'=>'thrones','password'=>'thrones', 'adapter'=>'Mysql', 'charset'=>'utf8', 'host'=>'127.0.0.1', 'port'=>3306, 'options'=>[PDO::FETCH_ASSOC,], ]],
    'master'        =>['name'=>'Master', 'config'=>['dbname'=>'thrones_admin', 'username'=>'thrones','password'=>'thrones', 'adapter'=>'Mysql', 'charset'=>'utf8', 'host'=>'127.0.0.1', 'port'=>3306, 'options'=>[PDO::FETCH_ASSOC,], ]],
    'player_manage' =>['name'=>'PlayerManage', 'config'=>['dbname'=>'thrones_admin', 'username'=>'thrones','password'=>'thrones', 'adapter'=>'Mysql', 'charset'=>'utf8', 'host'=>'127.0.0.1', 'port'=>3306, 'options'=>[PDO::FETCH_ASSOC,], ]],
    'player_1'      =>['name'=>'Player#1', 'config'=>['dbname'=>'thrones_admin', 'username'=>'thrones','password'=>'thrones', 'adapter'=>'Mysql', 'charset'=>'utf8', 'host'=>'127.0.0.1', 'port'=>3306, 'options'=>[PDO::FETCH_ASSOC,], ]],
];