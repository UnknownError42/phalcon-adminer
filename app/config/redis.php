<?php
return [
    'client' => 'predis',

    'default'           =>['host'=>'127.0.0.1', 'database'=>0,  'port'=>6379, 'password'=>null,],
    'session'           =>['host'=>'127.0.0.1', 'database'=>0,  'port'=>6379, 'password'=>null,],
    'master'            =>['host'=>'127.0.0.1', 'database'=>1,  'port'=>6379, 'password'=>null,],
    'player_manage'     =>['host'=>'127.0.0.1', 'database'=>2,  'port'=>6379, 'password'=>null,],
    'player_world_1'    =>['host'=>'127.0.0.1', 'database'=>11, 'port'=>6379, 'password'=>null,],
    'player_world_2'    =>['host'=>'127.0.0.1', 'database'=>12, 'port'=>6379, 'password'=>null,],
];