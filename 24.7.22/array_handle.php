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
// var_dump(empty(null));
// var_dump($array);

$array = array_remove_empty_item($array);

var_dump($array);

/**
 * Remove all empty item from Nested or Multi-dimension Array
 *
 * @param Array $array Obviously should be an Array. Otherwise it will return default value, what was it's own value.
 * @return Array it's regenrated Array
 * 
 * @link https://github.com/codersaiful/zend
 * @author Saiful Islam <codersaiful@gmail.com>
 */
function array_remove_empty_item($array){

    //Checking Array or not
    if(!is_array($array)) return $array;

    foreach( $array as $key => &$value ){
        if( empty( $value ) ){ //!is_bool($value) && //If we need also item also.
            unset( $array[$key] );
        }else{
            if( is_array( $value ) ){
                $value = array_remove_empty_item($value);
                // if( empty( $value ) ){
                //     unset( $array[$key] );
                // }
            }
        }
        
        

    }

    return $array;
}