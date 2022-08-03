<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosModel extends Model
{
    protected $table            = 'tb_produto';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name', 'description', 'price'];

    public function getProduto($id = null)
    {
        return $this->asArray()->where(['id'=>$id])->first();
    }
}