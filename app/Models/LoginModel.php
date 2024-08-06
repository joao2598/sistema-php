<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{

    protected $table = 'logins';
    protected $primaryKey = 'id_login';
    protected $allowedFields = [
        'id_login',
        'usuario',
        'senha',
        'primeiro_nome'
    ];

    protected $useTimestamp = true;
    protected $createdField = 'created_at';
    protected $updatedFiled = 'updated_at';
    protected $deletedField = 'deleted_at';

}


?>