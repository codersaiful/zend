<?php 
namespace App\Table\Base;

class Table_Row{
    public $id;
    public $class;

    public $tds = [];

    public function set_id( $id ){
        $this->id = $id;
        return $this;
    }
    public function get_id(){
        return $this->id;
    }

    public function set_class( $class ){
        $this->class = $class;
        return $this;
    }
    public function set_tds( $tds ){
        if( ! is_array( $tds ) ) return [];
        var_dump($tds);
        foreach( $tds as $key => $td ){
            $my_td = new Table_Td($td);
            $my_td->set_id( 'row-' . $this->id . '-td-' . $key );
            $my_td->set_class( 'row-' . $this->id . '-td-' . $key );
            $this->tds = $my_td;
        }
        return $this;
    }

    
    

}