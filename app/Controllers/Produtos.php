<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtosModel;

    public function __construct(){
        $this->produtosModel = new \App\Models\ProdutosModel();
    }

    public function listar()
    {
        $data = $this->produtosModel->findAll();
        return $this->response->setJson($data);
    }

    public function produto($id = null)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }

    public function produtosHiago($limit){
        $data = $this->produtosModel->getProdutosHiago($limit);
        return $this->response->setJson($data);
    }
    
    public function gravarProduto(){
        $this->produtosModel->save([
            'name'          => $this->request->getPost('name'),
            'description'   => $this->request->getPost('description'),
            'price'         => $this->request->getPost('price'),
        ]);
    }

    public function deletar($id){
        $this->produtosModel->delete($id);
    }

    public function atualizar($id){
        $data = $this->request->getJSON();
        $this->produtosModel->update($id, $data);
    }
}