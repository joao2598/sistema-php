<?php

namespace App\Controllers;

use App\Models\ClienteModel;

use App\Models\FuncionarioModel;

use App\Models\ProdutoModel;

use CodeIgniter\Controller;

class Inicio extends Controller{

    private $cliente_model;
    private $funcionario_model;


    function __construct(){

        $this->cliente_model = new ClienteModel();
        $this->funcionario_model = new FuncionarioModel();
        $this->produto_model = new ProdutoModel();


    }

    public function index(){

        $total_de_clientes = count(
            $this->cliente_model->findAll()
        );

        $total_de_funcionarios = count(
            $this->funcionario_model->findAll()
        );

        $total_de_produtos = count(
            $this->produto_model->findAll()
        );

        $data['total_de_clientes'] = $total_de_clientes;
        $data['total_de_funcionarios'] = $total_de_funcionarios;
        $data['total_de_produtos'] = $total_de_produtos;


        echo View('templates/header');
        echo View('inicio/index', $data);
        echo View('templates/footer');

    }

}

?>