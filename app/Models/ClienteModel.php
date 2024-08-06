<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = [
        'id_cliente',
        'nome',
        'data_de_nascimento',
        'telefone',
        'endereco',
        'limite_de_credito',
    ];

    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

}


?>