<?php 
namespace App\Table;

use App\Table\Base\Int_Table;
use App\Table\Base\Table_Row;

class Table{
    public $table_id = 'table';
    public $table_heads = [];
    public $table_datas = [];
    public $table_rows = [];
    public function __construct()
    {
        $this->table_datas = [
            [
                'class' => 'my_tow_class',
                'content' => [
                    [
                        'name' => 'Saiful',
                        'address' => 'Dhaka, Bangladesh',
                        'mob'       => '012454544'
                    ],
                    
                    [
                        'name' => 'Fazle',
                        'address' => 'Dhaka, Bangladesh',
                        'mob'       => '012454544'
                    ],
                    [
                        'name' => 'Hanna',
                        'address' => 'Dhaka, Bangladesh',
                        'mob'       => '012454544'
                    ],

                ]
            ],
            
            [
                'class' => 'my_tow_class',
                'content' => [
                    [
                        'name' => 'Khan',
                        'address' => 'Dhaka, Bangladesh',
                        'mob'       => '012454544'
                    ],
                    
                    [
                        'name' => 'ss Saiful',
                        'address' => 'Dhaka, Bangladesh',
                        'mob'       => '012454544'
                    ],
                    [
                        'name' => ' dfd fSaiful',
                        'address' => 'Dhaka, Bangladesh',
                        'mob'       => '01233454544'
                    ],

                ]
            ],

        ];

        foreach( $this->table_datas as $key=>$t_row ){
            $class = $t_row['class'] ?? 'tr-row-' . $key;
            $tr_content = $t_row['content'] ?? [];
            $tr_row = new Table_Row();
            $tr_row->set_tds($tr_content);
            $tr_row->set_id('tr-' . $key) -> set_class( $class );
            $this->table_rows[] = $tr_row;
        }

        // var_dump($this->table_datas);
        // $tble_rows = $this->table_datas['content'] ?? [];

        // foreach( $tble_rows as $key => $row ){
        //     var_dump($row);
        //     $this->table_rows[] = new Table_Row($row);
        // }
    }
    
    

    public function display(){


        ?>
        <div class="my-table-wrapper">
            <?php  ?>
            <table class="table-class">
            <?php 
            // $this->get_header(); 
            ?>
            </table>
        </div>
        <?php
    }
    

}