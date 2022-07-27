<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $names = ['Computador', 'Celular', 'Tablet'];
        $description = ['Computador processador atom, bom, barato, automático e tecnologico.', 'Celular processador atom, bom, barato, automático e tecnologico.', 'Tablet processador atom, bom, barato, automático e tecnologico.'];
        $price = [2500, 1200, 2000];

        for($x = 0; $x < 0; $x++){
            $data = [
                'name'          => $names[$x],
                'description'   => $description[$x],
                'price'         => $price[$x]
            ];
    
            // Using Query Builder
            $this->db->table('tb_produto')->insert($data);
        }
    }
}