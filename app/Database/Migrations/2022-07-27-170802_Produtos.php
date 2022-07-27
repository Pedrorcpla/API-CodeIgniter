<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'int',
                'auto_increment'    => true
            ],
            'name' => [
                'type'          =>  'varchar',
                'constraint'    =>  100
            ],
            'description' => [
                'type'  =>  'text',
            ],
            'price' => [
                'type' => 'double',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_produto');
    }

    public function down()
    {
        $this->forge->dropTable('tb_produto');
    }
}
