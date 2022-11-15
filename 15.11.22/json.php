<?php 
$myjson = '{"name":"Saiful Islam","age":37, "others":["hel":"welcome","something"]}';
var_dump($myjson);
var_dump(json_decode($myjson));
$another_json = <<<json

[
    {"name":"Saiful Islam","age":37},
    {"name":"Saiful Islams","age":34}
]
json;

var_dump(json_decode($another_json));