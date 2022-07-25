<?php 
$array = [
    [
        'saiful'    => 'Saiful Islam',
        'name'      => 'Saiful Islam',
        'age'       => 37,
        'details'=> [
            'address'           => 'Rajshahi, Bangladesh',
            'permanent_address' => 'Rajshahi, Bangladesh',
            'id'                => 'KLLD12233',
        ]
    ],
    
    
    'personal_details' => [
        'saiful'    => 'Saiful Islam',
        'name'      => 'Saiful Haque',
        'degination'=> '',
        'married'   => true,
        'age'       => 35,
        'details'   => [
            'address'           => 'Dhaka, Bangladesh',
            'permanent_address' => 'Rajshahi, Bangladesh',
            'id'                => 'KLLFF12233',
            'others'            => '',
            'nothing'           => ''
        ]
    ],
    [
        'saiful'    => 'aSaiful Islam',
        'name'      => 'Saiful Haque',
        'age'       => 38,
        'details'   => [
            'address'           => '',
            'permanent_address' => 'Rajshahi, Bangladesh',
            'id'                => 'KLLFF12233',
        ]
    ],
    '',
    'empty_value'   => '',
    'blank'         => '',
    'false'         => false,
    'true'          => true,
    'null'          => null,
    'closure_fun'   => function(){
        echo "Hello World";
    },
    null,
    false,
    true,
    'my_name'       => 'Saiful Islam',
    'post'          => $_POST,
    'get'           => $_GET,
    'my_class'      => new class{
        
        public $value = "Test Value";
        public function getValue(){
            return $this->value;
        }
    }

];
