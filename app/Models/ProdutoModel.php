<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{

    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    protected $allowedFields = [
        'id_produto',
        'nome',
        'descricao',
        'qualidade',
        'quantidade_minima',
        'valor_de_compra',
        'valor_de_venda',
        'margem_de_lucro',
        'validade',
    ];

    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

}


?>