<?php 
namespace App\Table\Base;

class Table_Td{
    public $id;
    public $class;
    public $content = '';

    public function __construct( array $args = [] )
    {
        var_dump($args);
    }

    public function set_id( $id ){
        $this->$id = $id;
        return $this;
    }
    public function set_content( string $content ){
        $this->content = $content;
        return $this;
    }
    public function set_class( string $class ){
        $this->class = $class;
        return $this;
    }
    public function html(){
        return "<td id='{$this->id}' class='{$this->class}'>{$this->content}</td>";
    }    

    

}